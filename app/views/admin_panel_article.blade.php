@extends('layouts.admin')
@section('acc_options')
<<<<<<< HEAD
<ul class="nav">
    <li class="dropdown"><button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Добре дошли, {{ Auth::user()->username; }}<b class="caret"></b></button>
        <ul class="dropdown-menu">
            <li><a href="logout"><i class="glyphicon glyphicon-off"></i> Изход от админския профил</a></li>
        </ul>
    </li>
</ul>
@stop

@section('content')
<div class="container">
    <div class="row col-md-6">
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Редакция на...</h3>
    </div>
        <div class="panel-body">
            {{ Form::open(array('url' => $action, 'files' => 'true')); }}
            {{ Form::hidden('id', isset($atelie->id) ? $atelie->id : ''); }}
            {{ Form::text('title', isset($atelie->title) ? $atelie->title : '',  array('placeholder'=>'Title',  'class'=>'form-control')); }}<p>{{ $errors->login->first('username'); }}</p>
            {{ Form::textarea('description', isset($atelie->description) ? $atelie->description : '', array('placeholder' => 'description', 'rows' => '3')) }}<p>{{ $errors->sendMessage->first('message'); }}</p>
            {{ Form::textarea('content', isset($atelie->content) ? $atelie->content : '', array('placeholder' => 'content')) }}<p>{{ $errors->sendMessage->first('message'); }}</p>
            {{ Form::file('files[]', $attributes = array('multiple' => 'true')); }}
    </div>
</div>
</div>
</div>
=======
<div class="row">
    <div class="col-md-1">
        <a href=<?php echo '"' . URL::to('/') . '/logout"' ?>>izhod</a>
    </div>
</div>
@stop

@section('content')
{{ Form::open(array('url' => $action, 'files' => 'true')); }}
{{ Form::hidden('id', isset($atelie->id) ? $atelie->id : Input::old('id')); }}
{{ Form::text('title', isset($atelie->title) ? $atelie->title : Input::old('title'),  array('placeholder'=>'Title')); }}<p>{{ $errors->first('title'); }}</p>
{{ Form::textarea('description', isset($atelie->description) ? $atelie->description : Input::old('description'), array('placeholder' => 'description', 'rows' => '3')) }}<p>{{ $errors->first('description'); }}</p>
{{ Form::textarea('content', isset($atelie->content) ? $atelie->content : Input::old('content'), array('placeholder' => 'content')) }}<p>{{ $errors->first('content'); }}</p>
{{ Form::file('files[]', $attributes = array('multiple' => 'true')); }}
>>>>>>> origin/master

@if (isset($atelie->id))
@foreach ($atelie->doc as $d)
    <table>
    <?php echo '<tr><td style="border: 1px solid #000000"><a href="'.URL::to('/').'/file?name='.$d->name.'&article_id='.$atelie->id.'">'.$d->name.'</a></td><td style="border: 1px solid #000000"><a href="' . URL::to('/') . '/admin/atelieta/deletefile?id='.$d->id.'&name=' . $d->name.'&article_id='.$atelie->id. '">remove file</a></td></tr>'; ?>
    </table>
@endforeach
@endif

@if (Session::has('files_error'))
<p>{{ Session::get('files_error') }}</p>
@endif

{{ Form::submit('submit'); }}
{{ Form::close(); }}
@stop
