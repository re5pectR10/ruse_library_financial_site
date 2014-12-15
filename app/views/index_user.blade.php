@extends('layouts.master')
@section('send_message')
<div class="row">
    <div class="col-md-offset-10 col-md-1">
        <p>send a message</p>
        {{ Form::open(array('url' => 'sendmsg')); }}
        {{ Form::textarea('message',Input::old('message'),array('placeholder' => 'enter your message here')) }}<p>{{ $errors->sendMessage->first('message'); }}</p>
        {{ Form::submit('send'); }}
        {{ Form::close(); }}
    </div>
</div>
@stop

@section('acc_options')
<div class="row">
    <div class="col-md-1">
        <a href="logout">izhod</a>
    </div>
</div>
@stop