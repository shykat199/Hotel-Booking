@extends('admin.admin_layout.dashboard_master_page')
@section('admin')
    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('success')}}
        </div>
    @endif


    <table class="table table-bordered border-primary table-centered mb-0">
        <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Image</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($feedBackList as $list)
            <tr>
                <td class="table-user">
                    {{$list->name}}
                </td>
                <td>{{$list->description}}</td>
                <td><img src="{{asset('storage/feed_back-images/'.$list->image)}}" alt=" " style="height: 100px; width:90px"  /></td>

                <td class="table-action text-center">
                    <a href="{{route('admin.feedback.edit',$list->id)}}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                    <a href="{{route('admin-feed-back.destroy',$list->id)}}" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>


@endsection
