@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="site-main__title">
            <h1>Контакты</h1>
        </div>

        <div class="flex flex-row md:flex-row gap-8 items-center">
            <div class="md:w-1/2">
                <h2 class="text-2xl font-semibold mb-4">Наши контакты</h2>
                <p>
                    Мы рады ответить на все ваши вопросы. Вы можете связаться с нами любым удобным способом:
                </p>
                <ul class="list-disc pl-5 mt-4">
                    <li><strong>Телефон:</strong> +7 123 456-78-90</li>
                    <li><strong>Электронная почта:</strong> info@company.com</li>
                    <li><strong>Адрес:</strong> Москва, ул. Примерная, 1, офис 101</li>
                    <li><strong>Часы работы:</strong> Пн-Пт, с 9:00 до 18:00</li>
                </ul>
            </div>

            <div class="md:w-1/2">
                <div id="yandex-map" style="width: 100%; height: 400px;"></div>
            </div>
        </div>

        <div class="mt-8">
            <h2 class="text-2xl font-semibold mb-4">Напишите нам</h2>
            <form action="{{ route('contacts.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Ваше имя</label>
                    <input type="text" id="name" name="name" class="mt-2 block w-full p-3 border border-gray-300 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Электронная почта</label>
                    <input type="email" id="email" name="email" class="mt-2 block w-full p-3 border border-gray-300 rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-700">Сообщение</label>
                    <textarea id="message" name="message" class="mt-2 block w-full p-3 border border-gray-300 rounded-lg" required></textarea>
                </div>
                <button type="submit" class="py-2 px-6 bg-blue-600 text-white rounded-lg">Отправить</button>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=88d281db-7bef-4608-a908-523623a6cf06" type="text/javascript"></script>
    @vite('resources/js/yandex-map.js')
@endpush
