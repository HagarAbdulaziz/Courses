<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartenersController extends Controller
{
    public function index()
    {
        $partners=Partner::paginate(8);
        return view('dashboard.partners.index',compact('partners'));
    }

    public function create()
  {
    return view ('dashboard.partners.create');

  }

 public function store (Request $request)
 {

    $request->validate([
        'logo'=>'required',

    ]);
   try {

        DB::beginTransaction();
        $logo=$request->file('logo');
        $ext=$logo->getClientOriginalExtension();
        $logo_name="partners-".uniqid().".$ext";
        $logo->move(public_path('images/partners'),$logo_name);

        Partner::create([
        'logo' =>  $logo_name,

    ]);

    DB::commit();
    return redirect()->route('admin.partners.index')->with(['success' => 'added successfully']);
}
      catch (\Exception $ex) {
        DB::rollback();
          return redirect()->route('admin.partners.index')->with(['error' => 'error']);
      }


  }

  public function delete($id)
  {
      try {

          $partner = Partner::find($id);

          if (!$partner)

              return redirect()->route('admin.partners.index')->with(['error' => 'not found']);

               DB::beginTransaction();

               $partner->delete();
              DB::commit();

          return redirect()->route('admin.partners.index')->with(['success' => 'deleted successfully']);

      } catch (\Exception $ex) {
          return redirect()->route('admin.partners.index')->with(['error' => 'error please try again']);
      }
  }
    //
}
