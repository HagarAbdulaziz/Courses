@extends('layouts.admin')
@section('content')


<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="container">

                <form action="{{route('admin.cobons.update', $cobon->id)}}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label>Cobon Name</label>
                      <input type="text" class="form-control @error('cobon_name') is-invalid

                      @enderror" name="cobon_name" value="{{ $cobon->cobon_name}}">
                      @error('cobon_name')
                          <div class="alert alert-danger">   {{$message}}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label>Cobon Code</label>
                        <input type="text" class="form-control @error('code') is-invalid

                        @enderror" name="code"  value="{{ $cobon->code}}">
                        @error('code')
                        <div class="alert alert-danger">   {{$message}}</div>
                       @enderror
                    </div>
                    <div class="form-group">
                        <label>Code Persentage</label>
                        <input type="number" class="form-control @error('persentage') is-invalid

                        @enderror" name="persentage"  value="{{ $cobon->persentage}}">
                        @error('persentage')
                        <div class="alert alert-danger">   {{$message}}</div>
                       @enderror
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary " type="submit"> Edit Cobon</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


@endsection
