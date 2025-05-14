import domReady from '@/core/domReady'
import GLightbox from 'glightbox';
import 'glightbox/dist/css/glightbox.css';

domReady(() => {
    GLightbox({ selector: '[data-gallery="products"]' });
    GLightbox({ selector: '[data-gallery="reviews"]' });
});