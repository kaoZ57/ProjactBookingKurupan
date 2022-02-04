<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('เว็บไซต์จองคุรุพันธ์', 'เว็บไซต์จองคุรุพันธ์') }}</title>

    <!-- Icon -->
    <link rel="icon" href="{{ url('css/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.css"
        integrity="sha256-16PDMvytZTH9heHu9KBPjzrFTaoner60bnABykjNiM0=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.css"
        integrity="sha256-zsz1FbyNCtIE2gIB+IyWV7GbCLyKJDTBRz0qQaBSLxM=" crossorigin="anonymous">
    <link href='fullcalendar/main.css' rel='stylesheet' />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma-rtl.min.css">

    <link href="~bulma-calendar/dist/css/bulma-calendar.min.css" rel="stylesheet">
    <script src="~bulma-calendar/dist/js/bulma-calendar.min.js"></script>

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.min.js"
        integrity="sha256-XOMgUu4lWKSn8CFoJoBoGd9Q/OET+xrfGYSo+AKpFhE=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/main.js"
        integrity="sha256-nCXGH8kkPFozCBx4meHWhA5OCqXhhBzoBVpHfM/HmwM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.min.js"
        integrity="sha256-GcByKJnun2NoPMzoBsuCb4O2MKiqJZLlHTw3PJeqSkI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.10.1/locales-all.js"
        integrity="sha256-Mu1bnaszjpLPWI+/bY7jB6JMtHj5nn9zIAsXMuaNxdk=" crossorigin="anonymous"></script>
    <script src='fullcalendar/main.js'></script>
    <script src='fullcalendar/core/main.js'></script>
    <script src='fullcalendar/core/locales-all.js'></script>

    <style>
        #foo {
            position: fixed;
            bottom: 0;
            right: 0;
        }

    </style>

</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-5 px-4 sm:px-6 lg:px-8">
                    {{ $header }}

                </div>
            </header>
        @endif
        <script src='https://storage.ko-fi.com/cdn/scripts/overlay-widget.js'></script>
        <script>
            kofiWidgetOverlay.draw('kaophongam', {
                'type': 'floating-chat',
                'floating-chat.donateButton.text': 'Support Me',
                'floating-chat.donateButton.background-color': '#ff5f5f',
                'floating-chat.donateButton.text-color': '#fff'
            });
        </script>

        <!-- Page Content -->
        <main>
            {{ $slot }}
            <div id="foo"><a
                    href="https://wakatime.com/badge/user/2e4c9efc-2112-4cb7-b704-df292575fa01/project/2a356437-0e6e-4f58-91ff-c4c8ebbb1648"><img
                        src="https://wakatime.com/badge/user/2e4c9efc-2112-4cb7-b704-df292575fa01/project/2a356437-0e6e-4f58-91ff-c4c8ebbb1648.svg"
                        alt="wakatime"></a></div>
        </main>
    </div>

    @stack('modals')

    @livewireScripts

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth'
            });
            calendar.render();
        });
    </script>

    <script>
        // Initialize all input of type date
        var calendars = bulmaCalendar.attach('[type="date"]', options);

        // Loop on each calendar initialized
        for (var i = 0; i < calendars.length; i++) {
            // Add listener to select event
            calendars[i].on('select', date => {
                console.log(date);
            });
        }

        // To access to bulmaCalendar instance of an element
        var element = document.querySelector('#my-element');
        if (element) {
            // bulmaCalendar instance is available as element.bulmaCalendar
            element.bulmaCalendar.on('select', function(datepicker) {
                console.log(datepicker.data.value());
            });
        }

        var calendars = new bulmaCalendar('.bulmaCalendar', {
            dateFormat: 'dd.MM.yyyy' // 01.01.2021
        });

        var calendar = new Calenar(calendarEl, {
            locale: 'th'
        });
        calendar.setOption('locale', 'th');
    </script>
</body>

</html>
