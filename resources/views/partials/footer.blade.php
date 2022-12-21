{{-- footer section --}}
<footer>

    {{-- links section --}}
    <div class="footer-links">
        
        {{-- container --}}
        <div class="container">
            <div class="navigation-links">

                {{-- links iteration  --}}
                <ul>
                    <h3>DC COMICS</h3>
                    @foreach ($dcComics as $link)
                        <li>
                            <a href="{{ $link['href'] }}">{{ $link['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
                {{-- /links iteration --}}

                {{-- links iteration  --}}
                <ul>
                    <h3>DC</h3>
                    @foreach ($dc as $link)
                        <li>
                            <a href="{{ $link['href'] }}">{{ $link['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
                {{-- /links iteration --}}

                {{-- links iteration  --}}
                <ul>
                    <h3>SITES</h3>
                    @foreach ($sites as $link)
                        <li>
                            <a href="{{ $link['href'] }}">{{ $link['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
                {{-- /links iteration --}}
                
                {{-- links iteration  --}}
                <ul>
                    <h3>SHOP</h3>
                    @foreach ($shop as $link)
                        <li>
                            <a href="{{ $link['href'] }}">{{ $link['name'] }}</a>
                        </li>
                    @endforeach
                </ul>
                {{-- /links iteration --}}

                <p class="mt-4">All Site Content TM and @ 2020 DC Entertrainment, unless otherwise <span><a href="">noted here. </a>All rigth reserved. </span><span><a href="">Cokies Settings</a></span></p cla<p class="mt-4">
                
            </div>

            {{-- footer logo section --}}
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="dc comics logo">
            </div>
            {{-- /footer logo section --}}

        </div>
        {{-- /container --}}

    </div>
    {{-- /links section --}}



    {{-- social section --}}
    <div class="footer-social">

        {{-- container --}}
        <div class="container">

            {{-- sign up now button --}}
            <div class="button">
                <button>SIGN-UP NOW!</button>
            </div>
            {{-- /sign up now button --}}

            {{-- social section icons --}}
            <div class="social-links">
                <h3>FOLLOW US</h3>
                <ul>
                    {{-- facebook data --}}
                    <li>
                        <a href="/facebook">
                            <img src="{{ Vite::asset('resources/img/footer-facebook.png') }}" alt="facebook">
                        </a>
                    </li>

                    {{-- twitter data --}}
                    <li>
                        <a href="/twitter">
                            <img src="{{ Vite::asset('resources/img/footer-twitter.png') }}" alt="twitter">
                        </a>
                    </li>

                    {{-- youtube data                     --}}
                    <li>
                        <a href="/youtube">
                            <img src="{{ Vite::asset('resources/img/footer-youtube.png') }}" alt="youtube">
                        </a>
                    </li>

                    {{-- pinterest data --}}
                    <li>
                        <a href="/pinterest">
                            <img src="{{ Vite::asset('resources/img/footer-pinterest.png') }}" alt="pinterest">
                        </a>
                    </li>

                    {{-- periscope data --}}
                    <li>
                        <a href="/periscope">
                            <img src="{{ Vite::asset('resources/img/footer-periscope.png') }}" alt="periscope">
                        </a>
                    </li>

                </ul>
            </div>
            {{-- /social section icons --}}

        </div>
        {{-- /container --}}

    </div>
    {{-- /social section --}}

</footer>
{{-- /footert section --}}