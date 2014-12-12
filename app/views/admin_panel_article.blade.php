@extends('layouts.admin')
@section('acc_options')
<div class="row">
    <div class="col-md-1">
        <a href="logout">izhod</a>
    </div>
</div>
@stop

@section('content')
{{ Form::open(array('url' => $action)); }}
{{ Form::hidden('id', isset($atelie->id) ? $atelie->id : ''); }}
{{ Form::text('title', isset($atelie->title) ? $atelie->title : '',  array('placeholder'=>'Title')); }}<p>{{ $errors->login->first('username'); }}</p>
{{ Form::textarea('description', isset($atelie->description) ? $atelie->description : '', array('placeholder' => 'description', 'rows' => '3')) }}<p>{{ $errors->sendMessage->first('message'); }}</p>
{{ Form::textarea('content', isset($atelie->content) ? $atelie->content : '', array('placeholder' => 'content')) }}<p>{{ $errors->sendMessage->first('message'); }}</p>
{{ Form::file('file', $attributes = array('multiple')); }}
{{ Form::submit('submit'); }}
{{ Form::close(); }}
@stop
