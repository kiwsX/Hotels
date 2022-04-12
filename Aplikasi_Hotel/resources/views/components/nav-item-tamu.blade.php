@props(['label','link'])
<?php
    $active = $link == url()->current();
?>
    <a class="nav-link {{$active ? ' active':''}}" href="<?= $link ?>">{{$label}}</a>
