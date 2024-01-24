<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class ProfileController extends Controller
    {
        public function index()
        {
            $page_title = 'Hesabım';
            // get the currently authenticated user information and return with the view
            return view('panel/profile/index', ['user' => auth()->user()], compact('page_title'));
        }

        // edit the currently authenticated user information

        public function edit($id)
        {
            $page_title = 'Hesap Düzenle';

            // get the currently authenticated user information and return with the view
            return view('panel/profile/edit', ['user' => auth()->user()], compact('page_title'));
        }

        // update the currently authenticated user information

        public function update(Request $request, $id)
        {
            // validate the input
            $request->validate(['name' => 'required', 'email' => 'required|email',]);

            // if validation fails, redirect back with errors
            if ($request->fails()) {
                return redirect()->back()->withErrors($request->errors());
            }

            // update the currently authenticated user information
            auth()->user()->update($request->all());

            // redirect to the profile page
            return redirect()->route('profile.index');
        }
    }
