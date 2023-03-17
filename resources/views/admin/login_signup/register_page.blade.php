@extends('admin.login_signup.master_page')
@section('connection')

    <div class="text-center w-75 m-auto">
        <h4 class="text-dark-50 text-center mt-0 fw-bold">Free Sign Up</h4>
        <p class="text-muted mb-4">Don't have an account? Create your account, it takes less
            than a minute </p>
    </div>

    @if(\Illuminate\Support\Facades\Session::has('registerFail'))
        <div class="alert alert-danger">
            {{\Illuminate\Support\Facades\Session::get('registerFail')}}
        </div>
    @endif

    <form action="{{route('admin.store.register')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="fullname" class="form-label">Full Name</label>
            <input class="form-control" type="text" id="fullname" name="name" placeholder="Enter your name"
            >
        </div>
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror


        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input class="form-control" type="text" id="phone" name="phone" placeholder="Enter your phone no:"
            >
        </div>
        @error('phone')
        <span class="text-danger">{{$message}}</span>
        @enderror


        <div class="mb-3">
            <label for="emailaddress" class="form-label">Email address</label>
            <input class="form-control" type="email" id="emailaddress" name="email"
                   placeholder="Enter your email">
        </div>
        @error('email')
        <span class="text-danger">{{$message}}</span>
        @enderror


        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <div class="input-group input-group-merge">
                <input type="password" id="password" class="form-control" name="password"
                       placeholder="Enter your password">
                <div class="input-group-text" data-password="false">
                    <span class="password-eye"></span>
                </div>
            </div>
        </div>
        @error('password')
        <span class="text-danger">{{$message}}</span>
        @enderror


        <div class="mb-3">
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="checkbox-signup">
                <label class="form-check-label" for="checkbox-signup">I accept <a href="#"
                                                                                  class="text-muted">Terms
                        and Conditions</a></label>
            </div>
        </div>

        <div class="mb-3 text-center">
            <button class="btn btn-primary" type="submit"> Sign Up</button>
        </div>

    </form>
    </div> <!-- end card-body -->
    </div>
    <!-- end card -->

    <div class="row mt-3">
        <div class="col-12 text-center">
            <p class="text-muted">Already have account? <a href="{{route('main.login.page')}}"
                                                           class="text-muted ms-1"><b>Log In</b></a></p>
        </div> <!-- end col-->
    </div>
    <!-- end row -->

    </div> <!-- end col -->
    </div>
    <!-- end row -->
    </div>
    <!-- end container -->
    </div>
    <!-- end page -->
@endsection



