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
<<<<<<< HEAD
<div class="container">
    <div class="row col-md-12 custyle">
        <table class="table table-striped custab">
        <?php echo $users->links(); ?>
            <thead>
                <tr>
                    <th>Потребителско име</th>
                    <th>И-мейл</th>
                    <th class="text-center">Направи администратор</th>
                    <th class="text-center">Изтрий потребителя</th>
                </tr>
            </thead>
            <?php
            foreach ($users as $user): ?>
                <tr>
                    <td style="border-right: thick double #ff0000;"><?php echo $user->username; ?></td>
                    <td style="border-right: thick double #ff0000;"><?php echo $user->email; ?></td>
                    <td class="text-center" style="border-right: thick double #ff0000;"><a class="btn-info btn-sm" <?php echo 'href="atelieta/makeadmin?id=' .  $user->id . '"'; ?>><span class="glyphicon glyphicon-edit"></span>Направи админ</a></td>
                    <td class="text-center"><a class="btn-danger btn-sm"<?php echo 'href="atelieta/deleteuser?id=' .  $user->id . '"'; ?>><span class="glyphicon glyphicon-remove"></span>Изтрий потребителя</a></td>
                </tr>
            <?php
            endforeach; ?>
        </table>
    </div>
</div>
=======
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
>>>>>>> origin/master
@stop
