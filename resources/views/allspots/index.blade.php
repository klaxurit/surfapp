<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="mybg">
        <div class="mb-5 mt-5 text-center">
            <a href="{{ url()->previous() }}" class="mycolor far fa-caret-square-left fa-lg mb-3"></a>
            <h1 class="font text-4xl underline">AllSpots</h1>
        </div>
            <div class="relative flex flex-wrap items-top justify-center min-h-screen  space-x-4 space-y-4 dark:bg-gray-900 sm:items-center sm:pt-0">
                @foreach($spots as $spot)
                    <div onclick="location.href='{{ route('allspots.show',[$spot->id]) }}';" style="cursor: pointer;" class="px-3 w-4/6 lg:w-1/4 py-5 mb-3 shadow-md hover:shadow-lg rounded border-gray-200">
                        <h2 class="text-xl font mb-2">{{ $spot->name }}</h2>
                        <p class="text-gray-400">{{ Str::limit($spot->description, 50) }}</p>
                        <div class="shadow w-full bg-grey-light mt-2">
                            <div class="bg-pink-300 font-bold text-xs leading-none py-1 text-center text-gray-200" style="width: 80%">Condition :</div>
                        </div>
                    </div>

                @endforeach
            </div>
    </body>
</html>



