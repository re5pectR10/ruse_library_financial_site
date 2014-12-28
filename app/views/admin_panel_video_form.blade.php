@extends('layouts.admin')
@section('acc_options')
<ul class="nav">
    <li class="dropdown"><button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Добре дошли, {{ Auth::user()->username; }}<b class="caret"></b></button>
        <ul class="dropdown-menu">
            <li><a href=<?php echo '"' . URL::to('/') . '/logout"' ?>><i class="glyphicon glyphicon-off"></i> Изход от админския профил</a></li>
        </ul>
    </li>
</ul>
@stop

@section('content')
<div class="container">
    <div class="row col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Редакция на видео</h3>
            </div>
            <div class="panel-body">
                {{ Form::open(array('url' => $action)); }}
                {{ Form::hidden('id', isset($video->id) ? $video->id : Input::old('id')); }}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Заглавие:</h2>
                        {{ Form::text('name', isset($video->name) ? $video->name : Input::old('name'),  array('placeholder'=>'Title',  'class'=>'form-control')); }}<p>{{ $errors->first('name'); }}</p>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Описание:</h2>
                        {{ Form::text('path', isset($video->path) ? $video->path : Input::old('path'), array('placeholder' => 'URL to video ou YouTube')) }}<p>{{ $errors->first('path'); }}</p>
                    </div>
                    @if (Session::has('error'))
                    <p>{{ Session::get('error') }}</p>
                    @endif
                </div>
                {{ Form::submit('Редактирай', array('class'=>'btn btn-primary pull-right')); }}
            </div>
        </div>
    </div>
</div>
{{ Form::close(); }}
@stop
