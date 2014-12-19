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
                <h3 class="panel-title">Редакция на...</h3>
            </div>
            <div class="panel-body">
                {{ Form::open(array('url' => 'admin/slides/update')); }}
                {{ Form::hidden('id', isset($slide[0]->id) ? $slide[0]->id : Input::old('id')); }}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Заглавие:</h2>
                        {{ Form::text('title', isset($slide[0]->title) ? $slide[0]->title : Input::old('title'),  array('placeholder'=>'Title',  'class'=>'form-control')); }}<p>{{ $errors->first('title'); }}</p>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Описание:</h2>
                        {{ Form::textarea('content', isset($slide[0]->content) ? $slide[0]->content : Input::old('content'), array('placeholder' => 'content', 'rows' => '3')) }}<p>{{ $errors->first('content'); }}</p>
                    </div>
                </div>
                {{ Form::submit('Редактирай', array('class'=>'btn btn-primary pull-right')); }}
            </div>
        </div>
    </div>
</div>
{{ Form::close(); }}
{{ $slide->links(); }}
@stop
