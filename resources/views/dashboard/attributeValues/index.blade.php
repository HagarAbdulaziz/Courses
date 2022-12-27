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
                        <th scope="col">Attribute Name</th>
                        <th scope="col">Value</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                        {{-- <div>
                           <a class="btn btn-primary mb-2" href="{{route('admin.users.create')}}"> Craete User</a>
                        </div> --}}
                   @foreach ($attributeValues as $att_value)
                   <tr>
                    <td>{{$att_value->id}}</td>
                    <td>{{$att_value->attribute->name}}</td>
                    <td>{{$att_value->value}}</td>
                    <td><a href="{{route('admin.attributeValues.create')}}" class="btn btn-success">Add</a></td>
                    <td><a href="{{route('admin.attributeValues.delete',$att_value->id )}}" class="btn btn-danger">Delete</a></td>

                  </tr>

                   @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>


@endsection

