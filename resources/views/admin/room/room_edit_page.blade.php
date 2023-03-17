@extends('admin.admin_layout.dashboard_master_page')
@section('admin')

    @if(\Illuminate\Support\Facades\Session::has('success'))
        <div class="alert alert-success">
            {{\Illuminate\Support\Facades\Session::get('success')}}
        </div>
    @endif

    <form action="{{route('room.update.list.db')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $edtRoom->id }}">

        <div class="mb-3">
            <label for="example-name" class="form-label">Room Category</label>
            {{--            <input type="text" id="example-name" class="form-control" name="room_category_id" place>--}}
{{--            {{dd($edtRoom->room_category_id)}}--}}
            <select class="form-select mb-3"  name="room_category_id">
                <option value="" selected>Select a category</option>
                @foreach($categories as $list)
                    <option value="{{$list->id}}" {{$edtRoom->room_category_id===$list->id ?'selected':''}}>{{$list->name}}</option>
                @endforeach
            </select>
        </div>
        @error('room_category_id')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-name" class="form-label">Title</label>
            <input type="text" id="example-name" class="form-control" name="title" value="{{ $edtRoom->title }}" placeholder="Enter title">
        </div>
        @error('title')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-designation" class="form-label">Description</label>
            <textarea id="example-designation" class="form-control" name="description" rows="6" placeholder="Enter description">{{ $edtRoom->description }}</textarea>
        </div>
        @error('description')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-designation" class="form-label">Bed</label>
            <input type="text" id="example-designation" class="form-control" value="{{ $edtRoom->beds }}" name="beds" placeholder="beds" >
        </div>
        @error('beds')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-designation" class="form-label">Baths</label>
            <input type="text" id="example-designation" class="form-control" value="{{ $edtRoom->baths }}" name="baths" placeholder="baths">
        </div>
        @error('baths')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-designation" class="form-label">Room size</label>
            <input type="text" id="example-designation" class="form-control" value="{{ $edtRoom->room_size }}" name="room_size" placeholder="room_size">
        </div>
        @error('room_size')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-image" class="form-label">Images</label>
            <input type="file" id="image" class="form-control" value="{{ $edtRoom->image }}" name="image" placeholder="image">
            <img class="mt-2" src="{{asset('storage/room-images/'.$edtRoom->image) }}" alt="" style="height: 200px;width: auto">
        </div>
        @error('image')
        <span class="text-danger">{{$message}}</span>
        @enderror

{{--//''''''''''''''''--}}
        <div class="mb-3">
            <label for="example-name" class="form-label">Nightly</label>
            <input type="text" id="example-name" class="form-control" name="nightly" placeholder="nightly" value="{{$edtRoom->price->nightly}}">
        </div>
        @error('nightly')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-name" class="form-label">Weekends(Sat_sun)</label>
            <input type="text" id="example-name" class="form-control" value="{{$edtRoom->price->weekend}}" name="weekend" placeholder="weekend">
        </div>
        @error('weekend')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-designation" class="form-label">Weekly(7d+)</label>
            <input id="example-designation" class="form-control" value="{{$edtRoom->price->weekly}}"  name="weekly" placeholder="weekly">
        </div>
        @error('weekly')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-designation" class="form-label">Monthly(30d+)</label>
            <input type="text" id="example-designation" class="form-control" value="{{$edtRoom->price->monthly}}" name="monthly" placeholder="monthly">
        </div>
        @error('monthly')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-designation" class="form-label">Security Deposit</label>
            <input type="text" id="example-designation" class="form-control" value="{{$edtRoom->price->security_deposit}}" name="security_deposit" placeholder="security_deposit">
        </div>
        @error('security_deposit')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-designation" class="form-label">Additional Guests(Allow/Not)</label>
            {{--            <input type="text" id="example-designation" class="form-control" name="additional_guest_allow" placeholder="additional_guest_allow">--}}
{{--            <select class="form-select mb-3" value="{{$edtRoom->price->weekend}}"  name="additional_guest_allow">--}}
            <select class="form-select mb-3"   name="additional_guest_allow">

                <option value="0" {{$edtRoom->price->additional_guest_allow===0?'selected':''}}>No</option>
                <option value="1" {{$edtRoom->price->additional_guest_allow===1?'selected':''}}>Yes</option>
            </select>
        </div>
        @error('additional_guest_allow')
        <span class="text-danger">{{$message}}</span>
        @enderror




        <div class="mb-3">
            <label for="example-designation" class="form-label">Additional Guests Cost</label>
            <input type="text" id="example-designation" class="form-control" value="{{$edtRoom->price->additional_guest_cost}}" name="additional_guest_cost" placeholder="additional_guest_cost">
        </div>
        @error('additional_guest_cost')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-designation" class="form-label">Cleaning Fee</label>
            <input type="text" id="example-designation" class="form-control" value="{{$edtRoom->price->cleaning_fee}}" name="cleaning_fee" placeholder="cleaning_fee">
        </div>
        @error('cleaning_fee')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-designation" class="form-label">City fee</label>
            <input type="text" id="example-designation" class="form-control" value="{{$edtRoom->price->city_fee}}" name="city_fee" placeholder="city_fee">
        </div>
        @error('city_fee')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-designation" class="form-label">Minimum Number of days:1</label>
            <input type="text" id="example-designation" class="form-control" value="{{$edtRoom->price->minimum_number_of_days}}" name="minimum_number_of_days" placeholder="minimum_number_of_days">
        </div>
        @error('minimum_number_of_days')
        <span class="text-danger">{{$message}}</span>
        @enderror

        <div class="mb-3">
            <label for="example-designation" class="form-label">Maximum number of days:60 </label>
            <input type="text" id="example-designation" class="form-control" value="{{$edtRoom->price->maximum_number_of_days}}" name="maximum_number_of_days" placeholder="maximum_number_of_days">
        </div>
        @error('maximum_number_of_days')
        <span class="text-danger">{{$message}}</span>
        @enderror




        <label>
            Select Features
        </label>
        <select class="form-control1" multiple="multiple" name="features[]">

            @foreach($features as $item)
                <option value="{{$item->id}}" {{ in_array($item->id, $room_features) ? "selected" : "" }}>{{$item->name}}</option>
            @endforeach

        </select>


        <label>
            Select Facilities
        </label>
        <select class="form-control1" multiple="multiple" name="facilities[]">
                @foreach($facilities as $item)
                    <option value="{{$item->id}}" {{ in_array($item->id, $room_facilities) ? "selected" : ""}}>{{$item->name}}</option>
                @endforeach
        </select>





        <button type="submit" class="btn btn-primary">Save</button>
    </form>

@endsection

