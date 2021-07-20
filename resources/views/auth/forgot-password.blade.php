@extends('frontend.main_master')

@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li class="list-inline-item"><a href="{{url('/')}}">Ana Sayfa</a></li>
                    <li class='active list-inline-item'> / Şifremi unuttum</li>
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
                        <h4 class="">Şifremi Unuttum</h4>
                        <hr>
                        <p class="">Şifrenizi mi unuttunuz? Önemli değil...</p>



                        <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                            <div class="form-group">
                                <label class="info-title" for="email">E-posta adresi <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control unicase-form-control text-input rounded-0" >
                            </div>
                            
                            <button type="submit" class="btn-upper btn btn-pink checkout-page-button rounded-0 btn-block">E-posta Şifre Sıfırlama Bağlantısı</button>
                        </form>                 
                    </div>
                    <!-- Sign-in -->

                </div>
            </div>
        </div>
    </div>     
    @include('frontend.body.brands')

@endsection