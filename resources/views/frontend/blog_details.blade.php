@extends('frontend.master_header_footer.frontend_masterpage')
@section('frontend')

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
                        <h5 class="text-light mb-0">Blog Details</h5>
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
                                {{$blogDetails->title}}
                            </h4>
                            <div class="row room-full-details-content-left-upper-part">
                                <img src="{{asset('storage/blog-images/'.$blogDetails->image)}}" alt="room details image">
                            </div>

                            <div class="row room-full-details-content-left-middle-part">
                                <p>
                                    {{$blogDetails->description}}
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- right side start  -->
                    <div class="col-lg-4 col-md-3 col-12">
                        <div class="room-full-details-content-right">
                            <div class="room-full-details-content-right-upper-part">
                                <h4>Our Rooms</h4>

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
{{--                            <div class="room-full-details-content-right-middle-part">--}}
{{--                                <h4>Category </h4>--}}
{{--                                <div class="room-full-details-content-right-middle-part-image-part">--}}
{{--                                    @foreach($roomCtgries as $item)--}}
{{--                                        <div class="room-details-category-content">--}}
{{--                                            <a href="" class="room-details-category">--}}
{{--                                                <img src="{{asset('storage/room_category-images/'.$item->image)}}" class="card-img-top" alt="...">--}}
{{--                                                <p>{{$item->name}}</p>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- full blog details end-->

</main>
<!-- main end -->

@endsection
