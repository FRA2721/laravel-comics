@extends('layouts.app')

{{-- yield content --}}
@section('content')

{{-- banner section --}}
    <section class="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="jumbo comics">

        <div class="container">
            <div class="current-serie">
                <h4>CURRENT SERIES</h4>
            </div>
        </div>

    </section>
    {{-- /banner section --}}

    {{-- film section --}}
    <section class="film">
        <div class="container">
            <div class="film-list">
                
                {{-- iteration for each film --}}
                @foreach ($films as $film)
                    <div class="card-films">
                        <img src="{{ $film['thumb'] }}" alt="{{ $film['title'] }}">
                        <h4>{{ $film['title'] }}</h4>
                        <h6>{{ $film['sale_date'] }}</h6>
                        <h5>{{ $film['price'] }}</h5>
                    </div>
                @endforeach
                    {{-- /iteration for each film --}}
                
            </div>
            <button class="btn-more">LOAD MORE</button>
        </div>
    </section>
    {{-- /film section --}}

@endsection