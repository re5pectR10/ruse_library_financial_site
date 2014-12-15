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
    foreach ($users as $user): ?>
        <tr>
            <td style="border: 1px solid #000000"><?php echo $user->username; ?></td>
            <td style="border: 1px solid #000000"><?php echo $user->email; ?></td>
            <td style="border: 1px solid #000000"><a <?php echo 'href="users/delete?id=' .  $user->id . '"'; ?>>delete</a></td>
            <?php if ($user->user_type == 1)
                echo '<td style="border: 1px solid #000000"><a href="users/removeadmin?id=' .  $user->id . '">remove admin rights</a></td>';
            else
                echo '<td style="border: 1px solid #000000"><a href="users/makeadmin?id=' .  $user->id . '">make admin</a></td>';
            ?>
        </tr>
    <?php
    endforeach; ?>
</table>
<?php echo $users->links(); ?>
@stop
