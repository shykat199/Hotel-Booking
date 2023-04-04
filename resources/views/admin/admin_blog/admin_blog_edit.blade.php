@extends('admin.admin_layout.dashboard_master_page')
@section('admin')
    <div class="container float-right">
        <div class="card">
            <div class="card-header">
                Featured
            </div>
            <div class="card-body">

                @if(\Illuminate\Support\Facades\Session::has('success'))
                    <div class="alert alert-success">
                        {{\Illuminate\Support\Facades\Session::get('success')}}
                    </div>
                @endif

                <form action="{{route('admin-blog.update',$edtPost->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputTitled">Post title</label>
                        <input type="text" value="{{$edtPost->title}}" class="form-control" id="title" aria-describedby="TitleHelp" name="title" placeholder="Enter post title">
                    </div>
                    @error('title')
                    <span class="text-danger">{{$message}}</span>
                    @enderror


                    <div class="form-group">
                        <label for="exampleInputDescription">
                            post description
                        </label>
                        <textarea name="description"class="form-control" id="description" cols="30" rows="10">{{$edtPost->description}}</textarea>
                    </div>
                    @error('description')
                    <span class="text-danger">{{$message}}</span>
                    @enderror


                    <div class="form-group">
                        <label for="exampleInputImage">Post image</label>
                        <input name="image" type="file" class="form-control" id="exampleInputImage" aria-describedby="ImageHelp">
                        <img class="mt-2" src="{{asset('storage/blog-images/'.$edtPost->image)}}" alt="" style="height: 200px;width: auto">
                    </div>


                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
        </div>

    </div>
@endsection
