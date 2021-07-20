@extends('frontend.main_master')

@section('content')
    <section class="services py-5 text-center">
      <div class="container">
        <div class="row">
          <!-- single service -->
          <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
            <span class="service-icon">
              <i class="fas fa-parachute-box"></i>
            </span>
            <h5 class="font-weight-bold text-uppercase">free shipping</h5>
            <p class="text-muted text-capitalize">
              free shipping on all order over 100.00
            </p>
          </div>
          <!-- end of single service -->
          <!-- single service -->
          <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
            <span class="service-icon">
              <i class="fas fa-phone-volume"></i>
            </span>
            <h5 class="font-weight-bold text-uppercase">online support 24/7</h5>
            <p class="text-muted text-capitalize">
              we will assist you with your inquiries
            </p>
          </div>
          <!-- end of single service -->
          <!-- single service -->
          <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
            <span class="service-icon">
              <i class="fas fa-dollar-sign"></i>
            </span>
            <h5 class="font-weight-bold text-uppercase">money back gurantee</h5>
            <p class="text-muted text-capitalize">
              free 100% refund for 30 days
            </p>
          </div>
          <!-- end of single service -->
        </div>
      </div>
    </section>
    <!-- end of services section -->
    <!-- categories -->
    <section class="home-categories py-5">
      <div class="container">
        <div class="row">
          <!-- category title -->
          <div class="col-10 mx-auto col-md-6 col-lg-3 align-self-center">
            <h5 class="text-uppercase">product categories</h5>
            <p class="text-muted">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem,
              repellendus!
            </p>
            <a
              href="products.html"
              class="text-weight-bold text-capitalize categories-link"
            >
              view all categories
            </a>
            <div class="categories-underline"></div>
          </div>
          <!-- main -->
          <div class="col-10 mx-auto col-md-6 col-lg-9 my-3">
            <div class="row">
              <!-- single category -->
              <div class="col-md-6 col-lg-3 my-3">
                <div class="category-container">
                  <img
                    src="{{ asset('frontend/assets/img/cagetogoryImg/kitchen-category.jpeg')}}"
                    class="img-fluid category-img"
                    alt="category img "
                  />
                  <a href="products.html" class="category-link">
                    <h6 class="text-uppercase mb-0">kitchen</h6>
                    <p class="mb-0 text-yellow">20 items</p>
                  </a>
                </div>
              </div>
              <!-- end of  single category -->
              <!-- single category -->
              <div class="col-md-6 col-lg-3 my-3">
                <div class="category-container">
                  <img
                    src="{{asset('frontend/assets/img/cagetogoryImg/bathroom-category.jpeg')}}"
                    class="img-fluid category-img"
                    alt="category img "
                  />
                  <a href="products.html" class="category-link">
                    <h6 class="text-uppercase mb-0">bahtroom</h6>
                    <p class="mb-0 text-yellow">20 items</p>
                  </a>
                </div>
              </div>
              <!-- end of  single category -->
              <!-- single category -->
              <div class="col-md-6 col-lg-3 my-3">
                <div class="category-container">
                  <img
                    src="{{asset('frontend/assets/img/cagetogoryImg/livingroom-category.jpeg')}}"
                    class="img-fluid category-img"
                    alt="category img "
                  />
                  <a href="products.html" class="category-link">
                    <h6 class="text-uppercase mb-0">living room</h6>
                    <p class="mb-0 text-yellow">20 items</p>
                  </a>
                </div>
              </div>
              <!-- end of  single category -->
              <!-- single category -->
              <div class="col-md-6 col-lg-3 my-3">
                <div class="category-container">


                  <img
                    src="{{asset('frontend/assets/img/cagetogoryImg/patio-category.jpeg')}}"
                    class="img-fluid category-img"
                    alt="category img "
                  />
                  <a href="products.html" class="category-link">
                    <h6 class="text-uppercase mb-0">patio</h6>
                    <p class="mb-0 text-yellow">20 items</p>
                  </a>
                </div>
              </div>
              <!-- end of  single category -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end categories -->
    <!-- home filler -->
    <section>
      <div class="container-fluid">
        <div class="row home-filler align-items-end pb-5">
          <div class="col-10 mx-auto text-white text-center">
            <h4 class="text-uppercase font-weight-bold">
              smart furniture collection
            </h4>
            <p class="text-capitalize">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit,
              iure?
            </p>
            <a
              href="product.html"
              class="text-weight-bold text-capitalize collection-link"
            >
              view collection
            </a>
            <div class="collection-underline"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of home filler -->
    <!-- featured section -->
    <section class="featured py-5">
      <div class="container">
        <div class="row my-3">
          <div class="col-10 mx-auto text-center">
            <h1 class="text-uppercase">featured products</h1>
            <p class="text-muted">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora,
              recusandae.
            </p>
          </div>
        </div>
        <div class="row">
          <!-- single product -->
          <div class="col-10 mx-auto col-md-6 col-lg-4">
            <div class="featured-container p-5">

              <img
                src="{{asset('frontend/assets/img/img-products/product-1.png')}}"
                class="img-fluid"
                alt="product"
              />
              <span
                class="featured-search-icon"
                data-toggle="modal"
                data-target="#productModal"
              >
                <i class="fas fa-search"></i>
              </span>
              <a href="#" class="featured-store-link text-captilaze"
                >add to cart</a
              >
            </div>
            <h6 class="text-capitalize text-center my-2">special product</h6>
            <h6 class="text-center">
              <span class="text-muted old-price mx-2">$200</span>
              <span>$100</span>
            </h6>
          </div>
          <!-- end single product -->
          <!-- single product -->
          <div class="col-10 mx-auto col-md-6 col-lg-4">
            <div class="featured-container p-5">

              <img
                src="{{asset('frontend/assets/img/img-products/product-2.png')}}"
                class="img-fluid"
                alt="product"
              />
              <span
                class="featured-search-icon"
                data-toggle="modal"
                data-target="#productModal"
              >
                <i class="fas fa-search"></i>
              </span>
              <a href="#" class="featured-store-link text-captilaze"
                >add to cart</a
              >
            </div>
            <h6 class="text-capitalize text-center my-2">special product</h6>
            <h6 class="text-center">
              <span class="text-muted old-price mx-2">$200</span>
              <span>$100</span>
            </h6>
          </div>
          <!-- end single product -->
          <!-- single product -->
          <div class="col-10 mx-auto col-md-6 col-lg-4">
            <div class="featured-container p-5">

              <img
                src="{{asset('frontend/assets/img/img-products/product-3.png')}}"
                class="img-fluid"
                alt="product"
              />
              <span
                class="featured-search-icon"
                data-toggle="modal"
                data-target="#productModal"
              >
                <i class="fas fa-search"></i>
              </span>
              <a href="#" class="featured-store-link text-captilaze"
                >add to cart</a
              >
            </div>
            <h6 class="text-capitalize text-center my-2">special product</h6>
            <h6 class="text-center">
              <span class="text-muted old-price mx-2">$200</span>
              <span>$100</span>
            </h6>
          </div>
          <!-- end single product -->
          <!-- single product -->
          <div class="col-10 mx-auto col-md-6 col-lg-4">
            <div class="featured-container p-5">

              <img
                src="{{asset('frontend/assets/img/img-products/product-4.png')}}"
                class="img-fluid"
                alt="product"
              />
              <span
                class="featured-search-icon"
                data-toggle="modal"
                data-target="#productModal"
              >
                <i class="fas fa-search"></i>
              </span>
              <a href="#" class="featured-store-link text-captilaze"
                >add to cart</a
              >
            </div>
            <h6 class="text-capitalize text-center my-2">special product</h6>
            <h6 class="text-center">
              <span class="text-muted old-price mx-2">$200</span>
              <span>$100</span>
            </h6>
          </div>
          <!-- end single product -->
          <!-- single product -->
          <div class="col-10 mx-auto col-md-6 col-lg-4">
            <div class="featured-container p-5">

              <img
                src="{{asset('frontend/assets/img/img-products/product-5.png')}}"
                class="img-fluid"
                alt="product"
              />
              <span
                class="featured-search-icon"
                data-toggle="modal"
                data-target="#productModal"
              >
                <i class="fas fa-search"></i>
              </span>
              <a href="#" class="featured-store-link text-captilaze"
                >add to cart</a
              >
            </div>
            <h6 class="text-capitalize text-center my-2">special product</h6>
            <h6 class="text-center">
              <span class="text-muted old-price mx-2">$200</span>
              <span>$100</span>
            </h6>
          </div>
          <!-- end single product -->
          <!-- single product -->
          <div class="col-10 mx-auto col-md-6 col-lg-4">
            <div class="featured-container p-5">

              <img
                src="{{asset('frontend/assets/img/img-products/product-6.png')}}"
                class="img-fluid"
                alt="product"
              />
              <span
                class="featured-search-icon"
                data-toggle="modal"
                data-target="#productModal"
              >
                <i class="fas fa-search"></i>
              </span>
              <a href="#" class="featured-store-link text-captilaze"
                >add to cart</a
              >
            </div>
            <h6 class="text-capitalize text-center my-2">special product</h6>
            <h6 class="text-center">
              <span class="text-muted old-price mx-2">$200</span>
              <span>$100</span>
            </h6>
          </div>
          <!-- end single product -->
        </div>
      </div>
    </section>
    <!-- end of  featured section -->
    <!-- partners -->
    @include('frontend.body.brands')
    <!-- end of  partners -->
    <!-- newsletter -->
    <section class="newsletter py-5">
      <div class="container">
        <div class="row">
          <div class="col-10 mx-auto text-center">
            <h2 class="text-uppercase">newsletter</h2>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti
              blanditiis similique eum, aut culpa maiores cupiditate alias
              exercitationem error nesciunt.
            </p>
            <form>
              <div class="input-group mt-5 mb-4">
                <input
                  type="text"
                  class="form-control text-capitalize"
                  placeholder="enter your email"
                />
                <div class="input-group-append">
                  <div class="input-group-text form-icon">
                    <i class="fas fa-envelope"></i>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-yellow">subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- end newsletter -->
    <!-- skills -->
    <section class="skills py-5">
      <div class="container">
        <div class="row">
          <!-- single skill -->
          <div class="col-10 mx-auto col-md-6 col-lg-4 d-flex my-3">
            <div class="skill-icon mr-3"><i class="fas fa-truck"></i></div>
            <div class="skill-text">
              <h3 class="text-uppercase text-white">free shipping</h3>
              <p class="text-muted text-capitalize">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus,
                pariatur.
              </p>
            </div>
          </div>
          <!-- end of  single skill -->
          <!-- single skill -->
          <div class="col-10 mx-auto col-md-6 col-lg-4 d-flex my-3">
            <div class="skill-icon mr-3">
              <i class="fas fa-comment-dollar"></i>
            </div>
            <div class="skill-text">
              <h3 class="text-uppercase text-white">price promise</h3>
              <p class="text-muted text-capitalize">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus,
                pariatur.
              </p>
            </div>
          </div>
          <!-- end of  single skill -->
          <!-- single skill -->
          <div class="col-10 mx-auto col-md-6 col-lg-4 d-flex my-3">
            <div class="skill-icon mr-3"><i class="fas fa-award"></i></div>
            <div class="skill-text">
              <h3 class="text-uppercase text-white">lifetime warranty</h3>
              <p class="text-muted text-capitalize">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus,
                pariatur.
              </p>
            </div>
          </div>
          <!-- end of  single skill -->
        </div>
      </div>
    </section>
    <!-- end skills -->


@endsection