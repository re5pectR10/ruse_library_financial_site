@extends('layouts.master')
@section('user_auth')
<div class="row">

    <div class="col-md-offset-6 col-md-3">

        <a id="btn-login" href="#" class="btn btn-success">Влез</a>
        {{ Form::open(array('url' => 'login')); }}

    <div style="margin-bottom: 25px" class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        {{ Form::text('username', Input::old('username'),  array('placeholder'=>'Username','class'=>'form-control')); }}<p>{{ $errors->login->first('username'); }}</p>
    </div>

    <div style="margin-bottom: 25px" class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        {{ Form::password('password',  array('placeholder'=>'Password','class'=>'form-control')); }}<p>{{ $errors->login->first('password'); }}</p>
    </div>

        {{ Form::submit('Log In'); }}
        {{ Form::close(); }}

    </div>

    <div class="col-md-3">
        <a id="btn-signin" href="#" class="btn btn-primary">Регистрирай се</a>
        {{ Form::open(array('url' => 'signin')); }}

    <div style="margin-bottom: 25px" class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        {{ Form::text('username', Input::old('username'),  array('placeholder'=>'Username','class'=>'form-control')); }}<p>{{ $errors->signin->first('username'); }}</p>
    </div>

    <div style="margin-bottom: 25px" class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        {{ Form::email('email', Input::old('email'),  array('placeholder'=>'e-mail','class'=>'form-control')); }}<p>{{ $errors->signin->first('email'); }}</p>
    </div>

    <div style="margin-bottom: 25px" class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        {{ Form::password('password',  array('placeholder'=>'Password','class'=>'form-control')); }}<p>{{ $errors->signin->first('password'); }}</p>
    </div>

        {{ Form::submit('Sign In'); }}
        {{ Form::close(); }}
    </div>
</div>
@stop