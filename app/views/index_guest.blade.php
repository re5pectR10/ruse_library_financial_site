@extends('layouts.master')
@section('user_auth')
<div class="container">
<div class="row">
        <div class="col-md-offset-9 col-md-1">
        <a id="btn-login" href="#" class="btn btn-success clicklogin">Влез</a>
        </div>
        <div class="col-md-2">
        <a id="btn-signin" href="#" class="btn btn-primary clicksignin">Регистрирай се</a>
        </div>
</div>
</div>

<div class="container">
<div class="row">
    <div class="col-md-offset-9 col-md-3">
    <div class="toggle-slide toggle-slide-login">
        <div class="panel panel-default">
            <div class="panel-body">
                {{ Form::open(array('url' => 'login')); }}
                <div style="margin-bottom: 10px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                {{ Form::text('username', Input::old('username'),  array('placeholder'=>'Username','class'=>'form-control')); }}<p>{{ $errors->login->first('username'); }}</p>
            </div>

            <div style="margin-bottom: 10px" class="input-group">
             <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                 {{ Form::password('password',  array('placeholder'=>'Password','class'=>'form-control')); }}<p>{{ $errors->login->first('password'); }}</p>
            </div>

            {{ Form::label('remember', 'Запомни ме', array('class'=>'text-primary')); }}
            {{ Form::checkbox('remember', 'true'); }}
            {{ Form::submit('Log In', array('class'=>'btn-sm', 'class'=>'btn-success')); }}
            {{ Form::close(); }}

            </div>
        </div>
    </div>

        <div class="toggle-slide toggle-slide-signin">
            <div class="panel panel-default">
                <div class="panel-body">
                    {{ Form::open(array('url' => 'signin')); }}
                    <div style="margin-bottom: 10px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    {{ Form::text('username', Input::old('username'),  array('placeholder'=>'Username','class'=>'form-control')); }}<p>{{ $errors->signin->first('username'); }}</p>
                </div>

                <div style="margin-bottom: 10px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    {{ Form::email('email', Input::old('email'),  array('placeholder'=>'e-mail','class'=>'form-control')); }}<p>{{ $errors->signin->first('email'); }}</p>
                </div>
                <div style="margin-bottom: 10px" class="input-group">
                 <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                     {{ Form::password('password',  array('placeholder'=>'Password','class'=>'form-control')); }}<p>{{ $errors->signin->first('password'); }}</p>
                </div>

                {{ Form::submit('Sign In', array('class'=>'btn-sm', 'class'=>'btn-success')); }}
                {{ Form::close(); }}

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop

@section('send_message')
<div class="container">
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
</div>
@stop