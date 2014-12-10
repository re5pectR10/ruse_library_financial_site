@extends('layouts.master')
@section('user_auth')
<div class="row">
    <div class="col-md-offset-10 col-md-1">
        <p>Влез</p>
        {{ Form::open(array('url' => 'login')); }}
        {{ Form::text('username', Input::old('username'),  array('placeholder'=>'Username')); }}<p>{{ $errors->login->first('username'); }}</p>
        {{ Form::password('password',  array('placeholder'=>'Password')); }}<p>{{ $errors->login->first('password'); }}</p>
        {{ Form::label('remember', 'Remember Me'); }}
        {{ Form::checkbox('remember', 'true'); }}
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

@section('send_message')
<div class="row">
    <div class="col-md-offset-10 col-md-1">
        <p>send a message</p>
        {{ Form::open(array('url' => 'sendMessage')); }}
        {{ Form::text('name', Input::old('name'),  array('placeholder'=>'name')); }}<p>{{ $errors->sendMessage->first('name'); }}</p>
        {{ Form::email('email', Input::old('email'),  array('placeholder'=>'e-mail')); }}<p>{{ $errors->sendMessage->first('email'); }}</p>
        {{ Form::textarea('message',Input::old('message'),array('placeholder' => 'enter your message here')) }}<p>{{ $errors->sendMessage->first('message'); }}</p>
        {{ Form::submit('send'); }}
        {{ Form::close(); }}
    </div>
</div>
@stop