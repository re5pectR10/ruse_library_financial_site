@extends('layouts.admin')
@section('acc_options')
@include('acc_admin_menu')
@stop

@section('content')
<div class="container">
    <div class="row col-md-12 custyle">
        <p class="admin-panel-title">Потребители</p>
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
                    <td style="border-right: thick double #ff0000;">{{{ $user->username }}}</td>
                    <td style="border-right: thick double #ff0000;">{{{ $user->email }}}</td>
                    <?php if ($user->user_type == 1)
                        echo '<td class="text-center" style="border-right: thick double #ff0000;"><a class="btn-info btn-sm" href="users/removeadmin?id=' .  $user->id . '"><span class="glyphicon glyphicon-edit"></span>Премахни администраторските права</a></td>';
                    else
                        echo '<td class="text-center" style="border-right: thick double #ff0000;"><a class="btn-primary btn-sm" href="users/makeadmin?id=' .  $user->id . '"><span class="glyphicon glyphicon-edit"></span>Направи админ</a></td>';
                    ?>
                    <td class="text-center"><a class="btn-danger btn-sm" <?php echo 'href="users/delete?id=' .  $user->id . '"'; ?>><span class="glyphicon glyphicon-remove"></span>Изтрий потребителя</a></td>
                </tr>
            <?php
            endforeach; ?>
        </table>
    </div>
</div>
@stop
