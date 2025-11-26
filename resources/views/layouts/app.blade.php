<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS Kasir</title>

    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="min-h-screen">
        <nav class="bg-white shadow p-4 flex justify-between items-center">
            <h1 class="text-xl font-bold">POS Kasir</h1>
            <form action="/logout" method="POST">
                @csrf
                <button class="px-4 py-2 bg-red-500 text-white rounded">Logout</button>
            </form>
        </nav>

        <main class="p-6">
            @yield('content')
        </main>
    </div>

    @livewireScripts
</body>
</html>
