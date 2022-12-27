





@extends('layouts.login')

@section('content')

    <section class="flexbox-container">
        <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
                <div class="card border-grey border-lighten-3 m-0">
                    <div class="card-header border-0">
                        <div class="card-title text-center">
                            <div class="p-1">
                                <img src="{{asset('assets/images/1.jpg')}}" style="width:50%" class="rounded-circle" alt="LOGO"/>

                            </div>
                        </div>
                        <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                            <span>الدخول للوحة التحكم </span>
                        </h6>
                    </div>
                    @include('dashboard.includes.alerts.errors')
                    @include('dashboard.includes.alerts.success')

                    <div class="card-content">
                        <div class="card-body">
                            <form class="form-horizontal form-simple" action="{{ route('login') }}" method="post"
                                  novalidate>
                                @csrf

                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                <input id="email" placeholder="Enter Your E-mail" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                    <div class="form-control-position">

                                    </div>
                                    @error('email')
                                     <span class="text-danger">{{$message}}</span>
                                     @enderror
                                </fieldset>
                                <fieldset class="form-group position-relative has-icon-left">
                                    <input placeholder="Enter Your Password" id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                    <div class="form-control-position">

                                    </div>
                                    @error('password')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </fieldset>

                                <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i>
                                    دخول
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @stop
