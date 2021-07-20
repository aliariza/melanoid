@extends('frontend.main_master')

@section('content')

<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li class="list-inline-item"><a href="{{url('/')}}">Ana Sayfa</a></li>
                <li class='active list-inline-item'> / Şifre Yenileme</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <!-- Sign-in -->            
                <div class="col-md-6 col-sm-6 sign-in">
                    <h4 class="">Şifre Yenileme</h4>
                    <hr> 
                    <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <div class="form-group">
                            <label class="info-title" for="email">E-posta adresi <span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" class="form-control unicase-form-control text-input rounded-0" >
                        </div>                            
                        <div class="form-group">
                            <label class="info-title" for="password">Şifre <span class="text-danger">*</span></label>
                            <input type="password" name="password" id="password" class="form-control unicase-form-control text-input rounded-0" >
                        </div>                            
                        <div class="form-group">
                            <label class="info-title" for="password_confirmation">Şifre Doğrulama <span class="text-danger">*</span></label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control unicase-form-control text-input rounded-0" >
                        </div>
                        
                        <button type="submit" class="btn-upper btn btn-pink checkout-page-button rounded-0 btn-block">Şifrenizi Değiştirin</button>
                    </form>                 
                </div>
                <!-- Sign-in -->
            </div>
        </div>
    </div>
</div>     
@include('frontend.body.brands')

@endsection