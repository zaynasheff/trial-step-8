<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>


        @livewireStyles
    </head>
    <body>
    <div class="w-full h-screen flex flex-col justify-between items-center bg-[#24201f]">
        <div class="self-stretch h-24 p-5  flex-col justify-start items-start flex">
            <img class="w-[92px] h-[48px] relative" src="img/logo.svg" alt="logo"/>
        </div>

            {{ $slot }}

        <div class="h-7 py-1.5 px-5 justify-end items-center flex w-full">
            <div class="text-[#868484] text-xs font-normal font-['Inter'] leading-none">© Sentric Music 2024</div>
        </div>
    </div>
        @livewireScripts
    </body>
</html>
