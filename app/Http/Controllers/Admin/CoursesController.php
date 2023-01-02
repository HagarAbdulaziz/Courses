<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CoursesController extends Controller
{

    public function index()
    {

        $courses=Course::get();
        return view ('dashboard.courses.index',compact('courses'));
    }
    public function create()
    {
        return view ('dashboard.courses.create');
    }

    public function store (Request $request)
    {
        $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'description_ar' => 'required',
            'description_en' => 'required',
             'price'=> 'required',
            'duration_en'=>'required',
            'duration_ar'=>'required',
            'instructor_name_ar'=>'required',
            'instructor_name_en'=>'required',
            'image'=>'required',


        ]);
        $image=$request->file('image');
        $ext=$image->getClientOriginalExtension();
        $name="course-".uniqid().".$ext";
        $image->move(public_path('images/courses'),$name);
        Course::create([
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'description_ar'=>$request->description_ar,
            'description_en'=>$request->description_en,
            'price' =>$request->price,
            'duration_ar'=>$request->duration_ar,
             'duration_en'=>$request->duration_en,
            'instructor_name_ar'=>$request->instructor_name_ar,
            'instructor_name_en'=>$request->instructor_name_en,
            'image'=>$name,
        ]);
        return redirect(route('admin.courses'))->with(['success' => 'Added successfully']);
    }
    public function edit($id)
    {
        $course=Course::find($id);
        return view ('dashboard.courses.edit',compact('course'));

    }
    public function update(Request $request ,$id)
    {
        $request->validate([
            'name_ar' => 'required',
            'name_en' => 'required',
            'description_ar' => 'required',
            'description_en' => 'required',
             'price'=> 'required',
            'duration_en'=>'required',
            'duration_ar'=>'required',
            'instructor_name_ar'=>'required',
            'instructor_name_en'=>'required',
            'image'=>'nullable',
            ]);
        try {
            $course=Course::find($id);
            if($course){
            DB::beginTransaction();
            $name=$course->image;
            if($request->hasfile('image'))
          {

            $image=$request->file('image');
            $ext=$image->getClientOriginalExtension();
            $name="course-".uniqid().".$ext";
            $image->move(public_path('images/courses'),$name);
           }

           $course->update([
            'name_ar'=>$request->name_ar,
            'name_en'=>$request->name_en,
            'description_ar'=>$request->description_ar,
            'description_en'=>$request->description_en,
            'price' =>$request->price,
            'duration_ar'=>$request->duration_ar,
             'duration_en'=>$request->duration_en,
            'instructor_name_ar'=>$request->instructor_name_ar,
            'instructor_name_en'=>$request->instructor_name_en,
            'image'=>$name,
        ]);

        DB::commit();
        return redirect(route('admin.courses'))->with(['success' => 'updated successfully']);
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
        $course=Course::find($id);
        $course->delete();
        return redirect(route('admin.courses'))->with(['success' => 'Deleted successfully']);
    }
}
