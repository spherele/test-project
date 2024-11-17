@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="site-main__title">
            <h1>О нашей компании</h1>
        </div>

        <div class="container-row">
            <div class="md:w-1/2">
                <p>
                    Наша компания была основана в 2010 году с целью предоставить качественные
                    и инновационные решения в области технологий. Мы стремимся к совершенству в
                    каждом проекте и гордимся нашими достижениями. Мы работаем с рядом крупных
                    партнеров и предлагаем своим клиентам решения, соответствующие самым высоким
                    стандартам качества.
                </p>
                <p>
                    Наша команда состоит из высококвалифицированных специалистов, которые обладают
                    богатым опытом и готовы предложить вам лучшие решения. Мы уверены, что каждый
                    проект требует индивидуального подхода, и всегда готовы выслушать ваши идеи и пожелания.
                </p>
            </div>

            <div class="md:w-1/2 mt-8 md:mt-0">
                <div id="yandex-map" style="width: 100%; height: 400px;"></div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=88d281db-7bef-4608-a908-523623a6cf06" type="text/javascript" defer></script>
    @vite('resources/js/yandex-map.js')
@endpush
