document.addEventListener('DOMContentLoaded', function () {
    ymaps.ready(function() {
        let myMap = new ymaps.Map('yandex-map', {
            center: [55.7558, 37.6173],
            zoom: 16
        });

        let myPlacemark = new ymaps.Placemark([55.7558, 37.6173], {
            hintContent: 'Местоположение нашей компании',
            balloonContent: 'Адрес: Москва, Красная площадь, 1'
        });

        myMap.geoObjects.add(myPlacemark);
    });
});
