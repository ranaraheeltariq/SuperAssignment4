@extends('layouts.layout')
@section('title','Home')
@section('content')
<!-- START PAGE CONTENT-->
<div class="page-content fade-in-up">

        <div class="row mb-4">
            <div class="col-lg-6 col-md-6">
                <div class="card mb-4">
                    <div class="card-body flexbox-b">
                        <div class="easypie mr-4" data-percent="{{App\Person::count()}}" data-bar-color="#18C5A9" data-size="80" data-line-width="8">
                            <span class="easypie-data text-success" style="font-size:28px;"><i class="ti-user"></i></span>
                        </div>
                        <div>
                            <h3 class="font-strong text-success">{{App\Person::count()}}</h3>
                            <div class="text-muted">Total User</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="card mb-4">
                    <div class="card-body flexbox-b">
                        <div class="easypie mr-4" data-percent="{{App\Room::count()}}" data-bar-color="#ff4081" data-size="80" data-line-width="8">
                            <span class="easypie-data text-pink" style="font-size:32px;"><i class="la la-home"></i></span>
                        </div>
                        <div>
                            <h3 class="font-strong text-pink">{{App\Room::count()}}</h3>
                            <div class="text-muted">Total Rooms</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="row">
        <div class="col-xl-12">
            <div class="ibox ibox-fullheight">
                <div class="ibox-head">
                    <div class="ibox-title">Persons</div>
                </div>
                <div class="ibox-body">
                    <ul class="media-list media-list-divider scroller mr-2" data-height="470px">
                        @foreach($persons = App\Person::latest()->limit(5)->get() as $person)
                        <li class="media">
                            <div class="media-body d-flex">
                                <div class="flex-1">
                                    <h5 class="media-heading">
                                        <a href="javascript:;">{{$person->name}}</a>
                                    </h5>
                                    <p class="font-13 text-light mb-1">Phone: {{$person->phone}} ; CNIC: {{$person->cnic}}</p>
                                    <p class="font-13 text-light mb-1">D.O.B: {{$person->dob}} ; Institute: {{$person->institute}}</p>
                                    <div class="d-flex align-items-center font-13">
                                        <a class="mr-2 text-success" href="javascript:;">Room: {{$person->room->name}}</a>
                                        <span class="text-muted">City: {{$person->city}}</span>
                                    </div>
                                </div>
                                <div class="text-right" style="width:100px;">
                                    <a href="edit-person/{{$person->id}}"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                    <a href="person/{{$person->id}}" onclick="event.preventDefault();
                                                     document.getElementById('delete-person').submit();"><i class="ti-close mr-2"></i>Remove</a>
                                    <form id="delete-person" action="person/{{$person->id}}" method="post">
                                        @csrf
                                        @method('DELETE')

                                    </form>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ibox-fullheight">
                <div class="ibox-head">
                    <div class="ibox-title">
                        <span class="btn-icon-only btn-circle bg-primary-50 text-primary mr-3"><i class="ti-wallet"></i></span>Hotel Rooms</div>
                </div>
                <div class="ibox-body">

                    <div class="ibox-fullwidth-block">
                        <table class="table">
                            <thead class="thead-default thead-lg">
                            <tr>
                                <th class="pl-4">Name</th>
                                <th>Capacity</th>
                                <th>States</th>
                                <th class="pr-4">Has A/C</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($rooms=App\Room::latest()->limit(5)->get() as $room)
                            <tr>
                                <td class="pl-4">
                                    <div class="flexbox-b">
                                        <div>
                                            <h6 class="mb-1">{{$room->name}}</h6>
                                            <div>
                                               </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h4 class="font-strong text-light mb-0">{{$room->capacity}}</h4>
                                </td>
                                <td>
                                    <h4 class="font-strong text-primary mb-0">{{$room->states}}</h4>
                                </td>
                                <td class="pr-4">
                                    <h4 class="font-strong text-primary mb-0">{{$room->hasac}}</h4>
                                </td>
                                <td>
                                    <div class="text-left">
                                        <a href="edit-room/{{$room->id}}" class="mr-5"><i class="ti-pencil-alt mr-2"></i>Edit</a>
                                        <a href="room/{{$room->id}}" onclick="event.preventDefault();
                                                     document.getElementById('delete-room').submit();"><i class="ti-close mr-2"></i>Remove</a>
                                        <form id="delete-room" action="room/{{$room->id}}" method="post">
                                            @csrf
                                            @method('DELETE')

                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT-->
@stop
@section('js')
    @parent
    <script src="assets/vendors/chart.js/dist/Chart.min.js"></script>
    <script src="assets/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/js/scripts/dashboard_ecommerce.js"></script>
@stop