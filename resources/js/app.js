require('./bootstrap');

import Alpine from 'alpinejs';
import { Calendar } from '@fullcalendar/core';
import esLocale from '@fullcalendar/core/locales/th';
import frLocale from '@fullcalendar/core/locales/th';

window.Alpine = Alpine;

Alpine.start();

let calendar = new Calendar(calendarEl, {
    locales: [esLocale, frLocale],
    locale: 'th' // the initial locale. of not specified, uses the first one
});

calendar.setOption('locale', 'th');