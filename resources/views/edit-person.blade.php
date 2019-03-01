@extends('layouts.layout')
@section('title','Update Persons')
@section('content')

    <div class="page-content fade-in-up">
        <div class="ibox">
            <form action="/edit-person/{{$person->id}}" method="post">
                @csrf
                @method('PUT')
                <div class="ibox-head">
                    <div class="ibox-title">Update Persons</div>
                </div>
                <div class="ibox-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label>Full Name</label>
                                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" name="name" value="{{$person->name}}">
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group mb-4">
                                <label>Phone number</label>
                                <div class="input-group">

                                    <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" type="text" name="phone" value="{{$person->phone}}">
                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label>Date of Birth</label>
                                <input class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" type="date" name="dob"value="{{$person->dob}}">
                                @if ($errors->has('dob'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-4">
                                <label>CNIC Number</label>
                                <div class="input-group-icon input-group-icon-left">
                                    <span class="input-icon input-icon-left"><i class="ti-lock"></i></span>
                                    <input class="form-control{{ $errors->has('cnic') ? ' is-invalid' : '' }}" type="text" name="cnic" value="{{$person->cnic}}">
                                    @if ($errors->has('cnic'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('cnic') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label>Location: City</label>
                                <div class="input-group-icon input-group-icon-left">
                                    <span class="input-icon input-icon-left"><i class="ti-location-pin font-16"></i></span>
                                    <input class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" type="text" name="city" value="{{$person->city}}">
                                    @if($errors->has('city'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label>Institute</label>
                                <div class="input-group-icon input-group-icon-left">
                                    <span class="input-icon input-icon-left"><i class="ti-home font-16"></i></span>
                                    <input class="form-control{{ $errors->has('institute') ? ' is-invalid' : '' }}" type="text" name="institute" value="{{$person->institute}}">
                                    @if($errors->has('institute'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('institute') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group mb-0">
                        <label>Room</label>
                        <div class="btn-group bootstrap-select form-control">
                            <select class="selectpicker form-control" name="room_id" tabindex="-98">
                                <option value="{{$person->room->id}}">{{$person->room->name}} ( {{$person->room->states}}; A\C: {{$person->room->hasac}})</option>
                                @foreach($roomlists=App\Room::all() as $roomlist)
                                    <option value="{{$roomlist->id}}">{{$roomlist->name}} ( {{$roomlist->states}}; A\C: {{$roomlist->hasac}})</option>
                                @endforeach
                            </select></div>

                    </div>


                </div>
                <div class="ibox-footer">
                    <button class="btn btn-primary mr-2" type="submit">Submit</button>
                    <button class="btn btn-outline-secondary" type="reset">Cancel</button>
                </div>
            </form>
        </div>

    </div>

@stop