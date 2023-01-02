
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
                                        Partner</a>
                                </li>
                                <li class="breadcrumb-item active"> Add New Partner
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
                                              action="{{route('admin.partners.store')}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf



                                          <div class="form-body">

                                                <h4 class="form-section"><i class="ft-home"></i> Add New Partner </h4>



                                                        <div class="row">

                                                          <div class="col-md-12">
                                                        <div class="form-group">
                                                        <label>Logo</label>
                                                      <input type="file"
                                                 name="logo" class="form-control">
                                                        </div>
                                                        </div>
                                                        </div>

                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> Back
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> Add
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


