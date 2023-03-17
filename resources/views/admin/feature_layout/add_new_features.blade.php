@extends('admin.admin_layout.dashboard_master_page')
@section('admin')

    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('success')}}
        </div>
    @endif

    <form action="{{route('feature.add.page')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="simpleinput" class="form-label">Name</label>
            <input type="text"  class="form-control" id="name" aria-describedby="NameHelp" name="name" >
        </div>
        @error('name')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <button type="submit" class="btn btn-primary">Save</button>
    </form>

@endsection

