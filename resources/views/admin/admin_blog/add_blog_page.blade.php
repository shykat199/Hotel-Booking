@extends('admin.admin_layout.dashboard_master_page')
@section('admin')
    <div class="container float-right">
        <div class="card">
            <div class="card-header">
                Blog Featured
            </div>
            <div class="card-body">

                @if(\Illuminate\Support\Facades\Session::has('success'))
                    <div class="alert alert-success">
                        {{\Illuminate\Support\Facades\Session::get('success')}}
                    </div>
                @endif



                <form action="{{route('admin.blog.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputTitlet">Blog title</label>
                        <input type="text" class="form-control" id="exampleInputTitle" aria-describedby="TitleHelp" name="title" placeholder="Enter post title">
                    </div>
                    @error('title')
                    <span class="text-danger">{{$message}}</span>
                    @enderror


                    <div class="form-group">
                        <label for="exampleInputDescription">
                            Blog description
                        </label>
                        <textarea name="description"class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                    @error('description')
                    <span class="text-danger">{{$message}}</span>
                    @enderror


                    <div class="form-group">
                        <label for="exampleInputImage">Blog image</label>
                        <input name="image" type="file" class="form-control" id="exampleInputImage" aria-describedby="ImageHelp">
                    </div>
                    @error('image')
                    <span class="text-danger">{{$message}}</span>
                    @enderror


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
        </div>

    </div>
@endsection
