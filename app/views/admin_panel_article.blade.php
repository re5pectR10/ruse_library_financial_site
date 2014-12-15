@extends('layouts.admin')
@section('acc_options')
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
