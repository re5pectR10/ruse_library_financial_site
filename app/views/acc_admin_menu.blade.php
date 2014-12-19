<div class="dropdown pull-right">
    <button id="dLabel" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">Добре дошли, {{ Auth::user()->username; }}<b class="caret"></b></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
        <li><a class="no-scroll" data-target="#" href=<?php echo '"' . URL::to('/') . '/user/profile' . '"' ?> aria-haspopup="true" role="button" aria-expanded="false"><i class="glyphicon glyphicon-envelope"></i> Потребителски профил</a></li>
        <li><a class="no-scroll" data-target="#" href=<?php echo '"' . URL::to('/') . '/admin/slides' . '"' ?> aria-haspopup="true" role="button" aria-expanded="false"><i class="glyphicon glyphicon-envelope"></i> Промени съдържанието на слайдовете</a></li>
        <li><a class="no-scroll" data-target="#" href=<?php echo '"' . URL::to('/') . '/admin/atelieta' . '"' ?> aria-haspopup="true" role="button" aria-expanded="false"><i class="glyphicon glyphicon-pencil"></i> Добави/Редактирай ателиета</a></li>
        <li><a class="no-scroll" data-target="#" href=<?php echo '"' . URL::to('/') . '/admin/users' . '"' ?> aria-haspopup="true" role="button" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> Регистрирани потребители</a></li>
        <li><a class="no-scroll" data-target="#" href=<?php echo '"' . URL::to('/') . '/admin/messages' . '"' ?> aria-haspopup="true" role="button" aria-expanded="false"><i class="glyphicon glyphicon-envelope"></i> Съобщения</a></li>
        <li><a class="no-scroll" data-target="#" href=<?php echo '"' . URL::to('/') . '/admin/albums' . '"' ?> aria-haspopup="true" role="button" aria-expanded="false"><i class="glyphicon glyphicon-envelope"></i> albums</a></li>
        <li><a class="no-scroll" data-target="#" href=<?php echo '"' . URL::to('/') . '/admin/videos' . '"' ?> aria-haspopup="true" role="button" aria-expanded="false"><i class="glyphicon glyphicon-envelope"></i> videos</a></li>
        <li class="divider"></li>
        <li><a class="no-scroll" data-target="#" href="logout" aria-haspopup="true" role="button" aria-expanded="false"><i class="glyphicon glyphicon-off"></i> Изход от профила</a></li>
    </ul>
</div>