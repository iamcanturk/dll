<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cabinet;

class AllCabinetsController extends Controller
{
    public function index()
    {

        $cabinets  = Cabinet::join('users as u', 'cabinets.user_id', '=', 'u.id')
            ->select('cabinets.*', 'u.name as user_name', 'u.surname')
            ->get();


        return view('panel/admin/cabinet/index', compact('cabinets'));
    }

    public function show(Cabinet $cabinet)
    {
        return view('panel/admin/cabinet/show', compact('cabinet'));
    }

    public function edit(Cabinet $cabinet)
    {
        return view('panel/admin/cabinet/edit', compact('cabinet'));
    }

    public function update(Request $request, Cabinet $cabinet)
    {
        $cabinet->update($request->all());
        return redirect()->route('admin.cabinet.index');
    }

    public function destroy($id)
    {
        Cabinet::destroy($id);

        if (Cabinet::find($id)) {
            return redirect('panel/all-cabinets')->with('error', 'Kabin silinemedi.');
        }
        else
        {
            // return redirect with success message
            return redirect('panel/all-cabinets')->with('success', 'Kabin başarıyla silindi. ');
        }
    }


}
