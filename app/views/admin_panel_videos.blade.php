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
    <div class="row col-md-12 custyle">
        <table class="table table-striped custab">
            <div class="row text-center">
                <a href="videos/add"class="btn btn-primary pull-left"><b>+</b> Добави нови записи</a>
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
                    <td class="text-center" style=""><a class="btn-danger btn-xs"<?php echo 'href="videos/delete?id=' .  $v->id . '"'; ?>><span class="glyphicon glyphicon-remove"></span>изтрий</a></td>
                </tr>
            <?php
            endforeach; ?>
        </table>
    </div>
</div>
@stop