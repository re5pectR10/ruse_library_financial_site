@extends('layouts.admin')
@section('acc_options')
@if ($user_type==1)
    @include('acc_admin_menu')
@else
    @include('acc_user_menu')
@endif
@stop

@section('content')
<div class="budget" style="height: 100vh">
    <iframe width="1050" height="100%" frameborder="0" scrolling="no" src="https://onedrive.live.com/embed?cid=32DA0E4F68F3E103&resid=32DA0E4F68F3E103%21111&authkey=AKDEbM7V-KTuvaA&em=2&wdAllowInteractivity=False&AllowTyping=True&Item='%D0%9C%D0%B5%D1%81%D0%B5%D1%87%D0%B5%D0%BD%20%D0%B1%D1%8E%D0%B4%D0%B6%D0%B5%D1%82%20%D0%BD%D0%B0%20%D1%81%D0%B5%D0%BC%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D0%BE%D1%82%D0%BE'!A1%3AI67&wdHideGridlines=True&wdDownloadButton=True"></iframe>
</div>
@stop