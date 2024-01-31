<?php

    namespace App\Http\Controllers;

    use App\Models\Offer;
    use Illuminate\Http\Request;

    class OfferController extends Controller
    {
        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            $offers = Offer::all()->where('user_id', auth()->user()->id);
            $page_title = 'Teklifler';

            return view('panel.offer.index', compact('offers', 'page_title'));
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'name' => 'required',
                'service_type' => 'required|in:domain,server,location,other',
                'details' => 'required'
            ]);



            // After validation, create the offer
            $user_id = auth()->user()->id;

            $offer = Offer::create([
                'name' => $request->name,
                'service_type' => $request->service_type,
                'details' => $request->details,
                'user_id' => $user_id
            ]);

                return redirect()->route('offer.index')->with('success', 'Teklifiniz başarıyla oluşturuldu.');

        }

        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            $page_title = 'Teklif Oluştur';

            return view('panel.offer.create', compact('page_title'));
        }

        /**
         * Display the specified resource.
         */
        public function show(Offer $offer)
        {
            // find offer and show it
            $page_title = $offer->name;
            $offer = Offer::find($offer->id);

            return view('panel.offer.show', compact('offer', 'page_title'));

        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit(Offer $offer)
        {
            //
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, Offer $offer)
        {
            //
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy(Offer $offer)
        {
            //
        }
    }
