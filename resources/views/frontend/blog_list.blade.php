@extends('frontend.master_header_footer.frontend_masterpage')
@section('room-details')

    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('success')}}
        </div>
    @endif

<!-- main start -->
<main>
    <!-- room details hero start -->
    <section class="room-grid-hero py-5">
        <div class="container py-5 room-grid-hero-content">
            <div class="d-flex align-items-center justify-content-center room-grid-hero-content-bg-text">
                <h2 class="text-light">Room</h2>
            </div>
            <div class="row">
                <div
                    class="d-flex flex-column align-items-center justify-content-center room-grid-hero-content-left">
                    <h3 class="text-light">Blog List</h3>
                    <div class="d-flex align-items-center">
                        <h5 class="text-warning mb-0">Home</h5>
                        <i class="fa fa-angle-double-right text-light px-3"></i>
                        <h5 class="text-light mb-0">Room Details</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- room details hero end -->
    <!-- room full details start-->
    <section class="room-full-details my-5">
        <div class="container py-5 room-full-details-content">
            <div class="row">
                <div class="col-lg-8 col-md-9 col-12">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="details">
                                <div class="single-content">
                                    <div class="img-div">
                                        <img src="{{asset('frontend/images/footer-image-1st.jpg')}}" alt="">
                                    </div>
                                    <div class="single-blog-title">
                                        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, corrupti.</h4>
                                        <ul class="single-blog-authore">
                                            <li><i class="fa fa-user" aria-hidden="true"></i><span>By John Doe</span></li>
                                            <li>Date: 02-02-2022</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="details">
                                <div class="single-content">
                                    <div class="img-div">
                                        <img src="{{asset('frontend/images/footer-image-2nd.jpg')}}" alt="">
                                    </div>
                                    <div class="single-blog-title">
                                        <h4> Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, aliquid.</h4>
                                        <ul class="single-blog-authore">
                                            <li><i class="fa fa-user" aria-hidden="true"></i><span>By John Doe</span></li>
                                            <li>Date: 02-02-2022</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="details">
                                <div class="single-content">
                                    <div class="img-div">
                                        <img src="{{asset('frontend/images/footer-image-1st.jpg')}}" alt="">
                                    </div>
                                    <div class="single-blog-title">
                                        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, corrupti.</h4>
                                        <ul class="single-blog-authore">
                                            <li><i class="fa fa-user" aria-hidden="true"></i><span>By John Doe</span></li>
                                            <li>Date: 02-02-2022</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="details">
                                <div class="single-content">
                                    <div class="img-div">
                                        <img src="{{asset('frontend/images/footer-image-2nd.jpg')}}" alt="">
                                    </div>
                                    <div class="single-blog-title">
                                        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, aliquid.</h4>
                                        <ul class="single-blog-authore">
                                            <li><i class="fa fa-user" aria-hidden="true"></i><span>By John Doe</span></li>
                                            <li>Date: 02-02-2022</li>
                                        </ul>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-3 col-12">
                    <div class="room-full-details-content-right">
                        <div class="room-full-details-content-right-upper-part">
                            <h4>$162.00 <span>Night</span></h4>

                            <form class="room-full-details-content-right-form">
                                <div class="room-full-details-content-right-form-input-with-icon">
                                    <input type="text" class="form-control rounded-1" placeholder="Search"
                                        aria-label="Location">
                                    <i class="fa fa-search"></i>
                                </div>
                                <div class="room-full-details-content-right-form-input-with-icon">
                                    <input type="text" class="form-control rounded-1" placeholder="Arrive Date"
                                        aria-label="Arrive Date">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <div class="room-full-details-content-right-form-input-with-icon">
                                    <input type="text" class="form-control rounded-1" placeholder="Depart Date"
                                        aria-label="Depart Date">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <div class="room-full-details-content-right-form-input-with-icon">
                                    <input type="text" class="form-control rounded-1" placeholder="Guests"
                                        aria-label="Guests">
                                    <i class="fa fa-chevron-down"></i>
                                </div>
                                <div class="">
                                    <button type="submit"
                                        class="btn w-100 btn-warning text-light fw-semibold rounded-1 py-2">Book
                                        Now
                                        <i class="fa fa-long-arrow-right"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="room-full-details-content-right-middle-part
                        ">
                            <h4>Category </h4>
                            <div class="room-full-details-content-right-middle-part-image-part">
                                <div class="room-details-category-content">
                                    <a href="javascript:void(0)" class="room-details-category">
                                        <img class="img-fluid" src="./assets/images/footer-image-1st.jpg"
                                            alt="room image">
                                        <p>Luxury Room</p>
                                    </a>
                                </div>
                                <div class="room-details-category-content">
                                    <a href="javascript:void(0)" class="room-details-category">
                                        <img class="img-fluid" src="./assets/images/footer-image-1st.jpg"
                                            alt="room image">
                                        <p>Couple Room</p>
                                    </a>
                                </div>
                                <div class="room-details-category-content">
                                    <a href="javascript:void(0)" class="room-details-category">
                                        <img class="img-fluid" src="./assets/images/footer-image-1st.jpg"
                                            alt="room image">
                                        <p>Hotel Views</p>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <div class="room-full-details-content-right-last-part">
                            <img class="img-fluid" src="./assets/images/our-project-1.jpg" alt="Category image">
                            <div class="room-full-details-content-right-last-part-text-content">
                                <h3>
                                    Booking Your Latest Appertment
                                </h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, velit numquam iure
                                    deleniti nihil perspiciatis.
                                </p>
                                <div class="">
                                    <button type="submit" class="btn btn-warning text-light fw-semibold rounded-1 ">Book
                                        Now
                                        <i class="fa fa-long-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- room full details end-->

</main>
<!-- main end -->

@endsection
