<html lang="en">
<head>
    <title>Linky</title>

    @vite('resources/js/app.js')
    @livewireStyles
</head>
<body>

<x-linky::menu />

<div class="mx-auto mb-10 max-w-7xl px-4 sm:px-6 lg:px-8">
    {{ $slot }}
</div>

@livewireScripts
</body>
</html>
