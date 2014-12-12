@extends('layouts.admin')
@section('acc_options')
<div class="row">
    <div class="col-md-1">
        <a href="logout">izhod</a>
    </div>
</div>
@stop

@section('content')
<table>
    <?php
    foreach ($atelieta as $atelie): ?>
        <tr>
            <td style="border: 1px solid #000000"><?php echo $atelie->title; ?></td>
            <td style="border: 1px solid #000000"><?php echo $atelie->description; ?></td>
            <td style="border: 1px solid #000000"><a <?php echo 'href="atelieta/edit?id=' .  $atelie->id . '"'; ?>>edit</a></td>
            <td style="border: 1px solid #000000"><a <?php echo 'href="atelieta/delete?id=' .  $atelie->id . '"'; ?>>delete</a></td>
        </tr>
    <?php
    endforeach; ?>
</table>
<?php echo $atelieta->links(); ?>
<a href="atelieta/add">add</a>
@stop
