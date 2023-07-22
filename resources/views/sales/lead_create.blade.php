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
    <div class="w-4/5 mx-auto">
        <div class="text-center pt-10">
            <h1 class="text-3xl text-gray-700">
                New Sales Entry
            </h1>
        </div>
        <div class="m-auto pt-10">
            <form action="/create" method="post" enctype="multipart/form-data">
                <label class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300 ">ENTER LEAD ID</label>
                <input type='text' id='leadid' name='lead_id' required><br>
                <button type="submit" class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                        Submit
                    </button>
            </div>

</body>
</html>
