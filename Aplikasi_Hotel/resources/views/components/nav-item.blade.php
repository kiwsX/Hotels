@props(['label','icon','link'])
<?php
    $path = trim(str_replace(url('/'),'',$link),'/');
    $wildcard = $path == 'admin' ? '' : '*';
    $is = request()->is($path.$wildcard);
?>
<li class="nav-item">
    <a href="<?= $link ?>" class="nav-link {{$is ? 'active' : ''}}">
        <i class="nav-icon {{ $icon }}"></i>
        <p>{{ $label }}</p>
</a>
</li>
