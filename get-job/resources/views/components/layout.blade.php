<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>get('/job')</title>
    @vite(['resources/js/app.js'])
</head>
<body class="bg-[#060606] text-[#f6f6f6] pb-20">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="logo" class="size-[32px]">
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="">Jobs</a>
                <a href="">Careers</a>
                <a href="">Salaries</a>
                <a href="">Companies</a>
            </div>
            @auth
                <div class="space-x-4 font-bold flex">
                    <a href="/jobs/create">Post Job</a>

                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Log Out</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-4 font-bold">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Log In</a>
                </div>
            @endguest
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
    
</body>
</html>