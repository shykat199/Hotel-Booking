@extends('admin.admin_layout.dashboard_master_page')
@section('admin')


    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('success')}}
        </div>
    @endif

    <form action="{{route('admin-company-mission.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$editCompanyList->id}}">
        <div class="mb-3">
            <label for="example-name" class="form-label">Title</label>
            <input type="text" id="example-name" class="form-control" name="title" value="{{$editCompanyList->title}}" placeholder="title">
        </div>
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-designation" class="form-label">Description</label>
            <input type="text" id="example-description" value="{{$editCompanyList->description}}" class="form-control" name="description" placeholder="description">
        </div>
        @error('description')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-image" class="form-label">Service Images</label>
            <input type="file" id="example-image" class="form-control" value="{{$editCompanyList->image}}" name="image" placeholder="image">
            <img src="{{asset('storage/service-images/'.$editCompanyList->image)}}" style="width: 100px; height: auto" >
        </div>
        @error('image')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
