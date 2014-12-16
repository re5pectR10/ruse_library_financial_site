@extends('layouts.admin')
@section('acc_options')
<div class="row">
    <div class="col-md-1">
        <a href=<?php echo '"' . URL::to('/') . '/logout"' ?>>izhod</a>
    </div>
</div>
@stop

@section('content')
    <?php
    foreach ($messages as $msg): ?>
    <table style="margin: auto; margin-bottom: 3%; width: 70%; table-layout: fixed">
        <tr>
            <td style="border: 1px solid #000000"><?php echo $msg->name; ?></td>
            <td style="border: 1px solid #000000"><?php echo $msg->email; ?></td>
            <td style="border: 1px solid #000000"><?php echo $msg->created_at; ?></td>
        </tr>
        <tr>
            <td colspan="3" style="word-wrap: break-word; border: 1px solid #000000"><?php echo $msg->content; ?></td>
        </tr>
    </table>
    <?php
    endforeach; ?>
<?php echo $messages->links(); ?>
@stop
