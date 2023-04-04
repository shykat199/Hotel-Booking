@extends('admin.admin_layout.dashboard_master_page')
@section('admin')


    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('success')}}
        </div>
    @endif

    <form action="{{route('admin-feed-back.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$feedbackEdit->id}}">
        <div class="mb-3">
            <label for="example-name" class="form-label">Name</label>
            <input type="text" id="example-name" class="form-control" name="name" value="{{$feedbackEdit->name}}" placeholder="name">
        </div>
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-designation" class="form-label">Description</label>
            <input type="text" id="example-description" value="{{$feedbackEdit->description}}" class="form-control" name="description" placeholder="description">
        </div>
        @error('description')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-image" class="form-label">Feedback Images</label>
            <input type="file" id="example-image" class="form-control" value="{{$feedbackEdit->image}}" name="image" placeholder="image">
            <img src="{{asset('storage/feed_back-images/'.$feedbackEdit->image)}}" style="width: 100px; height: auto" >
        </div>
        @error('image')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
