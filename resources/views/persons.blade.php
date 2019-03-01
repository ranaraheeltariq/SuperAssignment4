@extends('layouts.layout')
@section('title','View All Persons')
@section('cs')
    @parent
    <link href="assets/vendors/dataTables/datatables.min.css" rel="stylesheet" />
@stop
@section('content')

    @if(session('success'))
        <div class="alert alert-primary alert-dismissable fade show has-icon"><i class="la la-check alert-icon"></i>
            <button class="close" data-dismiss="alert" aria-label="Close"></button><strong>Well done!</strong><br>{{session('success')}}</div>
    @endif
    <div class="page-content fade-in-up">
    <div class="ibox">
        <div class="ibox-body">
            <h5 class="font-strong mb-4">View All Persons</h5>
            <div class="flexbox mb-4">
                <div class="input-group-icon input-group-icon-left mr-3">
                    <span class="input-icon input-icon-right font-16"><i class="ti-search"></i></span>
                    <input class="form-control form-control-rounded form-control-solid" id="key-search" type="text" placeholder="Search ...">
                </div>
            </div>
            <div class="table-responsive row">
                <table class="table table-bordered table-hover" id="datatable">
                    <thead class="thead-default thead-lg">
                    <tr>
                        <th>#</th>
                        <th>Room Name</th>
                        <th>Person Name</th>
                        <th>Date of Birth</th>
                        <th>phone</th>
                        <th>C.N.I.C</th>
                        <th>City</th>
                        <th>Institute</th>
                        <th>Rent</th>
                        <th class="no-sort"></th>
                        <th class="no-sort"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($persons as $person)
                    <tr>
                        <td>{{$person->id}}</td>
                        <td>{{$person->room->name}}</td>
                        <td>{{$person->name}}</td>
                        <td>{{$person->dob}}</td>
                        <td>{{$person->phone}}</td>
                        <td>{{$person->cnic}}</td>
                        <td>{{$person->city}}</td>
                        <td>{{$person->institute}}</td>
                        <td>Rs.{{$person->rent}}</td>
                        <td>
                            <a class="text-muted font-16" href="/edit-person/{{$person->id}}"><i class="ti-pencil"></i></a>
                        </td>
                        <td>
                            <a class="text-muted font-16" href="person/{{$person->id}}" onclick="event.preventDefault();
                                                     document.getElementById('delete-room').submit();"><i class="ti-trash"></i></a>
                            <form id="delete-room" action="person/{{$person->id}}" method="post">
                                @csrf
                                @method('DELETE')

                            </form>
                        </td>
                    </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
    @parent
    <script>
        $(function() {
            $('#datatable').DataTable({
                pageLength: 10,
                fixedHeader: true,
                responsive: true,
                "sDom": 'rtip',
                columnDefs: [{
                    targets: 'no-sort',
                    orderable: false
                }]
            });

            var table = $('#datatable').DataTable();
            $('#key-search').on('keyup', function() {
                table.search(this.value).draw();
            });
        });
    </script>
    @endsection