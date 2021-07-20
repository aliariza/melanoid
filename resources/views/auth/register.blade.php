@extends('frontend.main_master')

@section('content')
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li class="list-inline-item"><a href="{{url('/')}}">Ana Sayfa</a></li>
                    <li class='active list-inline-item'> / Giriş</li>
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
                        <h4 class="">Giriş</h4>
                        <p class="">Merhaba, hesabınıza hoşgeldiniz.</p>
                        <div class="social-sign-in outer-top-xs">
                            <a href="#" class="facebook-sign-in "><i class="fab fa-facebook mr-2 mb-5 mt-3"></i>Facebook ile giriş yapın</a>
                            <a href="#" class="twitter-sign-in"><i class="fab fa-twitter mx-2 mb-5 mt-3"></i>Twitter ile giriş yapın</a>
                        </div>



<form method="POST" action="{{ isset($guard) ? url($guard.'/login') :  route('login') }}">
            @csrf


                        
                            <div class="form-group">
                                <label class="info-title" for="emai">E-posta adresi <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email" class="form-control unicase-form-control text-input rounded-0"  >
                            </div>
                            <div class="form-group">
                                <label class="info-title " for="password">Şifre <span class="text-danger">*</span></label>
                                <input type="password" name="password" id="password" class="form-control unicase-form-control text-input rounded-0"  >
                            </div>
                            <div class="radio outer-xs">
                                <label>
                                    <input type="radio" class="mr-2" name="remember" id="remember_me" value="option2">Beni hatırla!
                                </label>
                                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 float-right" href="{{ route('password.request') }}">
                        {{ __('Şifrenizi mi unuttunuz?') }}
                    </a>
                    @endif
                               </div>

                            <button type="submit" class="btn-upper btn btn-pink checkout-page-button rounded-0 btn-block">Giriş</button>
                        </form>                 
                    </div>
                    <!-- Sign-in -->

                    <!-- create a new account -->
                    <div class="col-md-6 col-sm-6 create-new-account mb-5">
                        <h4 class="checkout-subtitle">Yeni hesap oluşturun</h4>
                        <p class="text title-tag-line">Yeni bir hesap oluşturun.</p>
                        




        <form method="POST" action="{{ route('register') }}">
            @csrf
                            

                            <div class="form-group">
                                <label class="info-title" for="name">İsim Soyad <span class="text-danger">*</span></label>
                                <input type="text" id="name" name="name" class="form-control unicase-form-control text-input rounded-0">
                                @error('name')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="email">E-posta Adresi <span class="text-danger" >*</span></label>
                                <input type="email" id="email" name="email" class="form-control unicase-form-control text-input rounded-0">
                                @error('email')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
 
                            </div>
                            
                            <div class="form-group">
                                <label class="info-title" for="phone">Telefon Numarası <span class="text-danger">*</span></label>
                                <input type="text" id="phone" name="phone" class="form-control unicase-form-control text-input rounded-0">
                                @error('phone')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message}}</strong>
                                </span>
                                @enderror
 
                            </div>
                            <div class="form-group">
                                <label class="info-title" for="password">Şifre <span class="text-danger">*</span></label>
                                <input type="password" id="password" name="password" class="form-control unicase-form-control text-input rounded-0">
                                @error('password')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message}}</strong>
                                </span>
                                @enderror
 
                            </div>
                             <div class="form-group">
                                <label class="info-title" for="password_confirmation">Şifre Onay <span class="text-danger" >*</span></label>
                                <input type="password" id= "password_confirmation" name="password_confirmation" class="form-control unicase-form-control text-input rounded-0">
                                @error('password_confirmation')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message}}</strong>
                                </span>
                                @enderror
 
                            </div>
                            <button type="submit" class="btn-upper btn btn-pink checkout-page-button rounded-0 btn-block">Kayıt Olun</button>
                        </form>
                    </div>  
                    <!-- create a new account -->
                </div>
            </div>
        </div>
    </div>

    @include('frontend.body.brands')
@endsection