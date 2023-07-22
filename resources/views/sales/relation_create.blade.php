{{-- view to show the sales table contents --}}
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="relative overflow-x-auto py-10">
        @csrf
        <a class="primary-btn inline text-base sm:text  bg-green-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-green-400"
            href="/lead">
            {{-- link to add new sales entry --}}
            BY LEAD ID
        </a>
    </div>
    <div class="relative overflow-x-auto py-10">
        <a class="primary-btn inline text-base sm:text  bg-green-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-green-400"
            href="/relation">
            {{-- link to add new sales entry --}}
            BY RELATION ID
        </a>
    </div>
    
</body>
</html>
