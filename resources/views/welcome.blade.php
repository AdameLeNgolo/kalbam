<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="bg-gray-200">

    
        <div class="flex items-center justify-between flex-wrap bg-black text-white px-6 py-4">

            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
            </div>

            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-md lg:flex-grow">
                    <a href="#" class="block mt-4 lg:inline-block lg:mt-0 mr-4 border px-6 py-1 rounded hover:text-black hover:bg-white">{{ config('app.name') }}</a>
                </div>
            </div>
            
            <div class="">
                <a href="#" class="inline-block text-md px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-black hover:bg-white mt-4 lg:mt-0"> New Account</a>
            </div>
        </div>
        <h1 class="uppercase font-bold">Kalbam Application</h1>
    </body>
</html>
