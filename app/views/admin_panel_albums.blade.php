@extends('layouts.admin')
@section('acc_options')
@include('acc_admin_menu')
@stop

@section('content')
<div class="container">
    <div class="row col-md-12 custyle">
        <p class="admin-panel-title">Албуми</p>
        <table class="table table-striped custab">
            <div class="row text-center">
                <a href="albums/add"class="btn btn-primary pull-left"><b>+</b> Добави нови записи</a>
                <?php echo $albums->links(); ?>
            </div>
            <thead>
            <tr>
                <th>Заглавие</th>
                <th class="text-center">Редактиране</th>
                <th class="text-center">Изтриване</th>
            </tr>
            </thead>
            <?php
            foreach ($albums as $a): ?>
                <tr>
                    <td style="border-right: thick double #ff0000;"><?php echo $a->name; ?></td>
                    <td class="text-center" style="border-right: thick double #ff0000;"><a class="btn-info btn-xs" <?php echo 'href="albums/edit?id=' .  $a->id . '"'; ?>><span class="glyphicon glyphicon-edit"></span>редактирай</a></td>
                    <td class="text-center" style=""><a class="btn-danger btn-xs"<?php echo 'href="albums/delete?id=' .  $a->id . '"'; ?>><span class="glyphicon glyphicon-remove"></span>изтрий</a></td>
                </tr>
            <?php
            endforeach; ?>
        </table>
    </div>
</div>
@stop