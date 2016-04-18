@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                  <p>Laravel Skill Test's Landing Page.</p>
                  @if (Auth::check())
                      <h2>Hi, {{ Auth::user()->name }}!</h2>
                      <p><a href="{{ url('/logout') }}" class="btn btn-default"><i class="fa fa-btn fa-sign-out"></i>Logout</a></p>
                  @endif
                </div>
            </div>
            @if (Auth::guest())
              @include('auth.common-login')
            @endif
        </div>
    </div>
</div>
@endsection
