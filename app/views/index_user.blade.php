@extends('layouts.master')
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

@section('acc_options')
<ul class="nav">
    <li class="dropdown"><button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Добре дошли, {{ Auth::user()->username; }}<b class="caret"></b></button>
        <ul class="dropdown-menu">
            <li><a href="logout"><i class="glyphicon glyphicon-off"></i> Изход от админския профил</a></li>
        </ul>
    </li>
</ul>
@stop