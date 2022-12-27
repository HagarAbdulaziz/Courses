@extends('layouts.admin')
@section('content')


<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="container">

                <form action="{{route('admin.attributeValues.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label> Value name</label>
                      <input type="text" class="form-control"  name="value"  placeholder="Attribute Name">
                    </div>
                    <div class="form-group">
                        <label> Attribute Id</label>
                        <input type="text" class="form-control"  name ="attribute_id"   placeholder="Attribute id">
                      </div>

                    <div class="form-group">
                        <button class="btn btn-primary " type="submit">Add Value</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


@endsection
