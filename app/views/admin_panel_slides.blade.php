@extends('layouts.admin')
@section('acc_options')
@include('acc_admin_menu')
@stop

@section('content')
<div class="container">
    <div class="row col-md-10">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Редакция на...</h3>
            </div>
            <div class="panel-body">
                {{ Form::open(array('url' => 'admin/slides/update')); }}
                {{ Form::hidden('id', isset($slide[0]->id) ? $slide[0]->id : Input::old('id')); }}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Заглавие:</h2>
                        {{ Form::text('title', isset($slide[0]->title) ? $slide[0]->title : Input::old('title'),  array('placeholder'=>'Title',  'class'=>'form-control')); }}<p>{{ $errors->first('title'); }}</p>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Описание:</h2>
                        {{ Form::textarea('content', isset($slide[0]->content) ? $slide[0]->content : Input::old('content'), array('placeholder' => 'Description', 'rows' => '3')) }}<p>{{ $errors->first('content'); }}</p>
                        <script>
                            CKEDITOR.replace( 'content' );
                            CKEDITOR.on('dialogDefinition', function (ev) {
                                // Take the dialog name and its definition from the event data.
                                var dialogName = ev.data.name;
                                var dialogDefinition = ev.data.definition;
                                // Check if the definition is from the dialog we're
                                // interested in (the 'image' dialog).
                                if (dialogName == 'image') {
                                    // Get a reference to the 'Image Info' tab.
                                    var infoTab = dialogDefinition.getContents('info');
                                    // Remove unnecessary widgets/elements from the 'Image Info' tab.
                                    infoTab.remove('txtHSpace');
                                    infoTab.remove('txtVSpace');
                                    infoTab.remove('txtBorder');
                                }
                            });
                            CKEDITOR.replace('content');
                        </script>
                    </div>
                </div>
                {{ Form::submit('Запази', array('class'=>'btn btn-primary pull-right')); }}
                {{ Form::close(); }}
            </div>
        </div>
    </div>
</div>
{{ $slide->links(); }}
@stop
