@extends('admin.admin_layout.dashboard_master_page')
@section('admin')
    <form action="{{route('edit.store.new')}}" method="post">
        @csrf
        <div class="mb-3">
            <input type="hidden" value="{{ $edtPost->id }}" name="id">
            <label for="simpleinput" class="form-label">Name</label>
            <input type="text" value="{{$edtPost->name}}" class="form-control" id="name" aria-describedby="NameHelp" name="name" >
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection



