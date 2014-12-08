@extends('layouts.master')
@section('user_auth')
<div class="row">
    <div class="col-md-offset-10 col-md-1">
        <p>Влез</p>
        {{ Form::open(array('url' => 'login')); }}
        {{ Form::text('username', Input::old('username'),  array('placeholder'=>'Username')); }}<p>{{ $errors->login->first('username'); }}</p>
        {{ Form::password('password',  array('placeholder'=>'Password')); }}<p>{{ $errors->login->first('password'); }}</p>
        {{ Form::submit('Log In'); }}
        {{ Form::close(); }}
    </div>
    <div class="col-md-1">
        <p>Регистрирай се</p>
        {{ Form::open(array('url' => 'signin')); }}
        {{ Form::text('username', Input::old('username'),  array('placeholder'=>'Username')); }}<p>{{ $errors->signin->first('username'); }}</p>
        {{ Form::email('email', Input::old('email'),  array('placeholder'=>'e-mail')); }}<p>{{ $errors->signin->first('email'); }}</p>
        {{ Form::password('password',  array('placeholder'=>'Password')); }}<p>{{ $errors->signin->first('password'); }}</p>
        {{ Form::submit('Sign In'); }}
        {{ Form::close(); }}
    </div>
</div>
@stop