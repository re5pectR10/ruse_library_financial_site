<div class="dropdown pull-right">
    <ul class="nav">
        <li class="dropdown"><div class="btn btn-info dropdown-toggle" data-toggle="dropdown">Добре дошли, {{ Auth::user()->username; }}<b class="caret"></b></div>
            <ul class="dropdown-menu">
                <li><a class="no-scroll" href=<?php echo '"' . URL::to('/') . '/user/budget"'; ?>><i class="glyphicon glyphicon-euro"></i> Семеен бюджет</a></li>
                <li><a class="no-scroll" target="_blank" data-target="#" href="https://docs.google.com/forms/d/1ylD8ckd_WiCeQB7LsAukn7uDI71ahlQCCrS1OsYRHqU/viewform" aria-haspopup="true" role="button" aria-expanded="false"><i class="glyphicon glyphicon-pencil"></i> Финансова грамотност - входяща анкета</a></li>
                <li><a class="no-scroll" target="_blank" data-target="#" href="https://docs.google.com/forms/d/1RD3vUVTLEF6NTrFYYxY3SNSU4_FyBKdiiiPzLxskv7Q/viewform" aria-haspopup="true" role="button" aria-expanded="false"><i class="glyphicon glyphicon-retweet"></i> Финансова грамотност - обратна връзка</a></li>
                <li class="divider"></li>
                <li><a class="no-scroll" href=<?php echo '"' . URL::to('/') . 'logout"'; ?>><i class="glyphicon glyphicon-off"></i> Изход</a></li>
            </ul>
        </li>
    </ul>
</div>