@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <p>Hi, {{ Auth::user()->name }}!</p>
                    <p><a href="{{ url('/logout') }}" class="btn btn-default"><i class="fa fa-btn fa-sign-out"></i>Logout</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
