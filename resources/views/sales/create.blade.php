{{-- form to get the id entry --}}
{{-- @include('Http/Controllers/SalesController.php') --}}
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Sales Dock Task
    </title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <div class="sm:py-10">

    </div>
    </div>
    <html>

    <body>
        {{-- <form class="w-px-500 p-3 p-md-3" action="{{ route('store') }}" method="post"> --}}
        @csrf
        <div class="w-4/5 mx-auto">
            <div class="text-center pt-10">
                <h1 class="text-3xl text-gray-700">
                    New Sales Entry
                </h1>
            </div>
            <div class="m-auto pt-10">
                <form action="/store" method="/store" enctype="multipart/form-data">


                   <div class="flex items-center mb-4">
    <input id="lead-radio" checked onclick="text_display()" type="radio" value="leads" name="table" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="lead-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">LEAD ID</label>
</div>
<div class="flex items-center py-10">
    <input id="relation-radio" onclick="text_display()" type="radio" value="relations" name="table" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
    <label for="relation-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">RELATION ID</label>
</div>
<div class="flex items-center">
    <label for="">Enter ID:</label>
    <input type='text' id='getid' name='id' required><br>
</div>
{{-- <div class="flex items-center py-10">
    <label for="">RELATION ID</label>
    <input type='text' id='getid' name='relation_id'><br>
</div> --}}
<div class="flex items-center py-10">
                    <button type="submit"
                        class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                        Submit
                    </button>
</div>
            </div>
        </div>
        </form>
    </body>

    </html>