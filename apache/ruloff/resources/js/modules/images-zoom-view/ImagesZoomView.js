import domReady from '@/core/domReady'
import lightGallery from 'lightgallery';
import lgZoom from 'lightgallery/plugins/zoom';
import 'lightgallery/css/lightgallery.css';
import 'lightgallery/css/lg-zoom.css';

domReady(() => {
    lightGallery(document.getElementById('product-gallery'), {
        selector: '.zoomable',
        plugins: [lgZoom],
        zoom: true,
        download: false,
        zoomOnWheel: true
    });

    lightGallery(document.getElementById('review-gallery'), {
        selector: '.zoomable',
        plugins: [lgZoom],
        zoom: true,
        download: false,
        zoomOnWheel: true
    });
});