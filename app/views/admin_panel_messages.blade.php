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
    <div class="row col-md-12 custyle">
        <table class="table table-striped custab">
            <div class="row text-center">
                <?php echo $messages->links(); ?>
            </div>
            <thead>
                <tr>
                    <th>Потребител</th>
                    <th>И-мейл</th>
                    <th>Дата</th>
                </tr>
            </thead>
                <?php
                foreach ($messages as $msg): ?>
                    <tr>
                        <td style="border: 1px solid #000000"><?php echo $msg->name; ?></td>
                        <td style="border: 1px solid #000000"><?php echo $msg->email; ?></td>
                        <td style="border: 1px solid #000000"><?php echo $msg->created_at; ?></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="word-wrap: break-word; border: 1px solid #000000; border-bottom: thick double #ff0000"><?php echo $msg->content; ?></td>
                    </tr>
                <?php
                endforeach; ?>
        </table>
    </div>
</div>
@stop
