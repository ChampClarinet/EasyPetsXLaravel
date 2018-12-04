<nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="dropdown">
                <a class="dropdown-toggle collapse-menu" data-toggle="dropdown">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="dropdown-menu" style="overflow:hidden; height: auto; background-color: #ffffff">
                    <li>
                        <a href="{{ URL::to('/') }}">{{  __('pages.index') }}</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('shop/'.$shopId) }}">{{ __('pages.shopDetails') }}</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('animals') }}">{{ __('pages.animals') }}</a>
                    </li>
                    <li>
                        <a href="{{ URL::to('logout') }}">{{ __('pages.logout') }}</a>
                    </li>
                </div>
            </div>
            <a class="navbar-brand" href="#">{{ $pageTitle }}</a>
        </div>
    </div>
</nav>