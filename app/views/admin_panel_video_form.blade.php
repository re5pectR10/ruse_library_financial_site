@extends('layouts.admin')
@section('acc_options')
@include('acc_admin_menu')
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
                        <h2 class="panel-title">Линк към видеото в YouTube:</h2>
                        {{ Form::text('path', isset($video->path) ? $video->path : Input::old('path'), array('placeholder' => 'URL to video ou YouTube')) }}<p>{{ $errors->first('path'); }}</p>
                    </div>
                    @if (Session::has('error'))
                    <p>{{ Session::get('error') }}</p>
                    @endif
                </div>
                {{ Form::submit('Запази', array('class'=>'btn btn-primary pull-right')); }}
                {{ Form::close(); }}
            </div>
        </div>
    </div>
</div>
@stop
