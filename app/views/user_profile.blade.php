@extends('layouts.admin')
@section('acc_options')
<ul class="nav">
    <li class="dropdown"><button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Добре дошли, {{ Auth::user()->username; }}<b class="caret"></b></button>
        <ul class="dropdown-menu">
            <li><a href="logout"><i class="glyphicon glyphicon-off"></i> Изход</a></li>
        </ul>
    </li>
</ul>
@stop

@section('content')
<div class="container">
    <div class="row col-md-12 custyle">
        {{ Form::open(array('url' => 'user/change')); }}
        {{ Form::email('email', isset($user->email) ? $user->email : Input::old('email'),  array('placeholder'=>'и-мейл','class'=>'form-control')); }}
    </div>
    <div class="bg-danger">
        <p>{{ $errors->first('email'); }}</p>
    </div>
    {{ Form::password('password', array('placeholder'=>'Парола','class'=>'form-control')); }}
    <div class="bg-danger">
        <p>{{ $errors->first('password'); }}</p>
    </div>
    {{ Form::submit('Запази', array('class'=>'btn-success pull-right')); }}
    {{ Form::close(); }}
</div>
@stop