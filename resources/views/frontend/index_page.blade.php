@extends('frontend.master_header_footer.frontend_masterpage')
@section('index-page-body')

    <!-- main start -->
    <main class="">
        <!-- home hero carousal start -->
        <section class="home-hero-carousal">
            <div class="home-hero-carousal-container">
                <div id="carouselExampleAutoplaying" class="carousel slide home-hero-carousal-content"
                     data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($sliders as $slider)
                            <div class="carousel-item active">

                                <img src="{{asset('storage/slider-images/'.$slider->image)}}" class="d-block w-100" alt="...">

{{--                                <td><img src= alt=" " style="height: 100px; width:90px"  /></td>--}}
                                <div class="carousel-caption home-hero-carousal-caption">
                                    <div class="carousel-item-content-bg-text">
                                        <h2 class="text-light">{{$slider->title_1}}</h2>
                                    </div>
                                    <div class="carousel-item-content-upper-text">
                                        <h6 class="text-light">{{$slider->title_2}}</h6>
                                        <h3 class="text-light">{{$slider->title_3}}</h3>
{{--                                        <button type="button"--}}
{{--                                                class="btn btn-warning text-light rounded-pill px-5 py-3 mt-5 home-booking-now-btn">--}}
{{--                                            GET STARTED--}}
{{--                                            <i class="fa fa-long-arrow-right ps-2" aria-hidden="true"></i>--}}
{{--                                        </button>--}}
                                    </div>
                                </div>
                            </div>
                        @endforeach




