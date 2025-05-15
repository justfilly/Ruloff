if (typeof ymaps !== 'undefined') {
    ymaps.ready(() => {
        const map = new ymaps.Map('yandex-map', {
            center: [56.2965, 43.9361],
            zoom: 12
        });

        const placemark = new ymaps.Placemark([56.2965, 43.9361], {
            hintContent: 'Руль Сервис 52',
            balloonContent: 'Нижний Новгород, Россия'
        });

        map.geoObjects.add(placemark);
    });
}