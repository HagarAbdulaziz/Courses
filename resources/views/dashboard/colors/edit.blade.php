@extends('layouts.admin')
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="container">
                <form action="{{route('admin.colors.update',$color->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label>Color Name in Arabic</label>
                      <input type="text" class="form-control" name="name_ar"  value="{{$color->name_ar}}">
                    </div>
                    <div class="form-group">
                        <label>Color Name in English</label>
                        <input type="text" class="form-control" name="name_en" value="{{$color->name_en}}">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary " type="submit">Edit Color</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
