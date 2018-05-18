@extends('layouts.index')

@section('content')
    {!! Form::open(['action' => 'StudentController@store', 'method' => 'POST']) !!}
        <div class="form-group row">
            {{Form::label('name', 'Name', ['class' => 'col-sm-2 col-form-label'])}}
            <div class="col-sm-10">
                {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
            </div>
        </div>
        <div class="form-group row">
            {{Form::label('rollNumber', 'RollNumber', ['class' => 'col-sm-2 col-form-label'])}}
            <div class="col-sm-10">
                {{Form::text('rollNumber', '', ['class' => 'form-control', 'placeholder' => 'RollNumber'])}}
            </div>
        </div>
        <div class="form-group row">
            {{Form::label('birthday', 'Birthday', ['class' => 'col-sm-2 col-form-label'])}}
            <div class="col-sm-10">
                {{Form::date('birthday', '', ['class' => 'form-control'])}}
            </div>
        </div>
        <div class="form-group row">
            {{Form::label('phone', 'Phone', ['class' => 'col-sm-2 col-form-label'])}}
            <div class="col-sm-10">
                {{Form::text('phone', '', ['class' => 'form-control', 'placeholder' => 'Phone'])}}
            </div>
        </div>
        <div class="form-group row">
            {{Form::label('email', 'Email', ['class' => 'col-sm-2 col-form-label'])}}
            <div class="col-sm-10">
                {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
            </div>
        </div>
        <div class="form-group row">
            {{Form::label('address', 'Address', ['class' => 'col-sm-2 col-form-label'])}}
            <div class="col-sm-10">
                {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Address'])}}
            </div>
        </div>
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
            <div class="col-sm-10">
                {{Form::select('gender', [ '1' => 'Male', '0' => 'Female', '2' => 'Other'], null, ['class' => 'form-control'])}}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            </div>
        </div>
    {!! Form::close() !!}
    {{--<form method="post">--}}
        {{--<div class="form-group row">--}}
            {{--<label for="name" class="col-sm-2 col-form-label">Name</label>--}}
            {{--<div class="col-sm-10">--}}
                {{--<input type="text" class="form-control" id="name" placeholder="Name" name="name">--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="form-group row">--}}
            {{--<label for="rollNumber" class="col-sm-2 col-form-label">RollNumber</label>--}}
            {{--<div class="col-sm-10">--}}
                {{--<input type="text" class="form-control" id="rollNumber" placeholder="RollNumber" name="rollNumber">--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="form-group row">--}}
            {{--<label for="birthday" class="col-sm-2 col-form-label">Birthday</label>--}}
            {{--<div class="col-sm-10">--}}
                {{--<input type="date" class="form-control" id="birthday" name="birthday">--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="form-group row">--}}
            {{--<label for="phone" class="col-sm-2 col-form-label">Phone</label>--}}
            {{--<div class="col-sm-10">--}}
                {{--<input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="form-group row">--}}
            {{--<label for="email" class="col-sm-2 col-form-label">Email</label>--}}
            {{--<div class="col-sm-10">--}}
                {{--<input type="email" class="form-control" id="email" placeholder="Email" name="email">--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="form-group row">--}}
            {{--<label for="address" class="col-sm-2 col-form-label">Address</label>--}}
            {{--<div class="col-sm-10">--}}
                {{--<input type="text" class="form-control" id="address" placeholder="Address" name="address">--}}
            {{--</div>--}}
        {{--</div>--}}
            {{--<div class="row">--}}
                {{--<legend class="col-form-label col-sm-2 pt-0">Gender</legend>--}}
                {{--<div class="col-sm-10">--}}
                    {{--<div class="form-check">--}}
                        {{--<input class="form-check-input" type="radio" name="gender" id="male" value="male" checked="">--}}
                        {{--<label class="form-check-label" for="male">--}}
                            {{--Male--}}
                        {{--</label>--}}
                    {{--</div>--}}
                    {{--<div class="form-check">--}}
                        {{--<input class="form-check-input" type="radio" name="female" id="female" value="female">--}}
                        {{--<label class="form-check-label" for="female">--}}
                            {{--Female--}}
                        {{--</label>--}}
                    {{--</div>--}}
                    {{--<div class="form-check">--}}
                        {{--<input class="form-check-input" type="radio" name="other" id="other" value="other">--}}
                        {{--<label class="form-check-label" for="other">--}}
                            {{--Other--}}
                        {{--</label>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--<div class="form-group row">--}}
            {{--<div class="col-sm-10">--}}
                {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</form>--}}
@stop
