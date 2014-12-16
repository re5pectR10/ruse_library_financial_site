@extends('layouts.admin')
@section('acc_options')
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

<ul>
@if (isset($atelie->id))
@foreach ($atelie->doc as $d)
    <?php echo '<a href="'.URL::to('/').'/file?id='.$d->id.'.'.$d->extension.'&article_id='.$atelie->id.'">'.$d->name.'</a>'; ?>
@endforeach
@endif
</ul>

{{ Form::submit('submit'); }}
{{ Form::close(); }}
@stop
