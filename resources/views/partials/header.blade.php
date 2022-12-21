{{-- header section --}}
<header>

    {{-- min header top section  --}}
    <div class="header-top">
        <div class="container">
            <span class="me-5">DC POWER&#8482; VISA&#174;</span>
            <span>ADITIONAL DC SITES</span>
        </div>
    </div>
    {{-- /min header top section --}}

    {{-- header bottom section --}}
    <div class="header-bottom">

        {{-- container section --}}
        <div class="container pt-3 pb-3 d-flex justify-content-between align-items-center">

            {{-- comics logo section --}}
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc comics logo">
            </div>
            {{-- /comics logo section --}}

            {{-- nav link section --}}
            <nav>

                <input type="search" class="form-control rounded mb-4" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />

                <ul class="d-flex justify-content-end">
                    {{-- iteration for each link for header section --}}
                    @foreach ($links as $link)
                        {{-- list item iteration --}}
                        <li>
                            {{-- data for the current route --}}
                            <a class="{{ Route::currentRouteName() === $link['href'] ? 'active' : '' }}" href="{{ $link['href'] != '' ? route($link['href']) : '' }}">{{ $link['name'] }}</a>
                        </li>
                        {{-- /list item iteration --}}
                    @endforeach
                    {{-- /iteration for each link for header section --}}
                </ul>

            </nav>
            {{-- /nav link section --}}

        </div>
        {{-- /container section --}}

    </div>
    {{-- /header bottom section --}}

</header>
{{-- /header section --}}