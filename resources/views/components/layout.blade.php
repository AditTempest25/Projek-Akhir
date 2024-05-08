<!DOCTYPE html>
<html lang="en">

<head class="h-full bg-gray-100">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="h-full">
    <div class="min-h-full">

        <x-navbar></x-navbar>

        <x-header>{{$tittle}}</x-header>

        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>

        <x-footer>

        </x-footer>

    </div>

</body>

</html>