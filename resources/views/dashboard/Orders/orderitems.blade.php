


@extends('layouts.admin')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> Order Items</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dahboard</a>
                                </li>
                                <li class="breadcrumb-item active"> Order Items
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
                                    <h4 class="card-title">Order Items </h4>
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
                                                

                    <th scope="col">Order_id</th>

                        <th scope="col">Product_name</th>
                        <th scope="col">Size</th>
                        <th scope="col">Color</th>
                        <th scope="col">Quentaty</th>
                        <th scope="col">Total_price</th>
                        
                      
                                           
                                            </tr>
                                            </thead>
                                            <tbody>

                                           
                                         @foreach ($items as $item)
                                                 <tr>
                                     
                                          
                                          <td>{{$item->order_id}}</td>
                                   
                                          <td>{{$item->products->name_en}}</td>
                                         <td>{{$item->sizes->name_en}}</td>

                                      <td>{{$item->colors->name_en}}</td>

                                       <td>{{$item->quentaty}}</td>

                                       <td>{{$item->total_price}}</td>
                                 
                    
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

