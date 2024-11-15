import "./libs/trix";
import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

[...document.querySelectorAll('[data-cloak]')].forEach(item => item.removeAttribute('data-cloak'));
