@extends('layouts.admin')
@section('acc_options')
@include('acc_admin_menu')
@stop

@section('content')
<div class="container">
    <div class="row col-md-offset-1 col-md-10 custyle">
        <p class="admin-panel-title">Съобщения</p>
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
                        <td style="border: 1px solid #000000"><?php echo '<a href="messages/delete?id=' . $msg->id . '"> Delete this message</a></td>'; ?>
                    </tr>
                    <tr>
                        <td colspan="4" style="word-wrap: break-word; border: 1px solid #000000; border-bottom: thick double #ff0000"><?php echo $msg->content; ?></td>
                    </tr>
                <?php
                endforeach; ?>
        </table>
    </div>
</div>
@stop
