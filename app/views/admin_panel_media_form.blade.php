@extends('layouts.admin')
@section('acc_options')
@include('acc_admin_menu')
@stop

@section('content')
<div class="container">
    <div class="row col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Редакция на медии</h3>
            </div>
            <div class="panel-body">
                {{ Form::open(array('url' => $action, 'files' => 'true')); }}
                {{ Form::hidden('id', isset($media->id) ? $media->id : Input::old('id')); }}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Заглавие:</h2>
                        {{ Form::text('title', isset($media->title) ? $media->title : Input::old('title'),  array('placeholder'=>'Title',  'class'=>'form-control')); }}<p>{{ $errors->first('title'); }}</p>
                    </div>
                    <div class="panel-heading">
                        <h2 class="panel-title">Дата:</h2>
                        {{ Form::text('date', isset($media->date) ? $media->date : Input::old('date'),  array('placeholder'=>'Date',  'class'=>'form-control')); }}<p>{{ $errors->first('date'); }}</p>
                    </div>
                    <div class="panel-heading">
                        <h2 class="panel-title">Описание:</h2>
                        {{ Form::text('desc', isset($media->description) ? $media->description : Input::old('desc'),  array('placeholder'=>'Description',  'class'=>'form-control')); }}<p>{{ $errors->first('desc'); }}</p>
                    </div>
                    <div class="panel-heading">
                        <h2 class="panel-title">Линк към статията:</h2>
                        {{ Form::text('link', isset($media->link) ? $media->link : Input::old('link'),  array('placeholder'=>'URL to article',  'class'=>'form-control')); }}<p>{{ $errors->first('link'); }}</p>
                    </div>
                </div>
                {{ Form::file('file'); }}<p>{{ $errors->first('file'); }}</p>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Добавени картинки:</h2>
                        @if (isset($image))
                            @if ($image != '0')
                            <div style="width: 20%">
                                {{ HTML::image($image, $alt="image", array('class' => 'edit-album-images')); }}
                            </div>
                            <?php echo '<a href="' . URL::to('/') . '/admin/media/deletemediaimage?id=' . $media->id . '">Изтрий картинката</a>' ?>
                            @endif
                        @endif
                    </div>
                </div>
                {{ Form::submit('Запази', array('class'=>'btn btn-primary pull-right')); }}
                {{ Form::close(); }}
                @if (Session::has('files_error'))
                <p>{{ Session::get('files_error') }}</p>
                @endif
            </div>
        </div>
    </div>
</div>
@stop
