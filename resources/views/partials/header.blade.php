<header id="site_header">
    <!-- Site header -->
    <div class="topnav">
        <nav class="container">

            <a href="#">DC Power</a>
            <a href="#">Additional dc Sites</a>

        </nav>
    </div>
    <nav class="menu_wrapper">
        <div class="container">
            <div class="logo">
                <!-- LOGO -->
                <!-- <img src="{{asset('img/dc-logo.png')}}" alt="dc logo"> -->
            </div>
            <div class="main_menu">
                <!-- <ul class="menu">
                    @foreach(config('db.menu') as $item)
                    <li><a class="{{ Route::currentRouteName() === $item['href'] ? 'active' :'' }}" href="{{ route($item['href']) }}"> {{ $item['text'] }}</a></li>
                    @endforeach

                </ul> -->
            </div>
        </div>
    </nav>

</header>