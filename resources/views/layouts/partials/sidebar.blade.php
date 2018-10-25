<div class="sidebar sidebar-dark bg-dark">
    <ul class="list-unstyled">
        @foreach(config('menu') as $menu)
            <li>
                <a href="{{ route($menu['route']) }}">
                    <i class="fa fa-fw fa-tachometer-alt"></i> {{ $menu['label'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>