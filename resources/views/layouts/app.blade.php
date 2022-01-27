<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma-rtl.min.css">

    <link href="~bulma-calendar/dist/css/bulma-calendar.min.css" rel="stylesheet">
    <script src="~bulma-calendar/dist/js/bulma-calendar.min.js"></script>

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts

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
    </script>
</body>

</html>
