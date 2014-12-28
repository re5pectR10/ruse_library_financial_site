@extends('layouts.admin')
@section('acc_options')
<div class="dropdown pull-right">
    <ul class="nav">
        <li class="dropdown"><div class="btn btn-info dropdown-toggle" data-toggle="dropdown">Добре дошли, {{ Auth::user()->username; }}<b class="caret"></b></div>
            <ul class="dropdown-menu">
                <li><a class="no-scroll" href=<?php echo '"' . URL::to('/') . 'logout"'; ?>><i class="glyphicon glyphicon-off"></i> Изход</a></li>
            </ul>
        </li>
    </ul>
</div>
@stop

@section('content')
<div class="container">
    <div class="row col-md-12 custyle">
        {{ Form::open(array('url' => 'user/change')); }}
        {{ Form::label('email', 'E-Mail Address'); }}
        {{ Form::email('email', isset($user->email) ? $user->email : Input::old('email'),  array('placeholder'=>'и-мейл','class'=>'form-control')); }}
    </div>
    <div class="bg-danger">
        <p>{{ $errors->first('email'); }}</p>
    </div>
    {{ Form::label('password', 'New Password'); }}
    {{ Form::password('password', array('placeholder'=>'Парола','class'=>'form-control')); }}
    <div class="bg-danger">
        <p>{{ $errors->first('password'); }}</p>
    </div>
    {{ Form::label('password_confirmation', 'Write new password again'); }}
    {{ Form::password('password_confirmation', array('placeholder'=>'Парола','class'=>'form-control')); }}
    <div class="bg-danger">
        <p>{{ $errors->first('password_confirmation'); }}</p>
    </div>
    {{ Form::label('old_password', 'Write your old password for confirmation'); }}
    {{ Form::password('old_password', array('placeholder'=>'Парола','class'=>'form-control')); }}
    <div class="bg-danger">
        <p>{{ $errors->first('old_password'); }}</p>
    </div>
    @if (Session::has('pass_conf'))
        <p>{{ Session::get('pass_conf') }}</p>
    @endif
    {{ Form::submit('Запази', array('class'=>'btn-success pull-right')); }}
    {{ Form::close(); }}
</div>
@stop