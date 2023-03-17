@extends('admin.admin_layout.dashboard_master_page')
@section('admin')

    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('success')}}
        </div>
    @endif

    <form action="{{route('category.update.lis')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $edtCategory->id }}">
        <div class="mb-3">
            <label for="example-name" class="form-label">Name</label>
            <input type="text" id="example-name" value="{{$edtCategory->name}}" class="form-control" name="name" placeholder="name">
        </div>
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror


        <div class="mb-3">
            <label for="example-image" class="form-label">Category Images</label>
            <input type="file" id="example-image" class="form-control" value="{{$edtCategory->image}}" name="image" placeholder="image">
        </div>
        @error('image')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <button type="submit" class="btn btn-primary">Save</button>
    </form>

@endsection
