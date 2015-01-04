@extends('layouts.admin')
@section('acc_options')
@include('acc_admin_menu')
@stop

@section('content')
<div class="container">
    <div class="row col-md-12 custyle">
        <p class="admin-panel-title">Ателиета</p>
        <table class="table table-striped custab">
        <div class="row text-center">
            <a href="atelieta/add" class="btn btn-primary pull-left"><b>+</b> Добави нови записи</a>
            <?php echo $atelieta->links(); ?>
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
            foreach ($atelieta as $atelie): ?>
                <tr>
                    <td style="border-right: thick double #ff0000;"><?php echo $atelie->title; ?></td>
                    <td style="border-right: thick double #ff0000;"><?php echo $atelie->description; ?></td>
                    <td class="text-center" style="border-right: thick double #ff0000;"><a class="btn-info btn-xs" <?php echo 'href="atelieta/edit?id=' .  $atelie->id . '"'; ?>><span class="glyphicon glyphicon-edit"></span>редактирай</a></td>
                    <td class="text-center"><a class="btn-danger btn-xs" <?php echo 'href="atelieta/delete?id=' .  $atelie->id . '"'; ?>><span class="glyphicon glyphicon-remove"></span>изтрий</a></td>
                </tr>
            <?php
            endforeach; ?>
        </table>
    </div>
</div>
@stop