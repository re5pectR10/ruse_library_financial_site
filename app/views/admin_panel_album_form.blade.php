@extends('layouts.admin')
@section('acc_options')
@include('acc_admin_menu')
@stop

@section('content')
<div class="container">
    <div class="row col-md-10">
        @if (Session::has('files_error'))
        <p>{{ Session::get('files_error') }}</p>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Редакция на албум</h3>
            </div>
            <div class="panel-body">
                {{ Form::open(array('url' => $action, 'files' => 'true', 'id' => 'form', 'onsubmit' => 'return confirmSize();')); }}
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
                        <div style="border: 2px solid #000000">
                            <div style="width: 20%">
                                    <?php $path = 'pictures/' . $album->id . '/' . $i->id . '.' . $i->extension ?>
                                {{ HTML::image($path, $alt="image", array('class' => 'edit-album-images')); }}
                            </div>
                            <?php echo '<a href="' . URL::to('/') . '/admin/albums/deleteimage?id='.$i->id.'&album_id='.$album->id. '">Изтрий картинката</a>' ?>
                            <p class="input"></p>
                            {{ Form::text('description[]', isset($i->description) ? $i->description : ''); }}
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
                {{ Form::submit('Редактирай', array('class'=>'btn btn-primary pull-right')); }}
                {{ Form::close(); }}
            </div>
        </div>
    </div>
</div>
<script>
    function confirmSize() {
        var elementsCount = document.forms['form']['description[]'].length;
        var element;
        for (var i = 0; i < elementsCount; i++) {
            element = document.forms['form']['description[]'][i].value;
            if (element.length > 250)
            {
                document.getElementsByClassName('input')[i].innerHTML = 'The description length must be under 250 characters';
                return false;
            }
        }

        return true;
    }
</script>
@stop
