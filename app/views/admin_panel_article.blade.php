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
            {{ Form::open(array('url' => $action, 'files' => 'true')); }}
            {{ Form::hidden('id', isset($atelie->id) ? $atelie->id : Input::old('id')); }}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Заглавие:</h2>
                    {{ Form::text('title', isset($atelie->title) ? $atelie->title : Input::old('title'),  array('placeholder'=>'Title',  'class'=>'form-control')); }}<p>{{ $errors->login->first('title'); }}</p>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Описание:</h2>
            {{ Form::textarea('description', isset($atelie->description) ? $atelie->description : Input::old('description'), array('placeholder' => 'description', 'rows' => '3')) }}<p>{{ $errors->sendMessage->first('description'); }}</p>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Съдържание:</h2>
            {{ Form::textarea('content', isset($atelie->content) ? $atelie->content : Input::old('content'), array('placeholder' => 'content')) }}<p>{{ $errors->sendMessage->first('content'); }}</p>
                </div>
            </div>
            {{ Form::file('files[]', $attributes = array('multiple' => 'true')); }}
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Добавени картинки:</h2>
                    @if (isset($atelie->id))
                    @foreach ($atelie->doc as $d)
                        <table class="table table-striped custab">
                        <?php echo '<tr><td style="border-right: thick double #ff0000;"><a href="'.URL::to('/').'/file?name='.$d->name.'&article_id='.$atelie->id.'">'.$d->name.'</a></td><td style="border-right: thick double #ff0000;"><a href="' . URL::to('/') . '/admin/atelieta/deletefile?id='.$d->id.'&name=' . $d->name.'&article_id='.$atelie->id. '">Изтрий картинката</a></td></tr>'; ?>
                        </table>
                    @endforeach
                    @endif
                </div>
            </div>
            {{ Form::submit('Редактирай', array('class'=>'btn btn-primary pull-right')); }}
        </div>
</div>
</div>
</div>



@if (Session::has('files_error'))
<p>{{ Session::get('files_error') }}</p>
@endif

{{ Form::close(); }}
@stop
