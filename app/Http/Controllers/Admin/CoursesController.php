<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

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
        $image->move(public_path('courses'),$name);
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
    }
}
