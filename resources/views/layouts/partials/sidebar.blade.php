<div class="sidebar sidebar-dark bg-dark">
    <ul class="list-unstyled">
        @foreach(config('menu') as $menu)
            <li>
                <a href="{{ route($menu['route']) }}">
                    @if(isset($menu['icon']))
                        {!! $menu['icon'] !!}
                    @else
                        <i class="fa fa-flag"></i>
                    @endif
                    {{ $menu['label'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>