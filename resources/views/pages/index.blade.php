@extends('layouts.app')

@section('content')

    <div class="content-slider">
        @php
            $firstIndexImages = isset($indices[0]) ? json_decode($indices[0]->images, true) : [];
        @endphp

        @if($firstIndexImages)
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($firstIndexImages as $key => $image)
                        <div class="swiper-slide">
                            <img src="{{ asset('storage/' . $image) }}" alt="slide : {{ $key }}">
                        </div>
                    @endforeach
                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

                <div class="swiper-pagination"></div>
            </div>
        @endif
    </div>

    @foreach($indices as $index)
        <div class="container">
            <div class="content-text">
                <h1>{{ $index->title }}</h1>
                <h2>{{ $index->description }}</h2>

                <p>{{ $index->excerpt }}</p>

                {!! $index->body !!}

                <img src="{{ asset('storage/' . $index->image) }}" alt="">
            </div>
        </div>
    @endforeach

    @push('scripts')
        @vite('resources/js/swiper.js')
    @endpush
@endsection
