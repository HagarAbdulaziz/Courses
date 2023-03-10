

@extends('layouts.admin')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> Materials </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dahboard</a>
                                </li>
                                <li class="breadcrumb-item active"> Materials
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">All Materials </h4>
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
                                    <div class="card-body card-dashboard">
                                        <table
                                            class="table display nowrap table-striped table-bordered scroll-horizontal">
                                            <thead class="">
                                            <tr>
                                                
                                                <th>Arabic Name</th>
                                                <th>English Name</th>
                                                 <th>Actions</th>
                                                {{-- <th>??????????????????</th>  --}}
                                            </tr>
                                            </thead>
                                            <tbody>

                                           
                                         @foreach ($materials as $material)
                                                 <tr>
                                     
                                          <td>{{$material->name_ar}}</td>
                                          <td>{{$material->name_en}}</td>
                                         <td>
                                          <div class="btn-group" role="group" aria-label="Basic example">
                                         <a href="{{route('admin.materials.edit',$material->id)}}"
                                          class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">Update</a>
                                          <a href="{{route('admin.materials.delete',$material->id)}}"
                                           class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Delete</a>
                        </div>
                    </td>
                    
                  </tr>
                  @endforeach
                                        


                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@stop
