@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Наши услуги</h1>
        <div class="services-list">
            @foreach($services as $service)
                <div class="service-item">
                    <a class="service" href="{{ route('services.show', $service->slug) }}">
                        <div class="service-title">{{ $service->title }}</div>
                        <div class="service-description">{{ $service->description }}</div>
                        <div class="service-btn">Подробнее</div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
