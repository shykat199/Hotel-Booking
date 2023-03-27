@php use Illuminate\Support\Facades\Session; @endphp
@extends('admin.admin_layout.dashboard_master_page')
@section('admin')


    <div class="container float-right">
        <div class="card">

            <form class="card-body">

                @if(\Illuminate\Support\Facades\Session::has('success'))
                    <div class="alert alert-success">
                        {{\Illuminate\Support\Facades\Session::get('success')}}
                    </div>
                @endif



                <form action=" " method="post" enctype="multipart/form-data">
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
                            <label class="input-group-text" for="inputGroupSelect01">Free phones</label>
                            <input name="freephones" type="title" class="form-control" id="freephones" value="{{(isset($settings['freephones']))? $settings['freephones'] : ''}}">
                        </div>
                        <div class="input-group mb-3">
                            <label class="input-group-text" for="inputGroupSelect01">E-mail</label>
                            <input name="email" type="email" class="form-control" id="email" value="{{(isset($settings['email']))? $settings['email'] : ''}}">
                        </div>

                    </div>
                </form>

              </form>

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    <div>

@endsection
