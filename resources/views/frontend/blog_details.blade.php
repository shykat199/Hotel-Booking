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
                    <h3 class="text-light">Blog Details</h3>
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
        <!-- full blog details start-->
        <section class="room-full-details my-5">
            <div class="container py-5 room-full-details-content">
                <div class="row">
                    <div class="col-lg-8 col-md-9 col-12">
                        <div class="room-full-details-content-left blog-details">
                            <h4>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, corrupti.
                            </h4>
                            <div class="row room-full-details-content-left-upper-part">
                                <img src="{{asset('frontend/images/footer-image-1st.jpg')}}" alt="room details image">
                            </div>
                            <ul class="single-blog-authore d-flex justify-content-between">
                                <li><i class="fa fa-user" aria-hidden="true"></i><span>By John Doe</span></li>
                                <li>Date: 02-02-2022</li>
                            </ul>
                            <div class="row room-full-details-content-left-middle-part">
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci accusamus aperiam,
                                    atque eum sint architecto nihil ullam, nesciunt ipsum suscipit assumenda nisi, eaque
                                    doloremque! Non nobis corporis, perspiciatis esse id consequatur aspernatur deleniti
                                    accusamus, corrupti dolorum cumque ipsa repellat mollitia natus illo dolore laudantium
                                    at perferendis vel atque sapiente sequi. Facere tempore est nemo ad vel iure
                                    perspiciatis voluptate in dolores quaerat aut libero dolor, fugiat mollitia quidem
                                    quibusdam temporibus veniam omnis assumenda deleniti, excepturi modi repudiandae
                                    accusamus repellat. Omnis ullam culpa aspernatur esse assumenda placeat officiis eos sed
                                    ratione, magni, molestias corporis veniam vel recusandae perferendis corrupti illo
                                    excepturi quisquam. Adipisci quasi recusandae quia aut nisi nam doloremque saepe, ipsa
                                    dolores nesciunt soluta at voluptas suscipit esse numquam, facilis nobis cumque earum
                                    ipsum vero eos. Consectetur iure beatae velit, nihil consequuntur similique quis
                                    repellendus quam. Placeat soluta a saepe laboriosam quibusdam voluptate quasi ab beatae
                                    praesentium, quis eligendi natus.
                                </p>
                                <img src="{{asset('frontend/images/our-project-49.jpg')}}" alt="room details image">
                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci accusamus aperiam,
                                    atque eum sint architecto nihil ullam, nesciunt ipsum suscipit assumenda nisi, eaque
                                    doloremque! Non nobis corporis, perspiciatis esse id consequatur aspernatur deleniti
                                    accusamus, corrupti dolorum cumque ipsa repellat mollitia natus illo dolore laudantium
                                    at perferendis vel atque sapiente sequi. Facere tempore est nemo ad vel iure
                                    perspiciatis voluptate in dolores quaerat aut libero dolor, fugiat mollitia quidem
                                    quibusdam temporibus veniam omnis assumenda deleniti, excepturi modi repudiandae
                                    accusamus repellat. Omnis ullam culpa aspernatur esse assumenda placeat officiis eos sed
                                    ratione, magni, molestias corporis veniam vel recusandae perferendis corrupti illo
                                    excepturi quisquam. Adipisci quasi recusandae quia aut nisi nam doloremque saepe, ipsa
                                    dolores nesciunt soluta at voluptas suscipit esse numquam, facilis nobis cumque earum
                                    ipsum vero eos. Consectetur iure beatae velit, nihil consequuntur similique quis
                                    repellendus quam. Placeat soluta a saepe laboriosam quibusdam voluptate quasi ab beatae
                                    praesentium, quis eligendi natus.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- right side start  -->
                    <div class="col-lg-4 col-md-3 col-12">
                        <div class="room-full-details-content-right">
                            <div class="room-full-details-content-right-upper-part">
                                <h4>Our Rooms</h4>

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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- full blog details end-->

</main>
<!-- main end -->

@endsection
