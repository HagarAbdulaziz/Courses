@extends('layouts.admin')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="container">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">id</th>
                        {{-- <th scope="col">name in ar</th> --}}
                        <th scope="col">name in en</th>
                         {{-- <th scope="col">description in ar</th> --}}
                        <th scope="col">description in en </th>
                        <th scope="col">quentaty</th>
                        <th scope="col">price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Material</th>
                        {{-- <th scope="col">special_price</th> --}}
                        {{-- <th scope="col">special_price_start</th> --}}
                        {{-- <th scope="col">special_price_end</th> --}}
                        <th scope="col">Actions</th>

                      </tr>
                    </thead>
                    <tbody>
                        <div>
                           <a class="btn btn-primary mb-2" href="{{route('admin.products.create')}}"> Craete Product</a>
                        </div>
                   @foreach ($products as $product)
                   <tr>
                    <th scope="row">{{$product->id}}</th>
                    {{-- <td>{{$product->name_ar}}</td> --}}
                    <td>{{$product->name_en}}</td>
                    {{-- <td>{{$product->description_ar}}</td> --}}
                    <td>{{$product->description_en}}</td>
                    {{-- <td>{{$product->sku}}</td> --}}
                    <td>{{$product->quentaty}}</td>
                    {{-- <td>{{$product->cover}}</td> --}}
                    <td>{{$product->price}}</td>
                    {{-- <td>{{$product->special_price}}</td> --}}
                    {{-- <td>{{$product->special_price_start}}</td> --}}
                    {{-- <td>{{$product->special_price_end}}</td> --}}
                    <td>{{$product->category_id}}</td>
                    <td>{{$product->material_id}}</td>
                    <td><a href="#" class="btn btn-success">Edit</a></td>
                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                  </tr>
                   @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
