<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Job-board</title>
        @vite('resources/css/app.css')
    </head>
    <body class="mx-auto mt-10 max-w-2xl bg-gradient-to-r from-cyan-100 to-blue-100 text-slate-700">
       <nav class="mb-8 flex justify-between text-lg font-medium">
        <ul class="flex space-x-3">
            <li><a href="{{ route('jobs.index')}}">Home</a></li>
        </ul>
        <ul class="flex space-x-2">
            @auth
            <li>
                {{ auth()->user()->name ?? "Anynomus"}}
                <a href="{{ route('my-job-applications.index')}}">
                - My Applications
                </a>
        </li>
            <li>
                <form action="{{route('auth.destroy')}}" method="POST">
                @csrf
                @method('DELETE')
                    <button>Logout</button>
                </form>
            </li>
            @else
           <li><a href="{{ route('auth.create')}}">Sign in</a></li>
            @endauth
        </ul>
       </nav>
       @if(session('success'))
           <div role="alert" class="rounded-md my-8 border-l-4 border-green-300 bg-green-100 p-4 text-green-700 opacity-75">
            <p class="font-bold">Success!</p>
               <p>{{ session('success') }}</p>
           </div>
       @endif
        {{ $slot }}
    </body>

</html>