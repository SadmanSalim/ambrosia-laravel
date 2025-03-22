<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceDetails;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    function Services() {
        $services = Service::find(id: 1);
        $service_details = ServiceDetails::all();
        return view ('admin.services', compact('services', 'service_details'));
    }
    function UpdateService(Request $request, $id=1){
       $service = Service::findOrFail($id);
       $service->update([
        'service' => $request->disc,
       ]);
       return back()->with('msg', 'Service Description Updated Successfully');
    }

    function StoreServiceDetails(Request $request){
        $request->validate([
            'service' => 'required|min:3',
        ]);

        ServiceDetails::create([
            'service' => $request->service,
        ]);

        return back()->with('msg', 'Service Added Successfully');
    }
    function ServiceDelete($id){
        $service = ServiceDetails::findOrFail($id);
        $service->delete();
        return Back()->with('msg', 'Service Deleted Succesfully');
    }
}
