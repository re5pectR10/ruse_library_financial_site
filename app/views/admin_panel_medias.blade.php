@extends('layouts.admin')
@section('acc_options')
@include('acc_admin_menu')
@stop

@section('content')
<div class="container">
    <div class="row col-md-12 custyle">
        <p class="admin-panel-title">Медии</p>
        <table class="table table-striped custab">
            <div class="row text-center">
                <a href="media/add"class="btn btn-primary pull-left"><b>+</b> Добави нови записи</a>
                <?php echo $media->links(); ?>
            </div>
            <thead>
            <tr>
                <th>Заглавие</th>
                <th>Описание</th>
                <th class="text-center">Редактиране</th>
                <th class="text-center">Изтриване</th>
            </tr>
            </thead>
            <?php
            foreach ($media as $m): ?>
                <tr>
                    <td style="border-right: thick double #ff0000;"><?php echo $m->title; ?></td>
                    <td style="border-right: thick double #ff0000;"><?php echo $m->description; ?></td>
                    <td class="text-center" style="border-right: thick double #ff0000;"><a class="btn-info btn-xs" <?php echo 'href="media/edit?id=' .  $m->id . '"'; ?>><span class="glyphicon glyphicon-edit"></span>редактирай</a></td>
                    <td class="text-center" style=""><a class="btn-danger btn-xs"<?php echo 'href="media/delete?id=' .  $m->id . '"'; ?>><span class="glyphicon glyphicon-remove"></span>изтрий</a></td>
                </tr>
            <?php
            endforeach; ?>
        </table>
    </div>
</div>
@stop