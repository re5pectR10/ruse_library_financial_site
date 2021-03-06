@extends('layouts.admin')
@section('acc_options')
@include('acc_admin_menu')
@stop

@section('content')
<div class="container">
    <div class="row col-md-12 custyle">
        <p class="admin-panel-title">Видеа</p>
        <table class="table table-striped custab">
            <div class="row text-center">
                <a href="videos/add" class="btn btn-primary pull-left"><b>+</b> Добави нови записи</a>
                <?php echo $videos->links(); ?>
            </div>
            <thead>
            <tr>
                <th>Заглавие</th>
                <th class="text-center">Редактиране</th>
                <th class="text-center">Изтриване</th>
            </tr>
            </thead>
            <?php
            foreach ($videos as $v): ?>
                <tr>
                    <td style="border-right: thick double #ff0000;"><?php echo $v->name; ?></td>
                    <td class="text-center" style="border-right: thick double #ff0000;"><a class="btn-info btn-xs" <?php echo 'href="videos/edit?id=' .  $v->id . '"'; ?>><span class="glyphicon glyphicon-edit"></span>редактирай</a></td>
                    <td class="text-center"><a class="btn-danger btn-xs" <?php echo 'href="videos/delete?id=' .  $v->id . '"'; ?>><span class="glyphicon glyphicon-remove"></span>изтрий</a></td>
                </tr>
            <?php
            endforeach; ?>
        </table>
    </div>
</div>
@stop