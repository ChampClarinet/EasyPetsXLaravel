<div class="sidebar" data-color="azure" data-background-color="white">
    <div class="logo">
        <a href="{{ $url }}" class="simple-text logo-normal">{{ $name }}</a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ ($active == 1 ? 'active' : '') }}">
                <a class="nav-link" href="{{ URL::to('/') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('pages.index') }}</p>
                </a>
            </li>
            <li class="nav-item {{ ($active == 2 ? 'active' : '') }}">
                <a class="nav-link" href="{{ URL::to('shop/'.$shopId) }}">
                    <i class="material-icons">store</i>
                    <p>{{ __('pages.shopDetails') }}</p>
                </a>
            </li>
            <li class="nav-item {{ ($active == 3 ? 'active' : '') }}">
                <a class="nav-link" href="{{ URL::to('animals') }}">
                    <i class="material-icons">check</i>
                    <p>{{ __('pages.animals') }}</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ URL::to('logout') }}">
                    <i class="material-icons">exit_to_app</i>
                    <p>{{ __('pages.logout') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>