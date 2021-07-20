<header>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <!--
      https://www.iconfinder.com/icons/185106/armchair_chair_streamline_icon
      Creative Commons (Attribution 3.0 Unported);
      https://www.iconfinder.com/webalys
    -->
    <a href="{{ url('/') }}" class="navbar-brand">
      <img src="{{asset('frontend/assets/img/logo.png')}}" height=70 alt="company logo" />
    </a>
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#myNavbar"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item mx-2 nav-active ">
          <a href="index.html" class="nav-link ">Abonelik</a>
        </li>
        <li class="nav-item mx-2 ">
          <a href="products.html" class="nav-link ">Ürünler</a>
        </li>
        <li class="nav-item mx-2 ">
          <a href="singleproduct.html" class="nav-link ">Atölyeler</a>
        <li class="nav-item mx-2 ">
          <a href="store.html" class="nav-link ">Etkinlik</a>
        </li>
        <li class="nav-item mx-2 ">
          <a href="store.html" class="nav-link ">İletişim</a>
        </li>
      </ul>
    </div>
    <div class="navbar-icons d-none d-lg-flex">
      <!-- single icon -->
      <div class="navbar-icon mx-5 text-muted">
       @auth
              <a href="{{ route('login') }}" class="text-muted"><i class="fas fa-user fa-sm">      Profilim</i></a></div>

       @else
       <a href="{{ route('login') }}" class="text-muted"><i class="fas fa-lock fa-sm">      Giriş/Kayıt</i></a></div>
       @endauth

      <!-- end of single icon -->
      <!-- single icon -->
      <a href="store.html" class="navbar-icon mx-5 navbar-cart-icon text-muted">
        <i class="fas fa-shopping-cart fa-sm"></i>
        <div class="cart-items">2</div>
      </a>
      <!-- end of  single icon -->
    </div>
  </nav>
  <!-- end of navbar -->
<!--   <div class="banner d-flex align-items-center pl-3 pl-lg-5">
    <div>
      <h1 class="text-capitalize text-slanted mb-0">minimalist</h1>
      <h1 class="text-uppercas font-weight-bold">interior style</h1>
      <a href="products.html" class="btn btn-yellow">view collection</a>
    </div>
  </div>
 --></header>
