{{--  @extends('layouts.admin')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="container">

                <form action="{{route('admin.methods.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label>Payment Method in Arabic</label>
                      <input type="text" class="form-control @error('name_ar') is-invalid
                      @enderror" name="name_ar" placeholder="Enter Color name in Arabic">
                      @error('name_ar')
                          <div class="alert alert-danger">   {{$message}}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label>Payment Method in English</label>
                        <input type="text" class="form-control @error('name_en') is-invalid

                        @enderror" name="name_en" placeholder="Enter Color name in English">
                        @error('name_en')
                        <div class="alert alert-danger">   {{$message}}</div>
                       @enderror
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary " type="submit">Add Payment Method</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection  --}}


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
                                <li class="breadcrumb-item"><a href="{{route('admin.methods.index')}}"> Payment Methods </a>
                                </li>
                                <li class="breadcrumb-item active">  Add New Payment Method
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
                                    <h4 class="card-title" id="basic-layout-form"> Add New Payment Method</h4>
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
                                              action="{{route('admin.methods.store')}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf


                                            <div class="form-body">

                                                <h4 class="form-section"><i class="ft-home"></i>Name</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> English Name
                                                                 </label>
                                                            <input type="text" id="name_en"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('name_en')}}"
                                                                   name="name_en">
                                                            @error("name_en")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> Arabic Name
                                                                 </label>
                                                            <input type="text" id="name_ar"
                                                                   class="form-control"
                                                                   placeholder="  "
                                                                   value="{{old('name_ar')}}"
                                                                   name="name_ar">
                                                            @error("name_ar")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>



                                                </div>

                                            </div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> Back
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i>Add
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>

    @stop

