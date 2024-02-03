<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        // Get all users from the database
        $users = User::all();
        return view('panel.admin.user.index', compact('users'));
    }
    public function store(Request $request)
    {

        $rules = [
            'name' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'tax_office' => 'required|string|max:255',
            'tax_number' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'role' => 'required|in:admin,user',
            'password' => 'required|string|min:8',
        ];

        // Validasyon işlemi
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            $user = new User;
            $user->name = $request->name;
            $user->surname = $request->surname;
            $user->phone = $request->phone;
            $user->company = $request->company;
            $user->tax_office = $request->tax_office;
            $user->tax_number = $request->tax_number;
            $user->email = $request->email;
            $user->role = $request->role;
            $user->password = Hash::make($request->password); // Şifreyi güvenli bir şekilde saklamak için Hash::make kullanılır
            $user->save();
            return redirect('user')->with('success', 'Kullanıcı başarıyla eklendi.');
        } catch (\Exception $e) {
            // Hata oluştuğunda kullanıcıya hata mesajı döndür
            return back()->with('error', 'Kullanıcı eklenirken bir hata oluştu: ' . $e->getMessage());
        }
        return redirect('user')->with('success', 'User has been added');
    }

    public function create()
    {
        return view('panel.admin.user.create');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('panel.admin.user.show', compact('user'));
    }


    public function edit($id)
    {
        $user = User::find($id);
        return view('panel.admin.user.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {

        // if password is not empty, then update password else do not update password
        if($request->password != null){
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
            ]);
        }else{
            $request->validate([
                'name' => 'required',
                'email' => 'required',
            ]);
        }



        $user = User::find($id);
        $user->name = $request->get('name');
        $user->surname = $request->get('surname');
        $user->phone = $request->get('phone');
        $user->company = $request->get('company');
        $user->tax_office = $request->get('tax_office');
        $user->tax_number = $request->get('tax_number');
        $user->email = $request->get('email');
        if($request->password != null){
            $user->password = Hash::make($request->get('password'));
        }
        $user->save();




        return redirect('panel/user')->with('success', 'Kulllanıcı başarıyla güncellendi.');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        try {
            $user->delete();
        } catch (\Exception $e) {
            return redirect('panel/user')->with('error', 'Kullanıcı silinirken bir hata oluştu: ' . 'Üzerinde aktif bir hizmet bulunuyor olabilir.');
        }
        return redirect('panel/user')->with('success', 'Kullanıcı Başarıyla Silindi');
    }



}