{{--                        <div class="carousel-item">--}}
{{--                            <img src="{{asset('frontend')}}/images/home-hero-carousal-4.jpg" class="d-block w-100"--}}
{{--                                 alt="...">--}}
{{--                            <div class="carousel-caption home-hero-carousal-caption">--}}
{{--                                <div class="carousel-item-content-bg-text">--}}
{{--                                    <h2 class="text-light">Avson</h2>--}}
{{--                                </div>--}}
{{--                                <div class="carousel-item-content-upper-text">--}}
{{--                                    <h6 class="text-light">Who We Are </h6>--}}
{{--                                    <h3 class="text-light">Let's Talk</h3>--}}
{{--                                    <button type="button"--}}
{{--                                            class="btn btn-warning text-light rounded-pill px-5 py-3 mt-5 home-booking-now-btn">--}}
{{--                                        GET STARTED--}}
{{--                                        <i class="fa fa-long-arrow-right ps-2" aria-hidden="true"></i>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-item">--}}
{{--                            <img src="{{asset('frontend')}}/images/home-hero-carousal-6.jpg" class="d-block w-100"--}}
{{--                                 alt="...">--}}
{{--                            <div class="carousel-caption home-hero-carousal-caption">--}}
{{--                                <div class="carousel-item-content-bg-text">--}}
{{--                                    <h2 class="text-light">Avson</h2>--}}
{{--                                </div>--}}
{{--                                <div class="carousel-item-content-upper-text">--}}
{{--                                    <h6 class="text-light">Our Vision & Goal</h6>--}}
{{--                                    <h3 class="text-light">Let's Connect</h3>--}}
{{--                                    <button type="button"--}}
{{--                                            class="btn btn-warning text-light rounded-pill px-5 py-3 mt-5 home-booking-now-btn">--}}
{{--                                        GET STARTED--}}
{{--                                        <i class="fa fa-long-arrow-right ps-2" aria-hidden="true"></i>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="prev">
            <span class="border border-secondary-subtle rounded-pill px-2 pb-1 pt-2">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="next">
            <span class="border border-secondary-subtle rounded-pill px-2 pb-1 pt-2">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </section>
        <!-- home hero carousal end -->
        <!-- home book now form start -->
        <section class="home-book-now-form">
            <div class="container home-book-now-form-container py-4 px-5">
                <div class="py-3 px-4 upper-before-after">
                    <!-- triangle svg -->
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                         width="35" height="35" x="0" y="0"
                         viewBox="0 0 512.004 512.004"
                         style="enable-background:new 0 0 512 512" xml:space="preserve"
                         class="home-book-now-form-triangle">
            <g>
                <path
                    d="M474.042 482.794H37.962a37.961 37.961 0 0 1-32.88-18.984 37.999 37.999 0 0 1 0-37.968L223.114 48.194c6.776-11.744 19.312-18.984 32.88-18.984s26.104 7.24 32.88 18.984l218.048 377.648a37.999 37.999 0 0 1 0 37.968 37.971 37.971 0 0 1-32.88 18.984zm-370.32-75.936H408.29L255.994 143.106 103.722 406.858z"
                    style="" fill="#FCD12A
                " data-original="#FCD12A
                " class=""></path>
            </g>
          </svg>

                    <!-- circle svg -->
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                         width="35" height="35" x="0" y="0" viewBox="0 0 512 512"
                         style="enable-background:new 0 0 512 512" xml:space="preserve"
                         class="home-book-now-form-circle">
            <g>
                <path
                    d="M255.832 56.037c110.44.096 199.891 89.691 199.795 200.131s-89.691 199.891-200.131 199.795C145.127 455.867 55.701 366.368 55.701 256c.176-110.432 89.698-199.883 200.131-199.963m0-56.037C114.443.096-.096 114.779 0 256.168S114.779 512.096 256.168 512C397.485 511.904 512 397.317 512 256 511.952 114.571 397.261-.048 255.832 0z"
                    style="" fill="#FCD12A" data-original="#FCD12A" class=""></path>
            </g>
          </svg>
                    <div class="py-3 px-3 lower-before-after">
                        <!-- cross svg -->
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                             width="18" height="18" x="0" y="0"
                             viewBox="0 0 320.591 320.591"
                             style="enable-background:new 0 0 512 512" xml:space="preserve"
                             class="home-book-now-form-cross">
              <g>
                  <path
                      d="M30.391 318.583a30.37 30.37 0 0 1-21.56-7.288c-11.774-11.844-11.774-30.973 0-42.817L266.643 10.665c12.246-11.459 31.462-10.822 42.921 1.424 10.362 11.074 10.966 28.095 1.414 39.875L51.647 311.295a30.366 30.366 0 0 1-21.256 7.288z"
                      fill="#2eb8b8" data-original="#2eb8b8"></path>
                  <path
                      d="M287.9 318.583a30.37 30.37 0 0 1-21.257-8.806L8.83 51.963C-2.078 39.225-.595 20.055 12.143 9.146c11.369-9.736 28.136-9.736 39.504 0l259.331 257.813c12.243 11.462 12.876 30.679 1.414 42.922-.456.487-.927.958-1.414 1.414a30.368 30.368 0 0 1-23.078 7.288z"
                      fill="#2eb8b8" data-original="#2eb8b8"></path>
              </g>
            </svg>
                        <!-- double line -->
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                             width="60" height="60" x="0" y="0" viewBox="0 0 24 24"
                             style="enable-background:new 0 0 512 512" xml:space="preserve"
                             class="hovered-paths home-book-now-form-double-line">
              <g>
                  <path d="M19.5 10h-14a.5.5 0 0 0 0 1h14a.5.5 0 0 0 0-1zM19.5 14h-14a.5.5 0 0 0 0 1h14a.5.5 0 0 0 0-1z"
                        fill=" #cccccc" data-original=" #cccccc" class="hovered-path"></path>
              </g>
            </svg>
                       <form action="{{route('room.search')}}" method="get">
                           <div class="row g-3">
{{--                               <div class="col-sm-6 col-md-4 home-book-now-form-input-with-icon">--}}
{{--                                   <input type="text" class="form-control rounded-1 py-3 px-4 fw-semibold"--}}
{{--                                          placeholder="Location"--}}
{{--                                          aria-label="Location">--}}
{{--                                   <i class="fa fa-search"></i>--}}
{{--                               </div>--}}
                               <div class="col-sm-6 col-md-4 home-book-now-form-input-with-icon">
                                   <input type="date" class="form-control rounded-1 py-3 px-4 fw-semibold"
                                          placeholder="Arrive Date" name="arrive_date"
                                          aria-label="Arrive Date">
                                   <i class="fa fa-calendar"></i>
                                   @error('arrive_date')
                                   <span class="text-danger">{{$message}}</span>
                                   @enderror
                               </div>



                               <div class="col-sm-6 col-md-4 home-book-now-form-input-with-icon">
                                   <input type="date" class="form-control rounded-1 py-3 px-4 fw-semibold"
                                          placeholder="Depart Date" name="depart_date"
                                          aria-label="Depart Date">
                                   <i class="fa fa-search"></i>
                                   @error('depart_date')
                                   <span class="text-danger">{{$message}}</span>
                                   @enderror
                               </div>



                               <div class="col-sm-6 col-md-4 home-book-now-form-input-with-icon">
                                   <input type="text" class="form-control rounded-1 py-3 px-4 fw-semibold"
                                          placeholder="Guests" name="guests"
                                          aria-label="Guests">
                                   <i class="fa fa-chevron-down"></i>
                                   @error('guests')
                                   <span class="text-danger">{{$message}}</span>
                                   @enderror
                               </div>



                               <div class="col-sm-6 col-md-4 home-book-now-form-input-with-icon">
                                   <input type="text" class="form-control rounded-1 py-3 px-4 fw-semibold" name="child"
                                          placeholder="Child">
                                   <i class="fa fa-chevron-down"></i>
                                   @error('child')
                                   <span class="text-danger">{{$message}}</span>
                                   @enderror
                               </div>



                               <div class="col-sm-6 col-md-4 home-book-now-form-button-with-icon">
                                   <button type="submit"
                                           class="btn btn-warning text-light rounded-1  py-3 home-book-now-form-btn">
                                       BOOK NOW
                                       <i class="fa fa-long-arrow-right ps-2" aria-hidden="true"></i>
                                   </button>
                               </div>
                           </div>
                       </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- home book now form end-->
        <!-- about us start -->
        <section class="home-about-us py-5 mt-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-1 ">
                    <div class="col">
                        <div class="card h-100 border-0 ">
                            <div class="container">
                                <div class="row home-about-us-card-container gy-5">
                                    <div class="col-12 col-md-12 col-lg-6 home-about-us-card-body-1st-row-img">
                                        <img src="{{asset('frontend')}}/images/our-project-45.jpg"
                                             class="img-fluid about-us-card-img" alt="map">
                                        <div class="image-top-text">
                                            <div>
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                     width="40" height="40" x="0"
                                                     y="0" viewBox="0 0 91 91"
                                                     style="enable-background:new 0 0 512 512" xml:space="preserve"
                                                     class="" fill="#fff">
                                                            <g>
                                                               <path
                                                                  d="M45.86 62.22a1.75 1.75 0 0 0 1.75-1.75v-8.35a1.75 1.75 0 1 0-3.5 0v8.35a1.75 1.75 0 0 0 1.75 1.75zM45.86 25a1.75 1.75 0 0 0 1.75-1.75v-8.31a1.75 1.75 0 1 0-3.5 0v8.35A1.75 1.75 0 0 0 45.86 25zM45.86 43.63a1.75 1.75 0 0 0 1.75-1.75v-8.35a1.75 1.75 0 0 0-3.5 0v8.35a1.75 1.75 0 0 0 1.75 1.75zM58.27 25A1.75 1.75 0 0 0 60 23.29v-8.35a1.75 1.75 0 0 0-3.5 0v8.35A1.75 1.75 0 0 0 58.27 25zM58.27 43.63A1.75 1.75 0 0 0 60 41.88v-8.35a1.75 1.75 0 0 0-3.5 0v8.35a1.75 1.75 0 0 0 1.77 1.75zM58.27 62.22A1.75 1.75 0 0 0 60 60.47v-8.35a1.75 1.75 0 0 0-3.5 0v8.35a1.75 1.75 0 0 0 1.77 1.75zM78.78 68.87h1.48a1.75 1.75 0 0 0 0-3.5h-1.48a1.75 1.75 0 0 0 0 3.5zM78.78 58.85h1.48a1.75 1.75 0 0 0 0-3.5h-1.48a1.75 1.75 0 0 0 0 3.5zM78.78 78.8h1.48a1.75 1.75 0 0 0 0-3.5h-1.48a1.75 1.75 0 0 0 0 3.5zM24.78 48.92h1.47a1.75 1.75 0 0 0 0-3.5h-1.47a1.75 1.75 0 0 0 0 3.5zM24.78 38.9h1.47a1.75 1.75 0 0 0 0-3.5h-1.47a1.75 1.75 0 0 0 0 3.5zM24.78 58.85h1.47a1.75 1.75 0 0 0 0-3.5h-1.47a1.75 1.75 0 1 0 0 3.5z">
                                                               </path>
                                                                <path
                                                                     d="M88.54 41.06H72.18V3.29a1.75 1.75 0 0 0-1.75-1.75H33.7A1.75 1.75 0 0 0 32 3.29v21.85H17.33a1.75 1.75 0 0 0-1.75 1.75v21.76a1.75 1.75 0 0 0 3.5 0v-20H32V87.2H19a1.75 1.75 0 0 0 0 3.5h63.56a7.74 7.74 0 0 0 7.73-7.7V42.81a1.75 1.75 0 0 0-1.75-1.75zM47.61 87.2V73.27h8.91V87.2zm21.07 0H60V71.52a1.75 1.75 0 0 0-1.75-1.75H45.86a1.75 1.75 0 0 0-1.75 1.75V87.2h-8.66V5h33.23zM86.79 83a4.24 4.24 0 0 1-4.23 4.24H72.19V44.56h14.6z">
                                                                </path>
                                                                <path
                                                                     d="M22.29 66.48c0-7.13-9.34-12.51-9.74-12.73a1.71 1.71 0 0 0-1.72 0c-.4.22-9.74 5.6-9.74 12.73 0 6.42 3.84 11.75 8.85 12.77V89a1.75 1.75 0 0 0 3.5 0v-9.7c5.01-1.07 8.85-6.4 8.85-12.82zm-17.7 0c0-3.75 4.53-7.49 7.1-9.16 2.57 1.67 7.1 5.39 7.1 9.16 0 4.41-2.28 8.12-5.35 9.16v-4.12a1.75 1.75 0 0 0-3.5 0v4.12c-3.07-1.04-5.35-4.74-5.35-9.16z">
                                                                </path>
                                                            </g>
                                                </svg>
                                            </div>
                                            <h4 class="pt-3">Luxury Interior</h4>
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                        </div>
                                    </div>
                                    <div
                                        class="col-12 col-md-12 col-lg-6 home-about-us-card-body d-flex align-items-center">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="d-flex align-items-center home-about-us-top-title">
                                                        <span class="home-about-us-blank-line rounded-2"></span>
                                                        <h6 class="ps-3 fs-5 fw-semibold">About Us</h6>
                                                    </div>
                                                    <div class="home-about-us-card-body-main-part">

                                                        @foreach($aboutUs as $item)
                                                            <h3 class="py-4 fs-1 fw-bold">
                                                                 {{$item->title}}
                                                            </h3>
                                                            <p class="pb-4 text-muted">
                                                                 {{$item->description}}
                                                            </p>
                                                        @endforeach

                                                    </div>
                                                 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about us end -->
        <!-- latest project slider start -->
{{--        <section class="latest-product-testimonial-slider mt-5 pt-5 pb-4">--}}
{{--            <div class="container pb-5">--}}
{{--                <div id="carouselExample" class="carousel slide">--}}
{{--                    <div class="carousel-inner py-4">--}}
{{--                        <div class="carousel-item active pb-4">--}}
{{--                            <div class="row latest-product-testimonial-slider-content">--}}
{{--                                <div class="col-4 latest-product-testimonial-slider-content-left">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-12 latest-product-card-body">--}}
{{--                                            <div class="d-flex align-items-center latest-product-top-title">--}}
{{--                                                <span class="latest-product-blank-line rounded-2"></span>--}}
{{--                                                <h6 class="ps-3 fs-5 fw-semibold">Latest Product</h6>--}}
{{--                                            </div>--}}
{{--                                            <div class="latest-product-card-body-main-part">--}}
{{--                                                <h3 class="py-4 fs-1 fw-bold text-light">--}}
{{--                                                    Modern Hotel & Room For Luxury Living--}}
{{--                                                </h3>--}}
{{--                                                <p class="pb-4 text-light">Lorem ipsum dolor sit amet consectetur--}}
{{--                                                    adipisicing elit. Quidem--}}
{{--                                                    tenetur nam quae! Error nihil eligendi dolore suscipit natus numquam--}}
{{--                                                    modi.--}}
{{--                                                </p>--}}
{{--                                                <div class="slider-number text-light">--}}
{{--                                                    <p>01/ <span>06</span></p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-8 latest-product-testimonial-slider-content-right">--}}
{{--                                    <div class="row row-cols-2 row-cols-md-3 g-4">--}}
{{--                                        <div class="col latest-product-single-card">--}}
{{--                                            <div class="card border-0 h-100">--}}
{{--                                                <img height="150px"--}}
{{--                                                     src="{{asset('frontend')}}/images/footer-image-1st.jpg"--}}
{{--                                                     class="card-img-top"--}}
{{--                                                     alt="card image">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning latest-product-single-card-upper-button">--}}
{{--                                                        Guest--}}
{{--                                                        House--}}
{{--                                                    </button>--}}
{{--                                                    <h5 class="card-title">Modern Guest Rooms</h5>--}}
{{--                                                    <p class="card-text">This is a longer card with supporting text--}}
{{--                                                        below as a natural lead-in to--}}
{{--                                                        additional content. This content is a little bit longer.</p>--}}
{{--                                                    <ul class="d-flex latest-product-single-card-icon">--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bed" aria-hidden="true"></i>--}}
{{--                                                            3 Bed--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Baths--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Baths--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning mt-3 latest-product-single-card-lower-button">--}}
{{--                                                        $180.00--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col latest-product-single-card">--}}
{{--                                            <div class="card border-0 h-100">--}}
{{--                                                <img height="150px" src="{{asset('frontend')}}/images/our-project-2.jpg"--}}
{{--                                                     class="card-img-top"--}}
{{--                                                     alt="card image">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning latest-product-single-card-upper-button">--}}
{{--                                                        Meeting--}}
{{--                                                        Room--}}
{{--                                                    </button>--}}
{{--                                                    <h5 class="card-title">Conference Room</h5>--}}
{{--                                                    <p class="card-text">This is a longer card with supporting text--}}
{{--                                                        below as a natural lead-in to--}}
{{--                                                        additional content. This content is a little bit longer.</p>--}}
{{--                                                    <ul class="d-flex latest-product-single-card-icon">--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bed" aria-hidden="true"></i>--}}
{{--                                                            3 Bed--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Baths--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Baths--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning mt-3 latest-product-single-card-lower-button">--}}
{{--                                                        $205.00--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col latest-product-single-card">--}}
{{--                                            <div class="card border-0 h-100">--}}
{{--                                                <img height="150px"--}}
{{--                                                     src="{{asset('frontend')}}/images/our-project-48.jpg"--}}
{{--                                                     class="card-img-top"--}}
{{--                                                     alt="card image">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning latest-product-single-card-upper-button">--}}
{{--                                                        Guest--}}
{{--                                                        House--}}
{{--                                                    </button>--}}
{{--                                                    <h5 class="card-title">Deluxe Couple Room</h5>--}}
{{--                                                    <p class="card-text">This is a longer card with supporting text--}}
{{--                                                        below as a natural lead-in to--}}
{{--                                                        additional content. This content is a little bit longer.</p>--}}
{{--                                                    <ul class="d-flex latest-product-single-card-icon">--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bed" aria-hidden="true"></i>--}}
{{--                                                            3 Bed--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Baths--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Baths--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning mt-3 latest-product-single-card-lower-button">--}}
{{--                                                        $199.00--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-item pb-4">--}}
{{--                            <div class="row latest-product-testimonial-slider-content">--}}
{{--                                <div class="col-4 latest-product-testimonial-slider-content-left">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-12 latest-product-card-body">--}}
{{--                                            <div class="d-flex align-items-center latest-product-top-title">--}}
{{--                                                <span class="latest-product-blank-line rounded-2"></span>--}}
{{--                                                <h6 class="ps-3 fs-5 fw-semibold">Latest Product</h6>--}}
{{--                                            </div>--}}
{{--                                            <div class="latest-product-card-body-main-part">--}}
{{--                                                <h3 class="py-4 fs-1 fw-bold text-light">--}}
{{--                                                    Modern Hotel & Room For Luxury Living--}}
{{--                                                </h3>--}}
{{--                                                <p class="pb-4 text-light">Lorem ipsum dolor sit amet consectetur--}}
{{--                                                    adipisicing elit. Quidem--}}
{{--                                                    tenetur nam quae! Error nihil eligendi dolore suscipit natus numquam--}}
{{--                                                    modi.--}}
{{--                                                </p>--}}
{{--                                                <div class="slider-number text-light">--}}
{{--                                                    <p>02/ <span>06</span></p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-8 latest-product-testimonial-slider-content-right">--}}
{{--                                    <div class="row row-cols-2 row-cols-md-3 g-4">--}}
{{--                                        <div class="col latest-product-single-card">--}}
{{--                                            <div class="card border-0 h-100">--}}
{{--                                                <img height="150px"--}}
{{--                                                     src="{{asset('frontend')}}/images/footer-image-1st.jpg"--}}
{{--                                                     class="card-img-top"--}}
{{--                                                     alt="card image">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning latest-product-single-card-upper-button">--}}
{{--                                                        Guest--}}
{{--                                                        House--}}
{{--                                                    </button>--}}
{{--                                                    <h5 class="card-title">Modern Guest Rooms</h5>--}}
{{--                                                    <p class="card-text">This is a longer card with supporting text--}}
{{--                                                        below as a natural lead-in to--}}
{{--                                                        additional content. This content is a little bit longer.</p>--}}
{{--                                                    <ul class="d-flex latest-product-single-card-icon">--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bed" aria-hidden="true"></i>--}}
{{--                                                            3 Bed--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Bath{{asset('frontend')}}--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Baths--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning mt-3 latest-product-single-card-lower-button">--}}
{{--                                                        $180.00--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col latest-product-single-card">--}}
{{--                                            <div class="card border-0 h-100">--}}
{{--                                                <img height="150px" src="{{asset('frontend')}}/images/our-project-2.jpg"--}}
{{--                                                     class="card-img-top"--}}
{{--                                                     alt="card image">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning latest-product-single-card-upper-button">--}}
{{--                                                        Meeting--}}
{{--                                                        Room--}}
{{--                                                    </button>--}}
{{--                                                    <h5 class="card-title">Conference Room</h5>--}}
{{--                                                    <p class="card-text">This is a longer card with supporting text--}}
{{--                                                        below as a natural lead-in to--}}
{{--                                                        additional content. This content is a little bit longer.</p>--}}
{{--                                                    <ul class="d-flex latest-product-single-card-icon">--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bed" aria-hidden="true"></i>--}}
{{--                                                            3 Bed--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Baths--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Baths--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning mt-3 latest-product-single-card-lower-button">--}}
{{--                                                        $205.00--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col latest-product-single-card">--}}
{{--                                            <div class="card border-0 h-100">--}}
{{--                                                <img height="150px"--}}
{{--                                                     src="{{asset('frontend')}}/images/our-project-48.jpg"--}}
{{--                                                     class="card-img-top"--}}
{{--                                                     alt="card image">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning latest-product-single-card-upper-button">--}}
{{--                                                        Guest--}}
{{--                                                        House--}}
{{--                                                    </button>--}}
{{--                                                    <h5 class="card-title">Deluxe Couple Room</h5>--}}
{{--                                                    <p class="card-text">This is a longer card with supporting text--}}
{{--                                                        below as a natural lead-in to--}}
{{--                                                        additional content. This content is a little bit longer.</p>--}}
{{--                                                    <ul class="d-flex latest-product-single-card-icon">--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bed" aria-hidden="true"></i>--}}
{{--                                                            3 Bed--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Baths--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Baths--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning mt-3 latest-product-single-card-lower-button">--}}
{{--                                                        $199.00--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-item pb-4">--}}
{{--                            <div class="row latest-product-testimonial-slider-content">--}}
{{--                                <div class="col-4 latest-product-testimonial-slider-content-left">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-12 latest-product-card-body">--}}
{{--                                            <div class="d-flex align-items-center latest-product-top-title">--}}
{{--                                                <span class="latest-product-blank-line rounded-2"></span>--}}
{{--                                                <h6 class="ps-3 fs-5 fw-semibold">Latest Product</h6>--}}
{{--                                            </div>--}}
{{--                                            <div class="latest-product-card-body-main-part">--}}
{{--                                                <h3 class="py-4 fs-1 fw-bold text-light">--}}
{{--                                                    Modern Hotel & Room For Luxury Living--}}
{{--                                                </h3>--}}
{{--                                                <p class="pb-4 text-light">Lorem ipsum dolor sit amet consectetur--}}
{{--                                                    adipisicing elit. Quidem--}}
{{--                                                    tenetur nam quae! Error nihil eligendi dolore suscipit natus numquam--}}
{{--                                                    modi.--}}
{{--                                                </p>--}}
{{--                                                <div class="slider-number text-light">--}}
{{--                                                    <p>03/ <span>06</span></p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-8 latest-product-testimonial-slider-content-right">--}}
{{--                                    <div class="row row-cols-2 row-cols-md-3 g-4">--}}
{{--                                        <div class="col latest-product-single-card">--}}
{{--                                            <div class="card border-0 h-100">--}}
{{--                                                <img height="150px"--}}
{{--                                                     src="{{asset('frontend')}}/images/footer-image-1st.jpg"--}}
{{--                                                     class="card-img-top"--}}
{{--                                                     alt="card image">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning latest-product-single-card-upper-button">--}}
{{--                                                        Guest--}}
{{--                                                        House--}}
{{--                                                    </button>--}}
{{--                                                    <h5 class="card-title">Modern Guest Rooms</h5>--}}
{{--                                                    <p class="card-text">This is a longer card with supporting text--}}
{{--                                                        below as a natural lead-in to--}}
{{--                                                        additional content. This content is a little bit longer.</p>--}}
{{--                                                    <ul class="d-flex latest-product-single-card-icon">--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bed" aria-hidden="true"></i>--}}
{{--                                                            3 Bed--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Baths--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Baths--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning mt-3 latest-product-single-card-lower-button">--}}
{{--                                                        $180.00--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col latest-product-single-card">--}}
{{--                                            <div class="card border-0 h-100">--}}
{{--                                                <img height="150px" src="{{asset('frontend')}}/images/our-project-2.jpg"--}}
{{--                                                     class="card-img-top"--}}
{{--                                                     alt="card image">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning latest-product-single-card-upper-button">--}}
{{--                                                        Meeting--}}
{{--                                                        Room--}}
{{--                                                    </button>--}}
{{--                                                    <h5 class="card-title">Conference Room</h5>--}}
{{--                                                    <p class="card-text">This is a longer card with supporting text--}}
{{--                                                        below as a natural lead-in to--}}
{{--                                                        additional content. This content is a little bit longer.</p>--}}
{{--                                                    <ul class="d-flex latest-product-single-card-icon">--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bed" aria-hidden="true"></i>--}}
{{--                                                            3 Bed--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Baths--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Baths--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning mt-3 latest-product-single-card-lower-button">--}}
{{--                                                        $205.00--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col latest-product-single-card">--}}
{{--                                            <div class="card border-0 h-100">--}}
{{--                                                <img height="150px"--}}
{{--                                                     src="{{asset('frontend')}}/images/our-project-48.jpg"--}}
{{--                                                     class="card-img-top"--}}
{{--                                                     alt="card image">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning latest-product-single-card-upper-button">--}}
{{--                                                        Guest--}}
{{--                                                        House--}}
{{--                                                    </button>--}}
{{--                                                    <h5 class="card-title">Deluxe Couple Room</h5>--}}
{{--                                                    <p class="card-text">This is a longer card with supporting text--}}
{{--                                                        below as a natural lead-in to--}}
{{--                                                        additional content. This content is a little bit longer.</p>--}}
{{--                                                    <ul class="d-flex latest-product-single-card-icon">--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bed" aria-hidden="true"></i>--}}
{{--                                                            3 Bed--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Baths--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Baths--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning mt-3 latest-product-single-card-lower-button">--}}
{{--                                                        $199.00--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="carousel-item pb-4">--}}
{{--                            <div class="row latest-product-testimonial-slider-content">--}}
{{--                                <div class="col-4 latest-product-testimonial-slider-content-left">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-12 latest-product-card-body">--}}
{{--                                            <div class="d-flex align-items-center latest-product-top-title">--}}
{{--                                                <span class="latest-product-blank-line rounded-2"></span>--}}
{{--                                                <h6 class="ps-3 fs-5 fw-semibold">Latest Product</h6>--}}
{{--                                            </div>--}}
{{--                                            <div class="latest-product-card-body-main-part">--}}
{{--                                                <h3 class="py-4 fs-1 fw-bold text-light">--}}
{{--                                                    Modern Hotel & Room For Luxury Living--}}
{{--                                                </h3>--}}
{{--                                                <p class="pb-4 text-light">Lorem ipsum dolor sit amet consectetur--}}
{{--                                                    adipisicing elit. Quidem--}}
{{--                                                    tenetur nam quae! Error nihil eligendi dolore suscipit natus numquam--}}
{{--                                                    modi.--}}
{{--                                                </p>--}}
{{--                                                <div class="slider-number text-light">--}}
{{--                                                    <p>04/ <span>06</span></p>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-8 latest-product-testimonial-slider-content-right">--}}
{{--                                    <div class="row row-cols-2 row-cols-md-3 g-4">--}}
{{--                                        <div class="col latest-product-single-card">--}}
{{--                                            <div class="card border-0 h-100">--}}
{{--                                                <img height="150px"--}}
{{--                                                     src="{{asset('frontend')}}/images/footer-image-1st.jpg"--}}
{{--                                                     class="card-img-top"--}}
{{--                                                     alt="card image">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning latest-product-single-card-upper-button">--}}
{{--                                                        Guest--}}
{{--                                                        House--}}
{{--                                                    </button>--}}
{{--                                                    <h5 class="card-title">Modern Guest Rooms</h5>--}}
{{--                                                    <p class="card-text">This is a longer card with supporting text--}}
{{--                                                        below as a natural lead-in to--}}
{{--                                                        additional content. This content is a little bit longer.</p>--}}
{{--                                                    <ul class="d-flex latest-product-single-card-icon">--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bed" aria-hidden="true"></i>--}}
{{--                                                            3 Bed--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Baths--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Baths--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning mt-3 latest-product-single-card-lower-button">--}}
{{--                                                        $180.00--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col latest-product-single-card">--}}
{{--                                            <div class="card border-0 h-100">--}}
{{--                                                <img height="150px" src="{{asset('frontend')}}/images/our-project-2.jpg"--}}
{{--                                                     class="card-img-top"--}}
{{--                                                     alt="card image">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning latest-product-single-card-upper-button">--}}
{{--                                                        Meeting--}}
{{--                                                        Room--}}
{{--                                                    </button>--}}
{{--                                                    <h5 class="card-title">Conference Room</h5>--}}
{{--                                                    <p class="card-text">This is a longer card with supporting text--}}
{{--                                                        below as a natural lead-in to--}}
{{--                                                        additional content. This content is a little bit longer.</p>--}}
{{--                                                    <ul class="d-flex latest-product-single-card-icon">--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bed" aria-hidden="true"></i>--}}
{{--                                                            3 Bed--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Baths--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Baths--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning mt-3 latest-product-single-card-lower-button">--}}
{{--                                                        $205.00--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col latest-product-single-card">--}}
{{--                                            <div class="card border-0 h-100">--}}
{{--                                                <img height="150px"--}}
{{--                                                     src="{{asset('frontend')}}/images/our-project-48.jpg"--}}
{{--                                                     class="card-img-top"--}}
{{--                                                     alt="card image">--}}
{{--                                                <div class="card-body">--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning latest-product-single-card-upper-button">--}}
{{--                                                        Guest--}}
{{--                                                        House--}}
{{--                                                    </button>--}}
{{--                                                    <h5 class="card-title">Deluxe Couple Room</h5>--}}
{{--                                                    <p class="card-text">This is a longer card with supporting text--}}
{{--                                                        below as a natural lead-in to--}}
{{--                                                        additional content. This content is a little bit longer.</p>--}}
{{--                                                    <ul class="d-flex latest-product-single-card-icon">--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bed" aria-hidden="true"></i>--}}
{{--                                                            3 Bed--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Baths--}}
{{--                                                        </li>--}}
{{--                                                        <li>--}}
{{--                                                            <i class="fa fa-bath" aria-hidden="true"></i>--}}
{{--                                                            2 Baths--}}
{{--                                                        </li>--}}
{{--                                                    </ul>--}}
{{--                                                    <button type="button"--}}
{{--                                                            class="btn btn-warning mt-3 latest-product-single-card-lower-button">--}}
{{--                                                        $199.00--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"--}}
{{--                                data-bs-slide="prev">--}}
{{--              <span class="custom-carousel-control-prev-icon border border-secondary-subtle rounded-pill">--}}
{{--                <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--              </span>--}}
{{--                            <span class="visually-hidden">Previous</span>--}}
{{--                        </button>--}}
{{--                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"--}}
{{--                                data-bs-slide="next">--}}
{{--              <span class="custom-carousel-control-next-icon border border-secondary-subtle rounded-pill">--}}
{{--                <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--              </span>--}}
{{--                            <span class="visually-hidden">Next</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <!-- latest project slider end -->
        <!-- our services start -->
        <section class="home-our-services my-5">
            <div class="container home-our-services-container py-5">
                <h6 class="text-center">Our Services</h6>
                <h3 class="py-3 mb-5 fs-1 fw-bold text-center">
                    We Provide Most Exclusive <br> Hotel & Room Services
                </h3>
                <div class="row row-cols-1 row-cols-md-3 gx-4 gy-5 home-our-services-all-cards">

                    @foreach($ourService as $key => $item)

                        <div class="col home-our-services-single-card-container">
                            <div
                                class="card h-100 home-our-services-single-card-content py-5 px-1 rounded-0 position-relative">
                                <div class="svg-content mx-auto">
                                    <img src="{{asset('storage/service-images/'.$item->image) }}" alt=""
                                         style="width: 100px;height: auto">
                                </div>
                                <div class="card-body home-our-services-single-card-body pt-4">
                                    <h5 class="card-title text-center fw-bold">{{$item->title}}</h5>
                                    <p class="card-text text-center py-2">
                                        {{$item->description}}
                                    </p>
                                    <div class="text-center d-flex align-items-center justify-content-center">
                                        <a href="javascript:void(0)" class="">
                                            READ MORE <i class="fa fa-long-arrow-right ps-2" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- badges -->
                                <span class="badges">{{ $key + 1 }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- our services end -->
        <!-- booking now start-->
        <section class="home-booking-now py-5">
            <div class="container py-5 home-booking-now-content">
                <div class="home-booking-now-content-bg-text">
                    <h2 class="text-light">Avson</h2>
                </div>
                <div class="row">
                    <div class="col-9 home-booking-now-content-left">
                        <h6 class="text-light">Looking For Luxury Hotel</h6>
                        <h3 class="text-light">Booking Now</h3>
                        <button type="button"
                                class="btn btn-warning text-light rounded-pill px-4 py-3 home-booking-now-btn">
                            Booking Now
                            <i class="fa fa-long-arrow-right ps-2" aria-hidden="true"></i>
                        </button>
                    </div>
                    <div class="col-3 d-flex align-items-center justify-content-center home-booking-now-content-right">
                        <i class="fa fa-play"></i>
                    </div>
                </div>
            </div>
        </section>
        <!-- booking now end -->
        <!-- our project start-->
        <section class="home-our-project my-5">
            <div class="container home-our-project-container py-5">
                <h6 class="text-center">Our Project</h6>
                <h3 class="py-3 mb-5 fs-1 fw-bold text-center">
                    Let's See Luxury Property <br> Insides Beautys
                </h3>

                <div class="row home-our-project-images">
{{--                    @foreach($gallery as $item)--}}
                    <div class="col-6 home-our-project-images-left-colum">

                        <div class="card rounded-0 text-bg-dark home-our-project-images-left-colum-card">

{{--                                <img src="{{asset('storage/gallery-images/'.$item->image)}}" class="card-img"--}}
{{--                            {{dd($gallery[0]['image'])}}--}}
                            @if(isset($gallery[0]['image'])&&$gallery[0]['image']!=null)
                                <img src="{{asset('storage/gallery-images/'.$gallery[0]['image'])}}" class="card-img"
                                     alt="project image">
                            @endif

                                {{--                            <div class="card-img-overlay d-flex flex-column align-items-center justify-content-center">--}}
                                {{--                                <i class="fa fa-plus fs-4" aria-hidden="true"></i>--}}
                                {{--                                <h5 class="card-title pt-4">Deluxe Rooms</h5>--}}
                                {{--                                <p class="card-text">Couple Room Deluxe</p>--}}
                                {{--                            </div>--}}
                        </div>

                    </div>
{{--                    @endforeach--}}
{{--                        <section class="pagination-section">--}}
{{--                            <div class="pagination-section-1st-div"></div>--}}
{{--                            <div>--}}

{{--                                @if($gallery->hasPages())--}}
{{--                                    {{$gallery->links()}}--}}
{{--                                @endif--}}

{{--                            </div>--}}
{{--                        </section>--}}
                    <div class="col-6 home-our-project-images-right-colum">
                        <div class="row home-our-project-images-right-colum-content">
                            <div class="col-8 home-our-project-images-right-colum-image">
                                @if(isset($gallery[1]['image'])&&$gallery[1]['image']!=null)
                                    <img class="img-fluid" src="{{asset('storage/gallery-images/'.$gallery[1]['image'])}}"
                                         alt="project images">
                                @endif
                            </div>
                            <div class="col-4 home-our-project-images-right-colum-image">
                                @if(isset($gallery[2]['image'])&&$gallery[2]['image']!=null)
                                    <img class="img-fluid" src="{{asset('storage/gallery-images/'.$gallery[2]['image'])}}"
                                         alt="project images">
                                @endif
                            </div>
                        </div>
                        <div class="row pt-4 home-our-project-images-right-colum-content">
                            <div class="col-6 home-our-project-images-right-colum-image">

                                @if(isset($gallery[3]['image'])&&$gallery[3]['image']!=null)
                                    <img class="img-fluid" src="{{asset('storage/gallery-images/'.$gallery[3]['image'])}}"
                                         alt="project images">
                                @endif
                            </div>
                            <div class="col-6 home-our-project-images-right-colum-image">

                                @if(isset($gallery[4]['image'])&&$gallery[4]['image']!=null)
                                <img class="img-fluid" src="{{asset('storage/gallery-images/'.$gallery[4]['image'])}}"
                                     alt="project images">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- our project end-->
        <!-- why choose us start-->
        <section class="home-choose-us py-5 my-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-1">
                    <div class="col">
                        <div class="card h-100 border-0 ">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 home-choose-us-card-body">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex align-items-center home-choose-us-top-title">
                                                    <span class="home-choose-us-blank-line rounded-2"></span>
                                                    <h6 class="ps-3 fs-5 fw-semibold">Why Choose Us</h6>
                                                </div>
                                                <div class="home-choose-us-card-body-main-part">
                                                    <h3 class="py-4 fs-1 fw-bold">
                                                        We Care You & We Feel What's Needs For Good Living
                                                    </h3>
                                                    <ul>
                                                        <li class="d-flex align-items-center home-choose-us-card-body-main-part-last-part">
                                                            <i class="fa fa-glass fs-4"></i>
                                                            <div class="ps-4">
                                                                <h4 class="fw-bold pb-2">
                                                                    Relax Living
                                                                </h4>
                                                                <p class="text-muted">
                                                                    Lorem, ipsum dolor sit amet consectetur adipisicing
                                                                    elit. Quas, aperiam! Aliquid,
                                                                    nisi?
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex align-items-center home-choose-us-card-body-main-part-last-part py-4">
                                                            <i class="fa fa-gift fs-4"></i>

                                                            <div class="ps-4">
                                                                <h4 class="fw-bold pb-2">
                                                                    High Security System
                                                                </h4>
                                                                <p class="text-muted">
                                                                    Lorem, ipsum dolor sit amet consectetur adipisicing
                                                                    elit. Quas, aperiam! Aliquid,
                                                                    nisi?
                                                                </p>
                                                            </div>
                                                        </li>
                                                        <li class="d-flex align-items-center home-choose-us-card-body-main-part-last-part">
                                                            <i class="fa fa-music fs-4"></i>
                                                            <div class="ps-4">
                                                                <h4 class="fw-bold pb-2">
                                                                    Such Events & Party
                                                                </h4>
                                                                <p class="text-muted">
                                                                    Lorem, ipsum dolor sit amet consectetur adipisicing
                                                                    elit. Quas, aperiam! Aliquid,
                                                                    nisi?
                                                                </p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-12 col-lg-6 home-choose-us-card-body-1st-row-img">

                                    @if(isset($gallery[0]['image'])&&$gallery[0]['image']!=null)
                                    <img src="{{asset('storage/gallery-images/'.$gallery[0]['image'])}}"
                                         class="img-fluid choose-latest-post-card-img" alt="map">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- why choose us end-->
        <!-- Clients feedback start -->
{{--        <section class="clients-feedback">--}}
{{--            <div class="container clients-feedback-container py-5">--}}
{{--                <h6 class="text-center">Clients Feedback</h6>--}}
{{--                <h3 class="text-light py-3 mb-5 fs-1 fw-bold text-center">--}}
{{--                    Our Satisfaction People Say<br> About Our Services--}}
{{--                </h3>--}}
{{--                <div class="slider-area">--}}
{{--                    <div class="container slider-area-container">--}}
{{--                        <div class="slider2-active slider-active arrow-style">--}}
{{--                            <div>--}}
{{--                                <div class="slick-wrap d-flex single-caro-item">--}}
{{--                                    <div class="content-section">--}}
{{--                                        <p class="">--}}
{{--                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur non,--}}
{{--                                            corrupti dolorum nisi--}}
{{--                                            cumque totam cum voluptas quos molestias, omnis ipsum, dignissimos--}}
{{--                                            perspiciatis tenetur sint--}}
{{--                                            illum! Nihil alias quidem laboriosam.--}}
{{--                                        </p>--}}
{{--                                        <div class="d-flex align-items-center feedbacker-name">--}}
{{--                                            <span></span>--}}
{{--                                            <h5 class="ps-3 fw-semibold">James M. Varney</h5>--}}
{{--                                            <i class="fa fa-quote-right"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <div class="slick-wrap d-flex single-caro-item">--}}
{{--                                    <div class="content-section">--}}
{{--                                        <p class="">--}}
{{--                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur non,--}}
{{--                                            corrupti dolorum nisi--}}
{{--                                            cumque totam cum voluptas quos molestias, omnis ipsum, dignissimos--}}
{{--                                            perspiciatis tenetur sint--}}
{{--                                            illum! Nihil alias quidem laboriosam.--}}
{{--                                        </p>--}}
{{--                                        <div class="d-flex align-items-center feedbacker-name">--}}
{{--                                            <span></span>--}}
{{--                                            <h5 class="ps-3 fw-semibold">James M. Varney</h5>--}}
{{--                                            <i class="fa fa-quote-right"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <div class="slick-wrap d-flex single-caro-item">--}}
{{--                                    <div class="content-section">--}}
{{--                                        <p class="">--}}
{{--                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur non,--}}
{{--                                            corrupti dolorum nisi--}}
{{--                                            cumque totam cum voluptas quos molestias, omnis ipsum, dignissimos--}}
{{--                                            perspiciatis tenetur sint--}}
{{--                                            illum! Nihil alias quidem laboriosam.--}}
{{--                                        </p>--}}
{{--                                        <div class="d-flex align-items-center feedbacker-name">--}}
{{--                                            <span></span>--}}
{{--                                            <h5 class="ps-3 fw-semibold">James M. Varney</h5>--}}
{{--                                            <i class="fa fa-quote-right"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <div class="slick-wrap d-flex single-caro-item">--}}
{{--                                    <div class="content-section">--}}
{{--                                        <p class="">--}}
{{--                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur non,--}}
{{--                                            corrupti dolorum nisi--}}
{{--                                            cumque totam cum voluptas quos molestias, omnis ipsum, dignissimos--}}
{{--                                            perspiciatis tenetur sint--}}
{{--                                            illum! Nihil alias quidem laboriosam.--}}
{{--                                        </p>--}}
{{--                                        <div class="d-flex align-items-center feedbacker-name">--}}
{{--                                            <span></span>--}}
{{--                                            <h5 class="ps-3 fw-semibold">James M. Varney</h5>--}}
{{--                                            <i class="fa fa-quote-right"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <div class="slick-wrap d-flex single-caro-item">--}}
{{--                                    <div class="content-section">--}}
{{--                                        <p class="">--}}
{{--                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur non,--}}
{{--                                            corrupti dolorum nisi--}}
{{--                                            cumque totam cum voluptas quos molestias, omnis ipsum, dignissimos--}}
{{--                                            perspiciatis tenetur sint--}}
{{--                                            illum! Nihil alias quidem laboriosam.--}}
{{--                                        </p>--}}
{{--                                        <div class="d-flex align-items-center feedbacker-name">--}}
{{--                                            <span></span>--}}
{{--                                            <h5 class="ps-3 fw-semibold">James M. Varney</h5>--}}
{{--                                            <i class="fa fa-quote-right"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <div class="slick-wrap d-flex single-caro-item">--}}
{{--                                    <div class="content-section">--}}
{{--                                        <p class="">--}}
{{--                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur non,--}}
{{--                                            corrupti dolorum nisi--}}
{{--                                            cumque totam cum voluptas quos molestias, omnis ipsum, dignissimos--}}
{{--                                            perspiciatis tenetur sint--}}
{{--                                            illum! Nihil alias quidem laboriosam.--}}
{{--                                        </p>--}}
{{--                                        <div class="d-flex align-items-center feedbacker-name">--}}
{{--                                            <span></span>--}}
{{--                                            <h5 class="ps-3 fw-semibold">James M. Varney</h5>--}}
{{--                                            <i class="fa fa-quote-right"></i>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <!-- Clients feedback end -->
        <!-- contact us start -->
        <section class="home-contact-us py-5 my-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-1">
                    <div class="col">
                        <div class="card h-100 border-0 ">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-6 home-contact-us-card-body-1st-row-img">
                                    <img src="{{asset('frontend')}}/images/new-york-map.jpg"
                                         class="img-fluid latest-post-card-img"
                                         alt="map">
                                </div>
                                <div class="col-12 col-md-12 col-lg-6 home-contact-us-card-body">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="d-flex align-items-center home-contact-us-top-title">
                                                    <span class="home-contact-us-blank-line rounded-2"></span>
                                                    <h6 class="ps-3 fs-5 fw-semibold">Have A Coffee</h6>
                                                </div>
                                                <div class="home-contact-us-card-body-main-part">
                                                    <h3 class="py-4 fs-1 fw-bold">
                                                        Don't Hesitate To Contact With Us
                                                    </h3>
                                                    <p class="pb-4 text-muted">Lorem ipsum, dolor sit amet consectetur
                                                        adipisicing elit.
                                                        Eius
                                                        dolorem explicabo
                                                        exercitationem!</p>
                                                    <div class="card border border-warning border-5 rounded-0">
                                                        <div class="mx-auto">
                                                            <div
                                                                class="card-body py-5 d-flex flex-column  justify-content-center">
                                                                <div class="fs-4 text-muted">
                                                                    <i class="fa fa-map-marker text-warning"></i>
                                                                    <span class="ms-2">{{getAddressLink()}}</span>
                                                                </div>
                                                                <div class="py-4 fs-4 text-muted">
                                                                    <i class="fa fa-envelope-open-o text-warning"></i>
                                                                    <span class="ms-2">{{getEmailLink()}}</span>
                                                                </div>
                                                                <div class="fs-4 text-muted">
                                                                    <i class="fa fa-phone text-warning"
                                                                       aria-hidden="true"></i>
                                                                    <span class="ms-2">{{getPhoneLink()}}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact us start -->
        <!-- hotel-logo-collection start -->
        <section class="hotel-logo-collection py-5 ">
            <div class="container my-4">
                <div class="row row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-6">
                    <div class="col">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                             width="80" height="80" x="0" y="0"
                             viewBox="0 0 540.52 540.519"
                             style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
              <g>
                  <path
                      d="M127.76 448.919h-16.636l-5.129-15.812c-1.767-5.461-4.658-5.461-6.427 0l-5.146 15.812h-16.62c-5.754 0-6.636 2.749-1.986 6.118l13.448 9.769-5.147 15.816c-1.767 5.475.562 7.159 5.201 3.79l13.448-9.782 13.467 9.782c4.642 3.369 6.968 1.671 5.185-3.79l-5.131-15.816 13.448-9.769c4.652-3.378 3.765-6.118-1.975-6.118zM437.379 465.665h-16.62l-5.143-15.821c-1.77-5.451-4.658-5.451-6.427 0l-5.129 15.821h-16.643c-5.731 0-6.613 2.74-1.979 6.109l13.446 9.777-5.129 15.808c-1.788 5.475.555 7.159 5.185 3.79l13.465-9.782 13.445 9.782c4.644 3.369 6.982 1.68 5.19-3.79l-5.134-15.808 13.45-9.777c4.655-3.369 3.782-6.109-1.977-6.109zM285.147 503.295h-16.622l-5.148-15.812c-1.766-5.466-4.639-5.466-6.426 0l-5.127 15.812h-16.638c-5.736 0-6.618 2.744-1.986 6.119l13.448 9.768-5.129 15.812c-1.767 5.475.542 7.159 5.201 3.789l13.448-9.777 13.448 9.777c4.656 3.37 6.971 1.676 5.202-3.789l-5.147-15.812 13.45-9.768c4.663-3.378 3.776-6.119-1.974-6.119z"
                      fill="#000000" data-original="#000000" class=""></path>
                  <path
                      d="M35.9 279.388c19.646 111.59 117.228 196.671 234.357 196.671 115.634 0 212.238-82.902 233.589-192.382.099-.43.168-.845.229-1.256 2.729-14.398 4.214-29.225 4.214-44.393C508.29 106.781 401.512 0 270.257 0 139.007 0 32.229 106.781 32.229 238.028c0 13.775 1.241 27.267 3.486 40.408.064.303.122.63.185.952zM145.254 397.39c-36.751-28.894-63.328-70.184-73.299-117.54l63.157-90.122c10.142-3.208 22.563-3.862 31.181 6.903 6.238 7.803 14.321 11.917 23.364 11.917h.354c13.077-.151 25.771-8.944 34.949-17.336l10.625 13.605-113.28 108.664c-11.917 12.27-8.917 23.699-7.078 28.054s7.965 14.463 25.064 14.463h4.961v41.392h.002zm3.585-227.244 28.25-40.312 36.938 47.353c-7.225 6.797-16.478 13.6-24.234 13.69-2.317-.009-5.871-.497-9.714-5.283-8.864-11.092-20.046-15.18-31.24-15.448zm196.099 150.499v105.742a203.456 203.456 0 0 1-28.581 8.965v-44.804h-39.772v49.989c-2.105.079-4.198.168-6.319.168-6.462 0-12.851-.336-19.147-.934v-49.224h-39.775v41.383a200.381 200.381 0 0 1-30.729-12.209v-99.077h-14.729l98.443-94.425 66.907 68.909V236.09h11.435v70.81l13.348 13.759h-11.08v-.014zm35.362 87.456v-52.104h.052c17.1 0 23.219-10.104 25.071-14.463 1.834-4.35 4.826-15.784-7.085-28.054l-20.315-20.923v-61.454c0-16.748-13.628-30.375-30.373-30.375h-21.38c-10.268 0-19.35 5.11-24.848 12.93l-3.879-3.977 22.412-28.691c9.344-2.193 19.909-1.605 27.517 7.899 6.235 7.806 14.323 11.929 23.363 11.929h.354c10.655-.126 21.063-6 29.524-12.708l66.978 95.617c-12.022 51.899-43.992 96.199-87.391 124.374zm-46.073-245.407 25.664-32.852 30.64 43.745c-6.553 5.328-13.665 9.495-19.573 9.567-2.077.103-5.853-.487-9.698-5.292-7.739-9.695-17.283-14.027-27.033-15.168zm-63.962-127.35c108.836 0 197.884 86.236 202.467 193.966l-85.51-122.067c-6.44-9.199-16.051-14.617-26.388-14.881-10.516-.254-20.228 4.66-27.135 13.501l-65.236 83.618-65.223-83.618c-6.923-8.851-16.729-13.789-27.129-13.501-10.342.264-19.966 5.682-26.411 14.89L68.152 223.656c7.392-105.074 95.187-188.312 202.113-188.312z"
                      fill="#000000" data-original="#000000" class=""></path>
                  <path d="M211.343 323.165h39.775v57.093h-39.775zM276.584 323.165h39.772v57.093h-39.772z"
                        fill="#000000"
                        data-original="#000000" class=""></path>
              </g>
            </svg>
                    </div>
                    <div class="col">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                             width="80" height="80" x="0" y="0"
                             viewBox="0 0 512 512"
                             style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
              <g>
                  <path
                      d="M216 320h16v16h-16zM248 320h16v16h-16zM280 320h16v16h-16zM216 352h16v16h-16zM248 352h16v16h-16zM280 352h16v16h-16zM216 384h16v16h-16zM248 384h16v16h-16zM280 384h16v16h-16zM216 256h16v16h-16zM248 256h16v16h-16zM280 256h16v16h-16zM216 288h16v16h-16zM248 288h16v16h-16zM280 288h16v16h-16zM177.869 82.44l33.264 32.424-7.853 45.783a8 8 0 0 0 11.608 8.434L256 147.465l41.116 21.616a8 8 0 0 0 11.608-8.434l-7.853-45.783 33.268-32.424a8 8 0 0 0-4.434-13.646l-45.969-6.679-20.558-41.656a8 8 0 0 0-14.348 0l-20.558 41.656-45.972 6.679a8 8 0 0 0-4.434 13.646zm56.866-5.1a8 8 0 0 0 6.023-4.377L256 42.077l15.246 30.89a8 8 0 0 0 6.023 4.377l34.09 4.953-24.659 24.046a8 8 0 0 0-2.3 7.081l5.823 33.952-30.491-16.03a8 8 0 0 0-7.446 0l-30.491 16.03 5.823-33.952a8 8 0 0 0-2.3-7.081L200.645 82.3zM328.392 146.092a8 8 0 0 0 2.024 8.2l22.151 21.592-5.229 30.489a8 8 0 0 0 11.608 8.434l27.381-14.395 27.381 14.395a8 8 0 0 0 11.607-8.434l-5.23-30.489 22.152-21.592a8 8 0 0 0-4.434-13.646l-30.612-4.446-13.691-27.741a8 8 0 0 0-14.347 0L365.462 136.2l-30.612 4.448a8 8 0 0 0-6.458 5.444zm43.533 5.336a8 8 0 0 0 6.024-4.376l8.378-16.976 8.378 16.976a8 8 0 0 0 6.023 4.376l18.733 2.722-13.555 13.214a8 8 0 0 0-2.3 7.081l3.2 18.658-16.756-8.81a8 8 0 0 0-7.445 0l-16.756 8.81 3.2-18.658a8 8 0 0 0-2.3-7.081l-13.557-13.214zM417.822 233.159a8 8 0 0 0-4.433 13.645l14.245 13.886-3.363 19.61a8 8 0 0 0 11.607 8.434l17.608-9.257 17.608 9.257A8 8 0 0 0 482.7 280.3l-3.363-19.606 14.247-13.894a8 8 0 0 0-4.434-13.645l-19.686-2.855-8.8-17.839a8 8 0 0 0-14.348 0l-8.8 17.839zM450 241.151l3.491-7.074 3.492 7.074a8 8 0 0 0 6.017 4.376l7.807 1.135-5.649 5.506a8 8 0 0 0-2.3 7.082l1.334 7.775-6.983-3.671a8 8 0 0 0-7.445 0l-6.983 3.671 1.333-7.775a8 8 0 0 0-2.3-7.082l-5.648-5.506 7.807-1.135a8 8 0 0 0 6.027-4.376zM69.763 154.293l22.152 21.592-5.23 30.489a8 8 0 0 0 11.607 8.434l27.381-14.395 27.381 14.395a8 8 0 0 0 11.608-8.434l-5.229-30.489 22.151-21.592a8 8 0 0 0-4.434-13.646l-30.612-4.447-13.691-27.74a8 8 0 0 0-14.347 0l-13.691 27.74-30.609 4.447a8 8 0 0 0-4.434 13.646zm41.509-2.865a8 8 0 0 0 6.023-4.376l8.378-16.976 8.378 16.976a8 8 0 0 0 6.024 4.376l18.733 2.722-13.555 13.214a8 8 0 0 0-2.3 7.081l3.2 18.658-16.756-8.81a8.006 8.006 0 0 0-7.445 0L105.2 193.1l3.2-18.658a8 8 0 0 0-2.3-7.081L92.539 154.15zM18.416 246.8l14.245 13.89L29.3 280.3a8 8 0 0 0 11.608 8.434l17.608-9.257 17.608 9.257a8 8 0 0 0 11.605-8.434l-3.363-19.61 14.245-13.89a8 8 0 0 0-4.433-13.645L74.491 230.3l-8.8-17.839a8 8 0 0 0-14.348 0l-8.8 17.839-19.693 2.859a8 8 0 0 0-4.434 13.641zM49 245.527a8 8 0 0 0 6.023-4.376l3.492-7.074 3.491 7.074a8 8 0 0 0 6.023 4.376l7.807 1.135-5.648 5.506a8 8 0 0 0-2.3 7.082l1.333 7.775-6.983-3.671a8 8 0 0 0-7.445 0l-6.983 3.671 1.334-7.775a8 8 0 0 0-2.3-7.082l-5.649-5.506zM144 288h24v16h-24zM144 328h24v16h-24zM144 368h24v16h-24zM144 408h24v16h-24z"
                      fill="#000000" data-original="#000000" class=""></path>
                  <path
                      d="M464 392h-16a32.036 32.036 0 0 0-32 32v16.474a37.8 37.8 0 0 0-16 6.558V408h-16v40h-56V264h56v128h16V256a8 8 0 0 0-8-8h-64v-40a8 8 0 0 0-8-8h-24v-16a8 8 0 0 0-8-8h-64a8 8 0 0 0-8 8v16h-24a8 8 0 0 0-8 8v40h-64a8 8 0 0 0-8 8v48h16v-40h56v184h-56V320h-16v127.032a37.8 37.8 0 0 0-16-6.558V424a32.036 32.036 0 0 0-32-32H48a32.036 32.036 0 0 0-32 32v64a8 8 0 0 0 8 8h464a8 8 0 0 0 8-8v-64a32.036 32.036 0 0 0-32-32zM232 192h48v32h-48zM32 424a16.019 16.019 0 0 1 16-16h16a16.019 16.019 0 0 1 16 16v16.474A38.061 38.061 0 0 0 48 478v2H32zm32 56v-2a22.025 22.025 0 0 1 22-22h4a22.025 22.025 0 0 1 22 22v2zm64-16h56v16h-56zm72-248h16v16a8 8 0 0 0 8 8h64a8 8 0 0 0 8-8v-16h16v264h-24v-56a8 8 0 0 0-8-8h-48a8 8 0 0 0-8 8v56h-24zm40 264v-48h32v48zm88-16h56v16h-56zm72 16v-2a22.025 22.025 0 0 1 22-22h4a22.025 22.025 0 0 1 22 22v2zm80 0h-16v-2a38.061 38.061 0 0 0-32-37.526V424a16.019 16.019 0 0 1 16-16h16a16.019 16.019 0 0 1 16 16z"
                      fill="#000000" data-original="#000000" class=""></path>
                  <path d="M344 368h24v16h-24zM344 408h24v16h-24zM344 288h24v16h-24zM344 328h24v16h-24z" fill="#000000"
                        data-original="#000000" class=""></path>
              </g>
            </svg>
                    </div>
                    <div class="col">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                             width="80" height="80" x="0" y="0" viewBox="0 0 64 64"
                             style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
              <g>
                  <path
                      d="m28.558 7.098-.47 2.74a1 1 0 0 0 1.45 1.053L32 9.6l2.461 1.293a1 1 0 0 0 1.452-1.054l-.47-2.74 1.99-1.942a1 1 0 0 0-.553-1.705l-2.752-.4L32.897.558a1.04 1.04 0 0 0-1.793 0L29.873 3.05l-2.752.4a1 1 0 0 0-.554 1.705Zm2.123-2.144a.998.998 0 0 0 .752-.547L32 3.26l.567 1.147a.998.998 0 0 0 .752.547l1.267.185-.916.893a1 1 0 0 0-.288.885l.217 1.262-1.134-.595a.997.997 0 0 0-.93 0l-1.134.595.217-1.262a1 1 0 0 0-.288-.885l-.916-.893ZM42.558 12.098l-.47 2.74a1 1 0 0 0 1.45 1.053L46 14.6l2.461 1.293a1 1 0 0 0 1.452-1.054l-.47-2.74 1.99-1.942a1 1 0 0 0-.553-1.705l-2.752-.4-1.231-2.493a1.04 1.04 0 0 0-1.793 0L43.873 8.05l-2.752.4a1 1 0 0 0-.554 1.705Zm2.123-2.144a.998.998 0 0 0 .752-.547L46 8.26l.567 1.147a.998.998 0 0 0 .752.547l1.267.185-.916.893a1 1 0 0 0-.288.885l.217 1.262-1.134-.595a.997.997 0 0 0-.93 0l-1.134.595.217-1.262a1 1 0 0 0-.288-.885l-.916-.893ZM54.558 19.098l-.47 2.74a1 1 0 0 0 1.45 1.053L58 21.6l2.461 1.293a1 1 0 0 0 1.452-1.054l-.47-2.74 1.99-1.941a1 1 0 0 0-.553-1.706l-2.752-.4-1.231-2.493a1.04 1.04 0 0 0-1.793 0l-1.231 2.493-2.752.4a1 1 0 0 0-.554 1.706Zm2.123-2.144a.998.998 0 0 0 .752-.547L58 15.26l.567 1.147a.998.998 0 0 0 .752.547l1.267.185-.916.893a1 1 0 0 0-.288.885l.217 1.262-1.134-.595a.997.997 0 0 0-.93 0l-1.134.595.217-1.262a1 1 0 0 0-.288-.885l-.916-.893ZM14.558 12.098l-.47 2.74a1 1 0 0 0 1.45 1.053L18 14.6l2.461 1.293a1 1 0 0 0 1.452-1.054l-.47-2.74 1.99-1.942a1 1 0 0 0-.553-1.705l-2.752-.4-1.232-2.493a1.04 1.04 0 0 0-1.793 0l-1.23 2.493-2.752.4a1 1 0 0 0-.554 1.705Zm2.123-2.144a.998.998 0 0 0 .752-.547L18 8.26l.567 1.147a.998.998 0 0 0 .752.547l1.267.185-.916.893a1 1 0 0 0-.288.885l.217 1.262-1.134-.595a.997.997 0 0 0-.93 0l-1.134.595.217-1.262a1 1 0 0 0-.288-.885l-.916-.893ZM2.558 19.098l-.47 2.74a1 1 0 0 0 1.45 1.053L6 21.6l2.461 1.293a1 1 0 0 0 1.452-1.054l-.47-2.74 1.99-1.941a1 1 0 0 0-.553-1.706l-2.752-.4-1.232-2.493a1.04 1.04 0 0 0-1.793 0l-1.23 2.493-2.752.4a1 1 0 0 0-.554 1.705Zm2.123-2.144a.998.998 0 0 0 .752-.547L6 15.26l.567 1.147a.998.998 0 0 0 .752.547l1.267.185-.916.893a1 1 0 0 0-.288.885l.217 1.262-1.134-.595a.997.997 0 0 0-.93 0l-1.134.595.217-1.262a1 1 0 0 0-.288-.885l-.916-.893Z"
                      fill="#000000" data-original="#000000" class=""></path>
                  <path
                      d="M63 62h-1V29h1a1 1 0 0 0 0-2H45v-8a1 1 0 0 0-1-1H20a1 1 0 0 0-1 1v8H1a1 1 0 0 0 0 2h1v33H1a1 1 0 0 0 0 2h62a1 1 0 0 0 0-2ZM4 29h15v33H4Zm17-9h22v42h-5V50a1 1 0 0 0-1-1H27a1 1 0 0 0-1 1v12h-5Zm7 33v-2h8v2Zm0 2h3v7h-3Zm5 7v-7h3v7Zm12 0V29h15v33Z"
                      fill="#000000" data-original="#000000" class=""></path>
                  <path
                      d="M30 48h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM37 48h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM27 48a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm-3-4h2v2h-2ZM30 41h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM37 41h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM23 41h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM30 34h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM37 34h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM23 34h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM30 27h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM37 27h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM51 32h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM58 32h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM51 39h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM58 39h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM51 46h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM58 46h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM51 53h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM58 53h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM23 27h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM17 32h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM10 32H6a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4H7v-2h2ZM17 39h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM10 39H6a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4H7v-2h2ZM17 46h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM10 46H6a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4H7v-2h2ZM17 53h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM10 53H6a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4H7v-2h2Z"
                      fill="#000000" data-original="#000000" class=""></path>
              </g>
            </svg>
                    </div>

                    <div class="col">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                             width="80" height="80" x="0" y="0"
                             viewBox="0 0 540.52 540.519"
                             style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
              <g>
                  <path
                      d="M127.76 448.919h-16.636l-5.129-15.812c-1.767-5.461-4.658-5.461-6.427 0l-5.146 15.812h-16.62c-5.754 0-6.636 2.749-1.986 6.118l13.448 9.769-5.147 15.816c-1.767 5.475.562 7.159 5.201 3.79l13.448-9.782 13.467 9.782c4.642 3.369 6.968 1.671 5.185-3.79l-5.131-15.816 13.448-9.769c4.652-3.378 3.765-6.118-1.975-6.118zM437.379 465.665h-16.62l-5.143-15.821c-1.77-5.451-4.658-5.451-6.427 0l-5.129 15.821h-16.643c-5.731 0-6.613 2.74-1.979 6.109l13.446 9.777-5.129 15.808c-1.788 5.475.555 7.159 5.185 3.79l13.465-9.782 13.445 9.782c4.644 3.369 6.982 1.68 5.19-3.79l-5.134-15.808 13.45-9.777c4.655-3.369 3.782-6.109-1.977-6.109zM285.147 503.295h-16.622l-5.148-15.812c-1.766-5.466-4.639-5.466-6.426 0l-5.127 15.812h-16.638c-5.736 0-6.618 2.744-1.986 6.119l13.448 9.768-5.129 15.812c-1.767 5.475.542 7.159 5.201 3.789l13.448-9.777 13.448 9.777c4.656 3.37 6.971 1.676 5.202-3.789l-5.147-15.812 13.45-9.768c4.663-3.378 3.776-6.119-1.974-6.119z"
                      fill="#000000" data-original="#000000" class=""></path>
                  <path
                      d="M35.9 279.388c19.646 111.59 117.228 196.671 234.357 196.671 115.634 0 212.238-82.902 233.589-192.382.099-.43.168-.845.229-1.256 2.729-14.398 4.214-29.225 4.214-44.393C508.29 106.781 401.512 0 270.257 0 139.007 0 32.229 106.781 32.229 238.028c0 13.775 1.241 27.267 3.486 40.408.064.303.122.63.185.952zM145.254 397.39c-36.751-28.894-63.328-70.184-73.299-117.54l63.157-90.122c10.142-3.208 22.563-3.862 31.181 6.903 6.238 7.803 14.321 11.917 23.364 11.917h.354c13.077-.151 25.771-8.944 34.949-17.336l10.625 13.605-113.28 108.664c-11.917 12.27-8.917 23.699-7.078 28.054s7.965 14.463 25.064 14.463h4.961v41.392h.002zm3.585-227.244 28.25-40.312 36.938 47.353c-7.225 6.797-16.478 13.6-24.234 13.69-2.317-.009-5.871-.497-9.714-5.283-8.864-11.092-20.046-15.18-31.24-15.448zm196.099 150.499v105.742a203.456 203.456 0 0 1-28.581 8.965v-44.804h-39.772v49.989c-2.105.079-4.198.168-6.319.168-6.462 0-12.851-.336-19.147-.934v-49.224h-39.775v41.383a200.381 200.381 0 0 1-30.729-12.209v-99.077h-14.729l98.443-94.425 66.907 68.909V236.09h11.435v70.81l13.348 13.759h-11.08v-.014zm35.362 87.456v-52.104h.052c17.1 0 23.219-10.104 25.071-14.463 1.834-4.35 4.826-15.784-7.085-28.054l-20.315-20.923v-61.454c0-16.748-13.628-30.375-30.373-30.375h-21.38c-10.268 0-19.35 5.11-24.848 12.93l-3.879-3.977 22.412-28.691c9.344-2.193 19.909-1.605 27.517 7.899 6.235 7.806 14.323 11.929 23.363 11.929h.354c10.655-.126 21.063-6 29.524-12.708l66.978 95.617c-12.022 51.899-43.992 96.199-87.391 124.374zm-46.073-245.407 25.664-32.852 30.64 43.745c-6.553 5.328-13.665 9.495-19.573 9.567-2.077.103-5.853-.487-9.698-5.292-7.739-9.695-17.283-14.027-27.033-15.168zm-63.962-127.35c108.836 0 197.884 86.236 202.467 193.966l-85.51-122.067c-6.44-9.199-16.051-14.617-26.388-14.881-10.516-.254-20.228 4.66-27.135 13.501l-65.236 83.618-65.223-83.618c-6.923-8.851-16.729-13.789-27.129-13.501-10.342.264-19.966 5.682-26.411 14.89L68.152 223.656c7.392-105.074 95.187-188.312 202.113-188.312z"
                      fill="#000000" data-original="#000000" class=""></path>
                  <path d="M211.343 323.165h39.775v57.093h-39.775zM276.584 323.165h39.772v57.093h-39.772z"
                        fill="#000000"
                        data-original="#000000" class=""></path>
              </g>
            </svg>
                    </div>
                    <div class="col">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                             width="80" height="80" x="0" y="0"
                             viewBox="0 0 512 512"
                             style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
              <g>
                  <path
                      d="M216 320h16v16h-16zM248 320h16v16h-16zM280 320h16v16h-16zM216 352h16v16h-16zM248 352h16v16h-16zM280 352h16v16h-16zM216 384h16v16h-16zM248 384h16v16h-16zM280 384h16v16h-16zM216 256h16v16h-16zM248 256h16v16h-16zM280 256h16v16h-16zM216 288h16v16h-16zM248 288h16v16h-16zM280 288h16v16h-16zM177.869 82.44l33.264 32.424-7.853 45.783a8 8 0 0 0 11.608 8.434L256 147.465l41.116 21.616a8 8 0 0 0 11.608-8.434l-7.853-45.783 33.268-32.424a8 8 0 0 0-4.434-13.646l-45.969-6.679-20.558-41.656a8 8 0 0 0-14.348 0l-20.558 41.656-45.972 6.679a8 8 0 0 0-4.434 13.646zm56.866-5.1a8 8 0 0 0 6.023-4.377L256 42.077l15.246 30.89a8 8 0 0 0 6.023 4.377l34.09 4.953-24.659 24.046a8 8 0 0 0-2.3 7.081l5.823 33.952-30.491-16.03a8 8 0 0 0-7.446 0l-30.491 16.03 5.823-33.952a8 8 0 0 0-2.3-7.081L200.645 82.3zM328.392 146.092a8 8 0 0 0 2.024 8.2l22.151 21.592-5.229 30.489a8 8 0 0 0 11.608 8.434l27.381-14.395 27.381 14.395a8 8 0 0 0 11.607-8.434l-5.23-30.489 22.152-21.592a8 8 0 0 0-4.434-13.646l-30.612-4.446-13.691-27.741a8 8 0 0 0-14.347 0L365.462 136.2l-30.612 4.448a8 8 0 0 0-6.458 5.444zm43.533 5.336a8 8 0 0 0 6.024-4.376l8.378-16.976 8.378 16.976a8 8 0 0 0 6.023 4.376l18.733 2.722-13.555 13.214a8 8 0 0 0-2.3 7.081l3.2 18.658-16.756-8.81a8 8 0 0 0-7.445 0l-16.756 8.81 3.2-18.658a8 8 0 0 0-2.3-7.081l-13.557-13.214zM417.822 233.159a8 8 0 0 0-4.433 13.645l14.245 13.886-3.363 19.61a8 8 0 0 0 11.607 8.434l17.608-9.257 17.608 9.257A8 8 0 0 0 482.7 280.3l-3.363-19.606 14.247-13.894a8 8 0 0 0-4.434-13.645l-19.686-2.855-8.8-17.839a8 8 0 0 0-14.348 0l-8.8 17.839zM450 241.151l3.491-7.074 3.492 7.074a8 8 0 0 0 6.017 4.376l7.807 1.135-5.649 5.506a8 8 0 0 0-2.3 7.082l1.334 7.775-6.983-3.671a8 8 0 0 0-7.445 0l-6.983 3.671 1.333-7.775a8 8 0 0 0-2.3-7.082l-5.648-5.506 7.807-1.135a8 8 0 0 0 6.027-4.376zM69.763 154.293l22.152 21.592-5.23 30.489a8 8 0 0 0 11.607 8.434l27.381-14.395 27.381 14.395a8 8 0 0 0 11.608-8.434l-5.229-30.489 22.151-21.592a8 8 0 0 0-4.434-13.646l-30.612-4.447-13.691-27.74a8 8 0 0 0-14.347 0l-13.691 27.74-30.609 4.447a8 8 0 0 0-4.434 13.646zm41.509-2.865a8 8 0 0 0 6.023-4.376l8.378-16.976 8.378 16.976a8 8 0 0 0 6.024 4.376l18.733 2.722-13.555 13.214a8 8 0 0 0-2.3 7.081l3.2 18.658-16.756-8.81a8.006 8.006 0 0 0-7.445 0L105.2 193.1l3.2-18.658a8 8 0 0 0-2.3-7.081L92.539 154.15zM18.416 246.8l14.245 13.89L29.3 280.3a8 8 0 0 0 11.608 8.434l17.608-9.257 17.608 9.257a8 8 0 0 0 11.605-8.434l-3.363-19.61 14.245-13.89a8 8 0 0 0-4.433-13.645L74.491 230.3l-8.8-17.839a8 8 0 0 0-14.348 0l-8.8 17.839-19.693 2.859a8 8 0 0 0-4.434 13.641zM49 245.527a8 8 0 0 0 6.023-4.376l3.492-7.074 3.491 7.074a8 8 0 0 0 6.023 4.376l7.807 1.135-5.648 5.506a8 8 0 0 0-2.3 7.082l1.333 7.775-6.983-3.671a8 8 0 0 0-7.445 0l-6.983 3.671 1.334-7.775a8 8 0 0 0-2.3-7.082l-5.649-5.506zM144 288h24v16h-24zM144 328h24v16h-24zM144 368h24v16h-24zM144 408h24v16h-24z"
                      fill="#000000" data-original="#000000" class=""></path>
                  <path
                      d="M464 392h-16a32.036 32.036 0 0 0-32 32v16.474a37.8 37.8 0 0 0-16 6.558V408h-16v40h-56V264h56v128h16V256a8 8 0 0 0-8-8h-64v-40a8 8 0 0 0-8-8h-24v-16a8 8 0 0 0-8-8h-64a8 8 0 0 0-8 8v16h-24a8 8 0 0 0-8 8v40h-64a8 8 0 0 0-8 8v48h16v-40h56v184h-56V320h-16v127.032a37.8 37.8 0 0 0-16-6.558V424a32.036 32.036 0 0 0-32-32H48a32.036 32.036 0 0 0-32 32v64a8 8 0 0 0 8 8h464a8 8 0 0 0 8-8v-64a32.036 32.036 0 0 0-32-32zM232 192h48v32h-48zM32 424a16.019 16.019 0 0 1 16-16h16a16.019 16.019 0 0 1 16 16v16.474A38.061 38.061 0 0 0 48 478v2H32zm32 56v-2a22.025 22.025 0 0 1 22-22h4a22.025 22.025 0 0 1 22 22v2zm64-16h56v16h-56zm72-248h16v16a8 8 0 0 0 8 8h64a8 8 0 0 0 8-8v-16h16v264h-24v-56a8 8 0 0 0-8-8h-48a8 8 0 0 0-8 8v56h-24zm40 264v-48h32v48zm88-16h56v16h-56zm72 16v-2a22.025 22.025 0 0 1 22-22h4a22.025 22.025 0 0 1 22 22v2zm80 0h-16v-2a38.061 38.061 0 0 0-32-37.526V424a16.019 16.019 0 0 1 16-16h16a16.019 16.019 0 0 1 16 16z"
                      fill="#000000" data-original="#000000" class=""></path>
                  <path d="M344 368h24v16h-24zM344 408h24v16h-24zM344 288h24v16h-24zM344 328h24v16h-24z" fill="#000000"
                        data-original="#000000" class=""></path>
              </g>
            </svg>
                    </div>
                    <div class="col">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                             width="80" height="80" x="0" y="0" viewBox="0 0 64 64"
                             style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
              <g>
                  <path
                      d="m28.558 7.098-.47 2.74a1 1 0 0 0 1.45 1.053L32 9.6l2.461 1.293a1 1 0 0 0 1.452-1.054l-.47-2.74 1.99-1.942a1 1 0 0 0-.553-1.705l-2.752-.4L32.897.558a1.04 1.04 0 0 0-1.793 0L29.873 3.05l-2.752.4a1 1 0 0 0-.554 1.705Zm2.123-2.144a.998.998 0 0 0 .752-.547L32 3.26l.567 1.147a.998.998 0 0 0 .752.547l1.267.185-.916.893a1 1 0 0 0-.288.885l.217 1.262-1.134-.595a.997.997 0 0 0-.93 0l-1.134.595.217-1.262a1 1 0 0 0-.288-.885l-.916-.893ZM42.558 12.098l-.47 2.74a1 1 0 0 0 1.45 1.053L46 14.6l2.461 1.293a1 1 0 0 0 1.452-1.054l-.47-2.74 1.99-1.942a1 1 0 0 0-.553-1.705l-2.752-.4-1.231-2.493a1.04 1.04 0 0 0-1.793 0L43.873 8.05l-2.752.4a1 1 0 0 0-.554 1.705Zm2.123-2.144a.998.998 0 0 0 .752-.547L46 8.26l.567 1.147a.998.998 0 0 0 .752.547l1.267.185-.916.893a1 1 0 0 0-.288.885l.217 1.262-1.134-.595a.997.997 0 0 0-.93 0l-1.134.595.217-1.262a1 1 0 0 0-.288-.885l-.916-.893ZM54.558 19.098l-.47 2.74a1 1 0 0 0 1.45 1.053L58 21.6l2.461 1.293a1 1 0 0 0 1.452-1.054l-.47-2.74 1.99-1.941a1 1 0 0 0-.553-1.706l-2.752-.4-1.231-2.493a1.04 1.04 0 0 0-1.793 0l-1.231 2.493-2.752.4a1 1 0 0 0-.554 1.706Zm2.123-2.144a.998.998 0 0 0 .752-.547L58 15.26l.567 1.147a.998.998 0 0 0 .752.547l1.267.185-.916.893a1 1 0 0 0-.288.885l.217 1.262-1.134-.595a.997.997 0 0 0-.93 0l-1.134.595.217-1.262a1 1 0 0 0-.288-.885l-.916-.893ZM14.558 12.098l-.47 2.74a1 1 0 0 0 1.45 1.053L18 14.6l2.461 1.293a1 1 0 0 0 1.452-1.054l-.47-2.74 1.99-1.942a1 1 0 0 0-.553-1.705l-2.752-.4-1.232-2.493a1.04 1.04 0 0 0-1.793 0l-1.23 2.493-2.752.4a1 1 0 0 0-.554 1.705Zm2.123-2.144a.998.998 0 0 0 .752-.547L18 8.26l.567 1.147a.998.998 0 0 0 .752.547l1.267.185-.916.893a1 1 0 0 0-.288.885l.217 1.262-1.134-.595a.997.997 0 0 0-.93 0l-1.134.595.217-1.262a1 1 0 0 0-.288-.885l-.916-.893ZM2.558 19.098l-.47 2.74a1 1 0 0 0 1.45 1.053L6 21.6l2.461 1.293a1 1 0 0 0 1.452-1.054l-.47-2.74 1.99-1.941a1 1 0 0 0-.553-1.706l-2.752-.4-1.232-2.493a1.04 1.04 0 0 0-1.793 0l-1.23 2.493-2.752.4a1 1 0 0 0-.554 1.705Zm2.123-2.144a.998.998 0 0 0 .752-.547L6 15.26l.567 1.147a.998.998 0 0 0 .752.547l1.267.185-.916.893a1 1 0 0 0-.288.885l.217 1.262-1.134-.595a.997.997 0 0 0-.93 0l-1.134.595.217-1.262a1 1 0 0 0-.288-.885l-.916-.893Z"
                      fill="#000000" data-original="#000000" class=""></path>
                  <path
                      d="M63 62h-1V29h1a1 1 0 0 0 0-2H45v-8a1 1 0 0 0-1-1H20a1 1 0 0 0-1 1v8H1a1 1 0 0 0 0 2h1v33H1a1 1 0 0 0 0 2h62a1 1 0 0 0 0-2ZM4 29h15v33H4Zm17-9h22v42h-5V50a1 1 0 0 0-1-1H27a1 1 0 0 0-1 1v12h-5Zm7 33v-2h8v2Zm0 2h3v7h-3Zm5 7v-7h3v7Zm12 0V29h15v33Z"
                      fill="#000000" data-original="#000000" class=""></path>
                  <path
                      d="M30 48h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM37 48h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM27 48a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm-3-4h2v2h-2ZM30 41h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM37 41h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM23 41h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM30 34h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM37 34h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM23 34h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM30 27h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM37 27h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM51 32h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM58 32h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM51 39h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM58 39h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM51 46h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM58 46h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM51 53h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM58 53h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM23 27h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1Zm1-4h2v2h-2ZM17 32h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM10 32H6a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4H7v-2h2ZM17 39h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM10 39H6a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4H7v-2h2ZM17 46h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM10 46H6a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4H7v-2h2ZM17 53h-4a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4h-2v-2h2ZM10 53H6a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1Zm-1 4H7v-2h2Z"
                      fill="#000000" data-original="#000000" class=""></path>
              </g>
            </svg>
                    </div>

                </div>
            </div>


        </section>
        <!-- hotel-logo-collection end -->
    </main>
    <!-- main end -->
@endsection
