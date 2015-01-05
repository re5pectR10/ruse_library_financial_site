@extends('layouts.master')
@section('send_message')
<h3>Изпрати съобщение</h3>
<div class="status alert alert-success" style="display: none"></div>

{{ Form::open(array('url' => 'sendmsg','id'=>'main-contact-form')); }}
<div class="user_content_wrap form-group">
    {{ Form::honeypot('user_content', 'date') }}
    <div class="bg-danger">
        <p>{{ $errors->message->first('user_content'); }}</p>
        <p>{{ $errors->message->first('date'); }}</p>
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
@include('acc_user_menu')
@stop