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
            <th>Room-Category-Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Beds</th>
            <th>Baths</th>
            <th>Room-Size</th>
            <th>Images</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($roomList as $list)
            <tr>
                <td class="table-user">
                    {{$list->room_category_id}}
                </td>
                <td>{{$list->title}}</td>
                <td>{{$list->description}}</td>
                <td>{{$list->beds}}</td>
                <td>{{$list->baths}}</td>
                <td>{{$list->room_size}}</td>
                <td><img src="{{asset('storage/room-images/'.$list->image)}}" alt=" " style="height: 100px; width:90px"  /></td>
                <td class="table-action text-center">
                    <a href="{{route('edit.room.list',$list->id)}}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                    <a href="{{route('delete.list.room',$list->id)}}" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>


@endsection
