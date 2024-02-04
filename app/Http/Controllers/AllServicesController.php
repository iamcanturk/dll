<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class AllServicesController extends Controller
{

    public function index()
    {
        // Get all services with user name and surname
        $services = Service::join('users as u', 'services.user_id', '=', 'u.id')
            ->select('services.*', 'u.name as user_name', 'u.surname')
            ->get();



        return view('panel/service/index', ['services' => $services]);
    }

    public function show($id)
    {
        return view('service', ['id' => $id]);
    }

    public function create()
    {
        return view('create-service');
    }

    public function store(Request $request)
    {
        return redirect('/all-services');
    }

    public function edit($id)
    {
        return view('edit-service', ['id' => $id]);
    }

    public function update(Request $request, $id)
    {
        return redirect('/all-services');
    }

    public function destroy($id)
    {
        // Delete service
        Service::destroy($id);

        // if delete was'nt successful return error
        if (Service::find($id)) {
            return redirect('panel/all-services')->with('error', 'Service was not deleted');
        }
        else
        {
            // return redirect with success message
            return redirect('panel/all-services')->with('success', 'Hizmet başarıyla silindi. ');
        }

    }
}
