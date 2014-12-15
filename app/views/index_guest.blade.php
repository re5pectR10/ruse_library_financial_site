@extends('layouts.master')
@section('user_auth')
<div class="container">
<!-- START -> Log in and Sign in link buttons -->
<div class="row">
        <div class="col-md-offset-9 col-md-1">
        <a id="btn-login" class="btn btn-success clicklogin">Влез</a>
        </div>
        <div class="col-md-2">
        <a id="btn-signin" class="btn btn-primary clicksignin">Регистрирай се</a>
        </div>
</div>
<!-- END <- Log in and Sign in link buttons -->
</div>

<div class="container">
<div class="row">
<div class="col-md-offset-9 col-md-3">
    <!-- START -> Log in form -->
    <div class="toggle-slide toggle-slide-login">
        <div class="panel panel-default">
            <div class="panel-body">
                {{ Form::open(array('url' => 'login')); }}
                <div style="margin-bottom: 10px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    {{ Form::text('username', Input::old('username'),  array('placeholder'=>'Потребителско име','class'=>'form-control')); }}
                </div>
                <div class="bg-danger">
                    <p>{{ $errors->login->first('username'); }}</p>
                </div>
                <div style="margin-bottom: 10px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    {{ Form::password('password',  array('placeholder'=>'Парола','class'=>'form-control')); }}
                </div>
                <div class="bg-danger">
                    <p>{{ $errors->login->first('password'); }}</p>
                </div>
                <div class="form-group" style="margin-bottom: 1px">
                    {{ Form::label('remember', 'Запомни ме', array('class'=>'text-primary')); }}
                    {{ Form::checkbox('remember', 'true'); }}
                    {{ Form::submit('Влез', array('class'=>'btn-success pull-right')); }}
                </div>
            {{ Form::close(); }}

            </div>
        </div>
    </div>
    <!-- END <- Log in form -->
    <!-- START -> Sign in form -->
<div class="toggle-slide toggle-slide-signin">
    <div class="panel panel-default">
        <div class="panel-body">
                {{ Form::open(array('url' => 'signin')); }}
            <div style="margin-bottom: 10px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                {{ Form::text('username', Input::old('username'),  array('placeholder'=>'Потребителско име','class'=>'form-control')); }}
            </div>
            <div class="bg-danger">
                <p>{{ $errors->signin->first('username'); }}</p>
            </div>
            <div style="margin-bottom: 10px" class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                {{ Form::email('email', Input::old('email'),  array('placeholder'=>'и-мейл','class'=>'form-control')); }}
            </div>
            <div class="bg-danger">
                <p>{{ $errors->signin->first('email'); }}</p>
            </div>
            <div style="margin-bottom: 10px" class="input-group">
                 <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                 {{ Form::password('password',  array('placeholder'=>'Парола','class'=>'form-control')); }}
            </div>
            <div class="bg-danger">
               <p>{{ $errors->signin->first('password'); }}</p>
            </div>
            <div class="form-group" style="margin-bottom: 1px">
                {{ Form::submit('Регистрирай се', array('class'=>'btn-success pull-right')); }}
                {{ Form::close(); }}
            </div>
        </div>
    </div>
</div>
    <!-- END <- Sign in form -->
</div>
</div>
</div>
@stop

@section('send_message')
        <h3>Изпрати съобщение</h3>
        <div class="status alert alert-success" style="display: none"></div>

        {{ Form::open(array('url' => 'sendmsg','id'=>'main-contact-form')); }}
        <div class="form-group">
            {{ Form::text('name', Input::old('name'),  array('placeholder'=>'Име', 'class'=>'form-control')); }}
            <div class="bg-danger">
                <p>{{ $errors->message->first('name'); }}</p>
            </div>
        </div>
        <div class="form-group">
            {{ Form::email('email', Input::old('email'),  array('placeholder'=>'и-мейл', 'class'=>'form-control')); }}
            <div class="bg-danger">
                <p>{{ $errors->message->first('email'); }}</p>
            </div>
        </div>
        <div class="form-group">
            {{ Form::textarea('message',Input::old('message'),array('placeholder' => 'Напишете вашето съобщение тук', 'class'=>'form-control')) }}
            <div class="bg-danger">
                <p>{{ $errors->message->first('message'); }}</p>
            </div>
        </div>
        <div class="form-group">
            {{ Form::submit('Изпрати', array('class'=>'btn btn-primary pull-right')); }}
        </div>
        {{ Form::close(); }}
@stop