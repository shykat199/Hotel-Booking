@extends('admin.admin_layout.dashboard_master_page')
@section('admin')


    <div class="container float-right">



        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('assets')}}/plugins/fontawesome-free/css/all.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('assets')}}//dist/css/adminlte.min.css">

        @if(\Illuminate\Support\Facades\Session::has('success'))
            <div class="alert alert-success">
                {{\Illuminate\Support\Facades\Session::get('success')}}
            </div>

        @endif

        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Blog List Table</h3>
                    </div>
                    <!-- ./card-header -->
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>

                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--                            @php--}}
                            {{--                            $idx=1;--}}
                            {{--                            @endphp--}}
                            @foreach ($allPosts as $item)
                                <tr data-widget="expandable-table" aria-expanded="false">

                                    <td>{{$item->title}}</td>
                                    <td>{{\Illuminate\Support\Str::limit($item->description,10,'...')}}</td>
                                    <td>
                                        <img src="{{asset('storage/blog-images/'.$item->image)}}" alt="" style="height: 100px; width:75px"/>
                                    </td>
                                    <td>{{\Carbon\Carbon::parse($item->created_at)->format('d/m/y H:i')}}</td>

                                    <td>
                                        <a class="btn btn-danger" href="{{route('admin.blog.delete-id',$item->id)}}">Delete</a>
                                        <a class="btn btn-warning" href="{{route('admin-blog.edit',$item->id)}}">Edit</a>
                                    </td>

                                    {{--                                    <td><a class="btn btn-danger" href="{{route('admin.view.delete',$item->id)}}">Delete</a></td>--}}
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
{{--                        @if ($allPosts->hasPages())--}}
{{--                            {{$allPosts->links()}}--}}
{{--                        @endif--}}
                    </div>
                    <!-- jQuery -->
                    <script src="{{asset('assets')}}/plugins/jquery/jquery.min.js"></script>
                    <!-- Bootstrap 4 -->
                    <script src="{{asset('assets')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                    <!-- AdminLTE App -->
                    <script src="{{asset('assets')}}/dist/js/adminlte.min.js"></script>
                    <!-- AdminLTE for demo purposes -->

                </div>


@endsection



