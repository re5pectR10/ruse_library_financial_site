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
                {{ Form::hidden('id', isset($album->id) ? $album->id : Input::old('id')); }}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Заглавие:</h2>
                        {{ Form::text('name', isset($album->name) ? $album->name : Input::old('name'),  array('placeholder'=>'Title',  'class'=>'form-control')); }}<p>{{ $errors->first('name'); }}</p>
                    </div>
                </div>
                {{ Form::file('files[]', $attributes = array('multiple' => 'true')); }}<p>{{ $errors->first('files'); }}</p>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Добавени картинки:</h2>
                        @if (isset($album->id))
                        @foreach ($album->images as $i)
                        <div style="width: 20%">
                            <img style="max-width: 100%; max-height: 100%" src=<?php echo '"' . URL::to('/') . '/pictures/' . $album->id . '/' . $i->id . '.' . $i->extension . '"' ?>>
                        </div>
                        <?php echo '<a href="' . URL::to('/') . '/admin/albums/deleteimage?id='.$i->id.'&album_id='.$album->id. '">Изтрий картинката</a>' ?>
                        <table class="table table-striped custab">
                            <?php //echo '<tr><td style="border-right: thick double #ff0000;"><a href="'.URL::to('/').'/file?name='.$i->name.'&article_id='.$album->id.'">'.$i->name.'</a></td><td style="border-right: thick double #ff0000;"><a href="' . URL::to('/') . '/admin/atelieta/deletefile?id='.$i->id.'&name=' . $i->name.'&article_id='.$album->id. '">Изтрий картинката</a></td></tr>'; ?>
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
