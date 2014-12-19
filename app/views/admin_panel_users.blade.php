@extends('layouts.admin')
@section('acc_options')
<div class="dropdown pull-right">
    <button id="dLabel" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">Добре дошли, {{ Auth::user()->username; }}<b class="caret"></b></button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                <li><a class="no-scroll" data-target="#" href="logout" aria-haspopup="true" role="button" aria-expanded="false"><i class="glyphicon glyphicon-off"></i> Изход от профила</a></li>
            </ul>
</div>
@stop

@section('content')
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
                    <?php if ($user->user_type == 1)
                        echo '<td class="text-center" style="border-right: thick double #ff0000;"><a class="btn-info btn-sm" href="users/removeadmin?id=' .  $user->id . '"><span class="glyphicon glyphicon-edit"></span>Премахни администраторските права</a></td>';
                    else
                        echo '<td class="text-center" style="border-right: thick double #ff0000;"><a class="btn-primary btn-sm" href="users/makeadmin?id=' .  $user->id . '"><span class="glyphicon glyphicon-edit"></span>Направи админ</a></td>';
                    ?>
                    <td class="text-center"><a class="btn-danger btn-sm"<?php echo 'href="users/delete?id=' .  $user->id . '"'; ?>><span class="glyphicon glyphicon-remove"></span>Изтрий потребителя</a></td>
                </tr>
            <?php
            endforeach; ?>
        </table>
    </div>
</div>
@stop
