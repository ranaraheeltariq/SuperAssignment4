@extends('layouts.layout')
@section('title','Rooms')
@section('content')

            <div class="page-content fade-in-up">
                <div class="ibox">
                    <form action="/room" method="post">
                        @csrf
                        <div class="ibox-head">
                            <div class="ibox-title">Add Hotel Room</div>
                        </div>
                        <div class="ibox-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label>Room Name:</label>
                                        <input class="form-control" name="name" type="text" placeholder="Enter Room Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-4">
                                        <label>Room Capacity</label>
                                        <input class="form-control" name="capacity" type="number" placeholder="Enter Room Capacity">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                            <div class="form-group mb-0">
                                <label>Room States</label>
                                <div class="mt-1">
                                    <label class="radio radio-inline radio-grey radio-primary">
                                        <input type="radio" name="states" value="Furnished" checked>
                                        <span class="input-span"></span>Furnished</label>
                                    <label class="radio radio-inline radio-grey radio-primary">
                                        <input type="radio" name="states" value="NonFurnished">
                                        <span class="input-span"></span>Non-Furnished</label>
                                </div>

                            </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group mb-0">
                                        <label>Room Has A/C?</label>
                                        <div class="mt-1">
                                            <label class="radio radio-inline radio-grey radio-primary">
                                                <input type="radio" name="hasac" value="yes" checked>
                                                <span class="input-span"></span>Yes</label>
                                            <label class="radio radio-inline radio-grey radio-primary">
                                                <input type="radio" name="hasac" value="no">
                                                <span class="input-span"></span>No</label>
                                        </div>
                                    </div>
                                </div>

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