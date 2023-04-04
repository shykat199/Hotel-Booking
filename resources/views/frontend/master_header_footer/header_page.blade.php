<body>
<header class="header-area">
    <nav class="navbar navbar-expand-md">
        <div class="container-fluid py-2">
            <ul class="d-flex align-items-center navbar-contact-details">
                <li>
                        <span>
                            <i class="fa fa-map-marker text-warning pe-1" aria-hidden="true"></i>
                            {{getAddressLink()}}
                        </span>
                </li>
                <li class="ps-4">
                        <span>
                            <i class="fa fa-phone text-warning pe-1" aria-hidden="true"></i>
                            {{getPhoneLink()}}
                        </span>
                </li>

            </ul>
            <div class="d-flex align-items-center nav-upper-right-sight-link">
                <a href="{{route('frontend.about.us.showPage')}}" class="">About us</a>
                <a href="{{route('frontend.our-service.page')}}" class="ps-3">Services</a>
{{--                @foreach(ourService() as $name)--}}
{{--                    <li><a class="dropdown-item" href="">{{$name->title}}</a></li>--}}
{{--                @endforeach--}}
{{--                <a href="javascript:void(0)" class="ps-3">Privacy</a>--}}
                <ul class="ms-5 d-flex nav-upper-social-icon align-items-center">

                        <li class="pe-2">
                            <a href="{{getFacebookLink()}}">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="px-2">
                            <a href="{{getTwitterLink()}}">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="px-2">
                            <a href="{{getInstagramLink()}}">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                        <li class="px-2">
                            <a href="{{getEmailLink()}}">
                                <i class="fa fa-google"></i>
                            </a>
                        </li>
                </ul>
            </div>
            <!-- </div> -->
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg hotel-booking-nav2 d-flex justify-content-between">
        <div class="container-fluid">
            <a class="navbar-brand hotel-booking-logo " href="#">
                <img class="img-fluid rounded-pill" src="{{asset('frontend')}}/images/hotel-management-logo.png"
                     alt="hotel logo">
            </a>
            <button class="navbar-toggler nav-collaps-icon" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse hotel-booking-nav2-text-design" id="navbarSupportedContent">
                <ul class="d-flex pe-5 ps-5">
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"--}}
{{--                           aria-expanded="false">--}}
{{--                            Enlish--}}
{{--                        </a>--}}
{{--                        <ul class="dropdown-menu">--}}
{{--                            <li><a class="dropdown-item" href="#">Action</a></li>--}}
{{--                            <li><a class="dropdown-item" href="#">Another action</a></li>--}}
{{--                            <li>--}}
{{--                                <hr class="dropdown-divider">--}}
{{--                            </li>--}}
{{--                            <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                </ul>
                <ul class="navbar-nav mx-auto  mb-2 mb-lg-0">
                    <li class="nav-item dropdown pe-1">
                        <a class="nav-link active" href="{{route('frontend.index.page')}}" >
                            HOME
                        </a>
{{--                        <ul class="dropdown-menu">--}}
{{--                            <li><a class="dropdown-item" href="{{route('')}}">Action</a></li>--}}
{{--                            <li><a class="dropdown-item" href="#">Another action</a></li>--}}
{{--                           --}}
{{--                        </ul>--}}
                    </li>
                    <li class="nav-item dropdown pe-1">

                        <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            ROOMS
                        </a>

                            <ul class="dropdown-menu">
                                @foreach(roomCategories() as $name)
                                    <li><a class="dropdown-item" href="{{ route('roomList', $name->id) }}">{{ $name->name }}</a></li>
                                @endforeach
                            </ul>



                    </li>
                    <li class="nav-item dropdown pe-1">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            SERVICES
                        </a>
                        <ul class="dropdown-menu">
                            @foreach(ourService() as $name)
                                <li><a class="dropdown-item" href="">{{$name->title}}</a></li>
                            @endforeach

{{--                            <li><a class="dropdown-item" href="#">Another action</a></li>--}}
{{--                            <li>--}}
{{--                                <hr class="dropdown-divider">--}}
{{--                            </li>--}}
{{--                            <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
                        </ul>
                    </li>
                    <li class="nav-item dropdown pe-1">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                           aria-expanded="false">
                            Blog
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-dark" href="{{route('blog.list')}}">Blog List</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>
                    <li lass="nav-item dropdown pe-1">
                        <a class="nav-link active" href="{{route('frontend.room.grid.page')}}" >
                            Room Grid
                        </a>
                    </li>
                    <li lass="nav-item dropdown pe-1">
{{--                        <a class="nav-link active" href="{{route('user.dashboard.page')}}" >--}}
{{--                            User Dashboard--}}
{{--                        </a>--}}
                    </li>



{{--                    <li class="nav-item dropdown pe-1">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"--}}
{{--                           aria-expanded="false">--}}
{{--                            GALLERY--}}
{{--                        </a>--}}
{{--                        <ul class="dropdown-menu">--}}
{{--                            <li><a class="dropdown-item" href="#">Action</a></li>--}}
{{--                            <li><a class="dropdown-item" href="#">Another action</a></li>--}}
{{--                            <li>--}}
{{--                                <hr class="dropdown-divider">--}}
{{--                            </li>--}}
{{--                            <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item pe-1">--}}
{{--                        <a class="nav-link" href="#">CONTACT</a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown pe-1">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"--}}
{{--                           aria-expanded="false">--}}
{{--                            PAGES--}}
{{--                        </a>--}}
{{--                        <ul class="dropdown-menu">--}}
{{--                            <li><a class="dropdown-item" href="#">Action</a></li>--}}
{{--                            <li><a class="dropdown-item" href="#">Another action</a></li>--}}
{{--                            <li>--}}
{{--                                <hr class="dropdown-divider">--}}
{{--                            </li>--}}
{{--                            <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item pe-1">--}}
{{--                        <a class="nav-link" href="#"><i class="fa fa-search"></i></a>--}}
{{--                    </li>--}}
                </ul>
                <ul class="d-flex get-a-quote-btn">


                    @if(\Illuminate\Support\Facades\Auth::user())
                        @if(\Illuminate\Support\Facades\Auth::user()->roll=='1')
                            <a href="{{route('admin.dashboard.file')}}" type="button" class="btn btn-warning text-light rounded-0 rol py-4 px-3">Go to Dashboard
                                <span class="ps-1"><i class="fa fa-long-arrow-right"></i>
                            </span>
                            </a>
                        @else
                            <a href="{{route('user.dashboard.page')}}" type="button" class="btn btn-warning text-light rounded-0 rol py-4 px-3">Go to Dashboard
                                <span class="ps-1"><i class="fa fa-long-arrow-right"></i>
                            </span>
                            </a>
                        @endif
                    @else
                        <a href="{{route('main.login.page')}}" type="button" class="btn btn-warning text-light rounded-0 rol py-4 px-3">Sign In
                            <span class="ps-1"><i class="fa fa-long-arrow-right"></i>
                            </span>
                        </a>
                    @endif
                </ul>
            </div>

        </div>

    </nav>
</header>






