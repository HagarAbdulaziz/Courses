<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicesController extends Controller
{
    public function index()
    {

        $services=Service::get();
        return view ('dashboard.services.index',compact('services'));
    }
    public function create()
    {
        return view ('dashboard.services.create');
    }

    public function store (Request $request)
    {
        $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'description_ar' => 'required',
            'description_en' => 'required',
            'icon'=>'required',


        ]);
        $image=$request->file('icon');
        $ext=$image->getClientOriginalExtension();
        $name="icon-".uniqid().".$ext";
        $image->move(public_path('images/icons'),$name);
        Service::create([
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'description_ar'=>$request->description_ar,
            'description_en'=>$request->description_en,
            'icon'=>$name,
        ]);
        return redirect(route('admin.services'))->with(['success' => 'Added successfully']);
    }
    public function edit($id)
    {
        $service=Service::find($id);
        return view ('dashboard.services.edit',compact('service'));

    }
    public function update(Request $request ,$id)
    {
        $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'description_ar' => 'required',
            'description_en' => 'required',
            'icon'=>'nullable',
            ]);
        try {
            $service=Service::find($id);
            if($service){
            DB::beginTransaction();
            $name=$service->icon;
            if($request->hasfile('icon'))
          {

            $icon=$request->file('icon');
            $ext=$icon->getClientOriginalExtension();
            $name="icon-".uniqid().".$ext";
            $icon->move(public_path('images/icons'),$name);
           }

           $service->update([
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'description_ar'=>$request->description_ar,
            'description_en'=>$request->description_en,
            'icon'=>$name,
        ]);

        DB::commit();
        return redirect(route('admin.services'))->with(['success' => 'updated successfully']);
          }
          else
          return redirect()->back()->with(['error' => 'not found']);

        }
          catch (\Exception $ex) {
            DB::rollback();
              return redirect()->back()->with(['error' => 'error']);
          }

    }
    public function delete($id)
    {
        $service=Service::find($id);
        $service->delete();
        return redirect(route('admin.services'))->with(['success' => 'Deleted successfully']);
    }
}
