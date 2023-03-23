@extends('admin.admin_layout.dashboard_master_page')
@section('admin')

    <table class="table table-bordered border-primary table-centered mb-0">
        <thead>
        <tr>
            <th>Arrive-Date</th>
            <th>Depart-date</th>
            <th>Guest</th>
            <th>Child</th>
            <th>User_id</th>
            <th>Room_id</th>
            <th>Per_day_cost</th>
            <th>Total_cost</th>
{{--            <th class="text-center">Action</th>--}}
        </tr>
        </thead>
        <tbody>
        @foreach($adminRoomBooking as $list)
            <tr>
                <td class="table-user">
                    {{$list->arrive_date}}
                </td>
                <td>{{$list->depart_date}}</td>
                <td>{{$list->guests}}</td>
                <td>{{$list->child}}</td>
                <td>{{$list->user_id}}</td>
                <td>{{$list->room_id}}</td>
                <td>{{$list->per_day_cost}}</td>
                <td>{{$list->total_cost}}</td>




{{--                <td><img src="{{asset('storage/staff-images/'.$list->image)}}" alt=" " style="height: 100px; width:90px"  /></td>--}}
{{--                <td class="table-action text-center">--}}
{{--                    <a href="{{route('edit.staff.list',$list->id)}}" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>--}}
{{--                    <a href="{{route('staff.delete.list',$list->id)}}" class="action-icon"> <i class="mdi mdi-delete"></i></a>--}}
{{--                </td>--}}
            </tr>
        @endforeach


        </tbody>
    </table>

@endsection