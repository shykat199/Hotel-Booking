@extends('admin.admin_layout.dashboard_master_page')
@section('admin')

    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('success')}}
        </div>
    @endif

    <form action="{{route('admin-slider.store.db')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="example-name" class="form-label">title1</label>
            <input type="text" id="example-name" class="form-control" name="title_1" placeholder="title_1">
        </div>
        @error('title_1')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-designation" class="form-label">title2</label>
            <input type="text" id="example-designation" class="form-control" name="title_2" placeholder="title_2">
        </div>
        @error('title_2')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-designation" class="form-label">title3</label>
            <input type="text" id="example-designation" class="form-control" name="title_3" placeholder="title_3">
        </div>
        @error('title_3')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-image" class="form-label">Image</label>
            <input type="file" id="example-image" class="form-control" name="image" placeholder="image">
        </div>
        @error('image')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
