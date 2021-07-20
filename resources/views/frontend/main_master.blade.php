<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- bootstrap css -->

    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}" />
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}" />
    <!-- google fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Courgette"
      rel="stylesheet"
    />

    <!-- font awesome -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.css')}}" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>  
     
    <title>Melanoid</title>
    <style></style>
  </head>

  <body>
    <!--
      https://www.iconfinder.com/icons/185106/armchair_chair_streamline_icon
      Creative Commons (Attribution 3.0 Unported);
      https://www.iconfinder.com/webalys
    -->
  @include('frontend.body.header')

    <!-- end of header section -->
    <!-- services section -->
  @yield('content')
    <!-- footer -->
  @include('frontend.body.footer')

    <!-- modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <!-- modal header -->
          <div class="modal-header">
            <h5 class="modal-title text-capitalize">product info</h5>
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!--end of  modal header -->
          <!-- modal body -->
          <div class="modal-body">
            <div class="row">
              <div class="col text-center">
                <img src="{{asset('frontend/assets/img/img-products/product-1.png')}}" class="img-fluid" alt="" />
                <!-- ratings -->
                <div class="ratings">
                  <span class="rating-icon"><i class="fas fa-star"></i></span>
                  <span class="rating-icon"><i class="fas fa-star"></i></span>
                  <span class="rating-icon"><i class="fas fa-star"></i></span>
                  <span class="rating-icon"><i class="fas fa-star"></i></span>
                  <span class="rating-icon"><i class="far fa-star"></i></span>
                  <span class="text-capitalize">(25 customer reviews)</span>
                </div>
                <!-- end of ratings -->
                <h2 class="text-uppercase my-2">premium office armchair</h2>
                <h2>$10.00 - $200.00</h2>
                <p class="lead text-muted">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi,
                  porro.
                </p>
                <!-- colors -->
                <h5 class="text-uppercase">
                  colors :
                  <span class="d-inline-block products-color products-color-black mr-2"></span>
                  <span class="d-inline-block products-color products-color-red mr-2"></span>
                  <span class="d-inline-block products-color products-color-blue mr-2"></span>
                </h5>
                <!-- end of colors -->
                <!-- sizes -->
                <h5 class="text-uppercase">
                  sizes : <span class="mx-2">xs</span> <span class="mx-2">s</span>
                  <span class="mx-2">m</span> <span class="mx-2">l</span>
                  <span class="mx-2">xl</span>
                </h5>
                <div class="d-flex flex-wrap">
                  <!-- cart buttons -->
                  <div class="d-flex my-2">
                    <span class="btn btn-black mx-1">-</span>
                    <span class="btn btn-black mx-1">4</span>
                    <span class="btn btn-black mx-1">+</span>
                  </div>
                  <button class="btn btn-black my-2 mx-2">wishlist</button>
                  <button class="btn btn-yellow my-2 mx-2">add to cart</button>
                </div>
              </div>
            </div>
          </div>
          <!-- end modal body -->
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">close modal</button>
          </div>
        </div>
        
      </div>
    </div>
        
    <!-- jquery -->
    <script src="{{asset('frontend/assets/js/jquery-3.3.1.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <!-- script js -->
    <script src="{{asset('frontend/assets/js/app.js')}}"></script>
<script>
  @if(Session::has('message'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.success("{{ session('message') }}");
  @endif

  @if(Session::has('error'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.error("{{ session('error') }}");
  @endif

  @if(Session::has('info'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.info("{{ session('info') }}");
  @endif

  @if(Session::has('warning'))
  toastr.options =
  {
    "closeButton" : true,
    "progressBar" : true
  }
      toastr.warning("{{ session('warning') }}");
  @endif
</script>
    
  </body>
</html>
