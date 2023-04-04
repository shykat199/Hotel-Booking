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
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($company_mission_list as $list)
            <tr>
                <td class="table-user">
                    {{$list->title}}
                </td>
                <td>{{$list->description}}</td>
                <td><img src="{{asset('storage/company_mission-images/'.$list->image)}}" alt=" " style="height: 100px; width:90px"  /></td>

                <td class="table-action text-center">
                    <a href="{{route('admin-company-mission.edit',$list->id)}}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                    <a href="{{route('admin-company-mission.destroy',$list->id)}}" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>


@endsection
