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
        <div class="bg-white shadow-md rounded-md p-8">
            <h2 class="text-2xl font-bold mb-6 text-center">Form Data</h2>
            <p><strong>Name:</strong> {{ $formData->name }}</p>
            <p><strong>Email:</strong> {{ $formData->email }}</p>
            <p><strong>Age:</strong> {{ $formData->age }}</p>
            <p><strong>Rizz Meter:</strong> {{ $formData->rizz }}</p>
            <p><strong>Image:</strong></p>
            <img src="{{ asset('images/'.$formData->image) }}" alt="Uploaded Image">
        </div>
    </div>
</body>

</html>