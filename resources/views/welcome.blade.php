@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Laravel Skill Test's Landing Page.
                </div>
            </div>
            @include('auth.common-login')
        </div>
    </div>
</div>
@endsection
