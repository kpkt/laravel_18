<div class="sidebar sidebar-dark bg-dark">
    <ul class="list-unstyled">
        @foreach(config('menu') as $menu)
            <li>
                <a href="{{ route($menu['route']) }}">
                    {{ $menu['label'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>