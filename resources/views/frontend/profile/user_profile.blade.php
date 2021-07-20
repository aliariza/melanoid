@extends('frontend.main_master')

@section('content')

<div class="body-content " style="margin-bottom:15rem; margin-top: 4rem;">
    <div class="container">
        <div class="row">
            <div class="col-md-2"><br><br>
                <img src="{{(!empty($user->profile_photo_path))? url('upload/user_images/'.$user->profile_photo_path):url('upload/no_image.jpg')}}" alt="" class="card-img-top"  style="border-radius: 50%;"><br><br>
                <ul class="list-group list-group-flush">

                    <a href="{{route('dashboard')}}" class="btn btn-pink btn-sm btn-block rounded-0">
                        Ana Sayfa
                    </a>

                    <a href="{{route('user.profile')}}" class="btn btn-pink btn-sm btn-block rounded-0">
                        Profil Düzenle
                    </a>

                    <a href="{{route('change.password')}}" class="btn btn-pink btn-sm btn-block rounded-0">
                        Şifre Değiştir
                    </a>

                    <a href="{{route('user.logout')}}" class="btn btn-danger btn-sm btn-block rounded-0">
                        Çıkış
                    </a>

                </ul>
            </div> <!-- end col-md-2 -->
            <div class="col-md-2">
                
            </div> <!-- end col-md-2 -->


            <div class="col-md-8">

                <div class="card border-0">
                    <h3 class="text-center" style="font-size:1.6rem;"><strong>{{ Auth::user()->name}}, </strong> profilinizi güncelleyin.</h3>

<div class="card-body">
    <form method="POST" action="{{ route('user.profile.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="info-title" for="email">Adınız</label>
            <input type="text" name="name" class="form-control rounded-0" value={{ $user->name }} >
        </div>
        <div class="form-group">
            <label class="info-title" for="email">E-postanız</label>
            <input type="email" name="email" class="form-control rounded-0" value={{ $user->email }} >
        </div>
        <div class="form-group">
            <label class="info-title" for="phone">Telefon Numaranız</label>
            <input type="text" name="phone" class="form-control rounded-0" value={{ $user->phone }} >
        </div>
        <div class="form-group">
            <label class="info-title" for="profile_photo_path">Resminiz</label>
            <input type="file" name="profile_photo_path" class="form-control rounded-0">
        </div>
        <div class="form-group">
            
            <button type="submit" class="btn btn-pink btn-block rounded-0">
                Güncelle
            </button>
        </div>
        


    </form>

</div>



                </div>
                
            </div> <!-- end col-md-8 -->
        


        </div> <!-- end row -->
    </div>
</div>
@endsection
