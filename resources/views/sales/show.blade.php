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
        <a class="primary-btn inline text-base sm:text  bg-green-500 py-4 px-4 shadow-xl rounded-full transition-all hover:bg-green-400"
            href="/create">
            {{-- link to add new sales entry --}}
            ADD NEW ENTRY
        </a>
        {{-- To display in table format --}}
        <div class="py-10">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">SALES ID</th>
                        <th scope="col" class="px-6 py-3">FIRST NAME</th>
                        <th scope="col" class="px-6 py-3">LAST NAME</th>
                        <th scope="col" class="px-6 py-3">POSTCODE</th>
                        <th scope="col" class="px-6 py-3">CITY</th>
                        <th scope="col" class="px-6 py-3">STREET NAME</th>
                    </tr>
                </thead>
                {{-- Iterating through $sales to ooutput each row --}}
                @foreach ($sales as $row)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">{{ $row['id'] }}</td>
                        <td class="px-6 py-4">{{ $row['first_name'] }}</td>
                        <td class="px-6 py-4">{{ $row['last_name'] }}</td>
                        <td class="px-6 py-4">{{ $row['postcode'] }}</td>
                        <td class="px-6 py-4">{{ $row['city'] }}</td>
                        <td class="px-6 py-4">{{ $row['street_name'] }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>

</html>
