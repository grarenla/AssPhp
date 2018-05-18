@extends('layouts.index')

@section('content')
    <div class="row">
        <main role="main" class="col-md-12">
            @if(count($listStudent) > 0)
                <div class="chartjs-size-monitor"
                     style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                    <div class="chartjs-size-monitor-expand"
                         style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink"
                         style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                        <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                    </div>
                </div>
                <h2>List Product</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>RollNumber</th>
                            <th>Birthday</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>CreatedAt</th>
                            <th>updatedAt</th>
                            <th>Status</th>
                            <th>Update</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($listStudent as $st)
                            <tr>
                                <td><a href="/student/{{$st -> id}}">{{$st -> id}}</a></td>
                                <td>{{$st -> name}}</td>
                                <td>{{$st -> rollNumber}}</td>
                                <td>{{$st -> birthday}}</td>
                                <td>{{$st -> phone}}</td>
                                <td>{{$st -> email}}</td>
                                <td>{{$st -> address}}</td>
                                <td>{{$st -> gender}}</td>
                                <td>{{$st -> created_at}}</td>
                                <td>{{$st -> updated_at}}</td>
                                <td>{{$st -> status}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p style="font-weight: bold; font-size: 20px">No product</p>
            @endif
        </main>
    </div>
@stop
