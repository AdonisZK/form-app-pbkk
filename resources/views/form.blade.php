<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="resources/css/app.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background-color: #c8a2c8;
        }
    </style>
</head>

<body>
    <div class="flex justify-center items-center h-screen">
        <form method="POST" action="/submit-form" class="bg-white shadow-md rounded-md p-8" enctype="multipart/form-data">
            @csrf
            <h2 class="text-2xl font-bold mb-6 text-center">Rizzology 101 Form</h2>
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                <input type="text" id="name" name="name" class="@error('title') is-invalid @enderror shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " value="{{ old('name') }}">
                @error('name')
                <div class="text-red-500">Enter a name</div>
                @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                <input id="email" name="email" class="@error('title') is-invalid @enderror shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ old('email') }}">
                @error('email')
                <div class="text-red-500">Enter a valid email (@..)</div>
                @enderror
            </div>
            <div class="mb-6">
                <label for="age" class="block mb-2 text-sm font-medium text-gray-900">Age</label>
                <input id="age" name="age" class="@error('title') is-invalid @enderror shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ old('age') }}">
                @error('age')
                <div class="text-red-500">Enter a valid age (1-150)</div>
                @enderror
            </div>
            <div class="mb-6">
                <label for="rizz" class="block mb-2 text-sm font-medium text-gray-900">Rizz Meter (2.5-99.99)</label>
                <input id="rizz" name="rizz" class="@error('title') is-invalid @enderror shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ old('rizz') }}">
                @error('rizz')
                <div class="text-red-500">Enter (2.5-99.99)</div>
                @enderror
            </div>
            <div class="mb-6">
                <label for="image" class="block mb-2 text-sm font-medium text-gray-900">Image (PNG, JPG, JPEG)</label>
                <input type="file" id="image" name="image" class="@error('title') is-invalid @enderror shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" value="{{ old('image') }}">
                @error('image')
                <div class="text-red-500">PNG, JPG, JPEG, Max: 2MB</div>
                @enderror
            </div>
            <div class="flex justify-center">
                <button type="submit" class="mt-1 mb-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 text-white font-medium rounded-lg text-sm px-5 py-2.5 mx-auto">Register</button>
            </div>
            @if(session('success'))
            <div class="bg-green-200 text-green-800 mt-4 p-4 rounded">
                {{ session('success') }}
            </div>
            @endif
        </form>

    </div>
</body>

</html>