@extends('admin.admin_layout.dashboard_master_page')
@section('admin')

    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('success')}}
        </div>
    @endif

    <div class="container-fluid">


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="basic-datatable" class=" table table-centered w-100 dt-responsive nowrap">
                                <thead class="table-light">
                                <tr>

                                    <th class="all">name</th>

                                    <th>Added Date</th>

                                    <th style="width: 85px;">Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($allPosts as $item)
                                    <tr>

                                        <td>
                                            {{$item->name}}
                                        </td>

                                        <td>
                                            {{$item->created_at}}
                                        </td>

                                        <td class="table-action">
                                            {{--                                        --}}
                                            <a href="{{route('edit.get.facilities',$item->id)}}" class="action-icon"> <i
                                                    class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="{{route('delete.facilities.list',$item->id)}}" class="action-icon"> <i
                                                    class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                @endforeach





                                </tbody>
                            </table>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection
