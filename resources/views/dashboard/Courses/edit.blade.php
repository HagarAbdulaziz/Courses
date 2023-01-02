
@extends('layouts.admin')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="">
                                        Courses </a>
                                </li>
                                <li class="breadcrumb-item active"> Add New Course
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">

                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @include('dashboard.includes.alerts.success')
                                @include('dashboard.includes.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form"
                                              action="{{route('admin.courses.update',$course->id)}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf



                                          <div class="form-body">

                                                <h4 class="form-section"><i class="ft-home"></i> Add New Course</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Course Name in Arabic</label>
                                                            <input type="text" class="form-control @error('name_ar') is-invalid
                                                            @enderror" name="name_ar" placeholder="" value="{{$course->name_ar}}">
                                                            @error('name_ar')
                                                                <div class="alert alert-danger">   {{$message}}</div>
                                                            @enderror
                                                          </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <div class="form-group">
                                                     <label>Course Name in English</label>
                                                       <input type="text" class="form-control @error('name_en') is-invalid

                                                            @enderror" name="name_en" placeholder="" value="{{$course->name_en}}">
                                                          @error('name_en')
                                                           <div class="alert alert-danger">   {{$message}}</div>
                                                         @enderror
                                                          </div>
                                                      </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Course description in Arabic</label>
                                                        <input type="text" class="form-control @error('description_ar') is-invalid

                                                        @enderror" name="description_ar" value="{{$course->description_ar}}" >
                                                        @error('description_ar')
                                                        <div class="alert alert-danger">   {{$message}}</div>
                                                       @enderror
                                                    </div>
                                                    </div>
                                                         <div class="col-md-6">
                                                        <div class="form-group">

                                                            <label>Course description in English</label>
                                                            <input type="text" class="form-control @error('description_en') is-invalid

                                                            @enderror" name="description_en" value="{{$course->description_en}}" >
                                                            @error('description_en')
                                                            <div class="alert alert-danger">   {{$message}}</div>
                                                           @enderror
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>price</label>
                                                            <input type="text" class="form-control @error('price') is-invalid

                                                            @enderror" name="price" value="{{$course->price}}" >
                                                            @error('price')
                                                            <div class="alert alert-danger">   {{$message}}</div>
                                                           @enderror
                                                        </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Image</label>
                                                              <input type="file"
                                                            name="image" class="form-control">
                                                                </div>
                                                                @error('image')
                                                            <div class="alert alert-danger">   {{$message}}</div>
                                                           @enderror
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>instructor_name in Arabic</label>
                                                                    <input type="text" class="form-control @error('instructor_name_ar') is-invalid
                                                                    @enderror" name="instructor_name_ar" placeholder=""  value="{{$course->instructor_name_ar}}" >
                                                                    @error('instructor_name_ar')
                                                                        <div class="alert alert-danger">   {{$message}}</div>
                                                                    @enderror
                                                                  </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                             <label>instructor_name in English</label>
                                                               <input type="text" class="form-control @error('instructor_name_en') is-invalid

                                                                    @enderror" name="instructor_name_en" value="{{$course->instructor_name_en}}" placeholder="">
                                                                  @error('instructor_name_en')
                                                                   <div class="alert alert-danger">   {{$message}}</div>
                                                                 @enderror
                                                                  </div>
                                                              </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Duration In Arabic</label>
                                                                    <input type="text" class="form-control @error('duration_ar') is-invalid
                                                                    @enderror" name="duration_ar" placeholder="" value="{{$course->duration_ar}}">
                                                                    @error('duration_ar')
                                                                        <div class="alert alert-danger">   {{$message}}</div>
                                                                    @enderror
                                                                  </div>
                                                            </div>
                                                          <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Duration In English</label>
                                                                <input type="text" class="form-control @error('duration_en') is-invalid
                                                                @enderror" name="duration_en" placeholder="" value="{{$course->duration_en}}">
                                                                @error('duration_en')
                                                                    <div class="alert alert-danger">   {{$message}}</div>
                                                                @enderror
                                                              </div>

                                                        </div>
                                                        </div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> Back
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> Update
                                                </button>
                                            </div>
                                            </div>
                                        </form>



                                    </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    </div>

                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>

@stop


