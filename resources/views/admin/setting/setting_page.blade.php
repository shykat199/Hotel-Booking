@php use Illuminate\Support\Facades\Session; @endphp
@extends('admin.admin_layout.dashboard_master_page')
@section('admin')


    <div class="container float-right">
        <div class="card">



                @if(\Illuminate\Support\Facades\Session::has('success'))
                    <div class="alert alert-success">
                        {{\Illuminate\Support\Facades\Session::get('success')}}
                    </div>
                @endif


                <form action="{{route('setting.store.page')}} " method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Facebook</label>
                            <input name="facebook" type="title" class="form-control" id="facebook" value="{{(isset($settings['facebook']))? $settings['facebook'] : ''}}">
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">About us</label>
                            <input name="aboutus" type="title" class="form-control" id="email" value="{{(isset($settings['aboutus']))? $settings['aboutus'] : ''}}">
                        </div>


                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Youtube</label>
                            <input name="youtube" type="title" class="form-control" id="youtube" value="{{(isset($settings['youtube']))? $settings['youtube'] : ''}}">
                        </div>


                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Twitter</label>
                            <input name="twitter" type="title" class="form-control" id="twitter" value="{{(isset($settings['twitter']))? $settings['twitter'] : ''}}">
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Instagram</label>
                            <input name="instagram" type="title" class="form-control" id="instagram" value="{{(isset($settings['instagram']))? $settings['instagram'] : ''}}">
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">E-mail</label>
                            <input name="email" type="email" class="form-control" id="email" value="{{(isset($settings['email']))? $settings['email'] : ''}}">
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Address</label>
                            <input name="address" type="address" class="form-control" id="address" value="{{(isset($settings['address']))? $settings['address'] : ''}}">
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">Phone</label>
                            <input name="phone" type="phone" class="form-control" id="phone" value="{{(isset($settings['phone']))? $settings['phone'] : ''}}">
                        </div>

{{--                        <div class="input-group mb-3">--}}
{{--                            <label class="input-group-text" for="inputGroupSelect01">Logo</label>--}}
{{--                            <input name="logo" type="logo" class="form-control" id="logo" value="{{(isset($settings['logo']))? $settings['logo'] : ''}}">--}}
{{--                        </div>--}}

                        <div class="mb-3">
                            <label for="example-image" class="form-label">logo</label>
                            <input type="file" id="example-image" class="form-control" value="{{(isset($settings['logo']))?$settings['logo'] : ''}}" name="logo">
{{--                            <img src="{{asset('storage/logo/1680509766.jpg')}}" style="width: 100px; height: auto" >--}}
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

        </div>

@endsection
