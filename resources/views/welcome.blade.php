<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet"> 
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen mybg dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-400 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-400 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="saride flex justify-center align-item-center pt-8 sm:justify-start sm:pt-0">
                    <div class="mt-4"><img src="https://img.icons8.com/doodle/96/000000/hang-10.png"/></div> 
                    <div><h1 style="font-family: Pacifico; font-size:56px; color:lightblue;">sa ride!</h1> </div>
                </div>
                @if (Route::has('login'))
                    @auth
                    <div class="flex flex-wrap place-content-center">
                                            <!-- component -->
                    <div class="mt-8 w-5/12 flex justify-center rounded mx-2">
                        <div class=" px-6  py-8 bg-contain rounded-lg shadow-lg text-center">
                            <div class="mb-3 text-center">
                                <img
                                class="w-20 h-20 mx-1 rounded-lg"
                                src="https://images.unsplash.com/photo-1498330177096-689e3fb901ca?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1567&q=80"
                                alt=""
                                />
                            </div>
                        <a href="#" class="px-1 py-1 font bg-indigo-500 text-center text-white rounded-lg">allSpots</a>
                        </div>
                    </div>
                    <!-- component -->
                    <div class="mt-8 w-5/12 flex justify-center rounded">
                        <div class=" px-6  py-8 bg-contain rounded-lg shadow-lg text-center">
                            <div class="mb-3 text-center">
                                <img
                                class="w-20 h-20 mx-1 rounded-lg"
                                src="https://images.unsplash.com/photo-1498330177096-689e3fb901ca?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1567&q=80"
                                alt=""
                                />
                            </div>
                        <a href="#" class="px-1 py-1 font bg-indigo-500 text-center text-white rounded-lg">News</a>
                        </div>
                    </div>
                    <!-- component -->
                    <div class="mt-8 w-5/12 flex justify-center mx-2  rounded">
                        <div class=" px-6  py-8 bg-contain rounded-lg shadow-lg text-center">
                            <div class="mb-3 align">
                                <img
                                class="w-20 h-20 rounded-lg"
                                src="https://images.unsplash.com/photo-1537519646099-335112f03225?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8NHx8c3VyZnxlbnwwfHwwfA%3D%3D&auto=format&fit=crop&w=900&q=60"
                                alt=""
                                />
                            </div>
                            <div><a href="#" class="px-1 py-1 font bg-indigo-500 text-center text-white rounded-lg">SurfShops</a></div>
                        </div>
                    </div>
                    <!-- component -->
                    <div class="mt-8 w-5/12 flex justify-center rounded">
                        <div class=" px-6  py-8 bg-contain rounded-lg shadow-lg text-center">
                            <div class="mb-3 text-center">
                                <img
                                class="w-20 h-20 rounded-lg"
                                src="https://images.unsplash.com/photo-1498330177096-689e3fb901ca?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1567&q=80"
                                alt=""
                                />
                            </div>
                        <a href="#" class="px-1 py-1 font bg-indigo-500 text-center text-white rounded-lg"> mySpots</a>
                        </div>
                    </div>
                    </div>
                    @else
                </div>
                @endif
            @endif
        </div>
    </body>
</html>
