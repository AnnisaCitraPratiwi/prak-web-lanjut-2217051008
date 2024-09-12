<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-purple-500 to-blue-500 min-h-screen flex items-center justify-center">
    <div class="bg-white shadow-2xl rounded-lg p-10 max-w-2xl w-full transform hover:scale-105 transition-transform duration-300">
        <div class="text-center mb-8">
            <img src="https://i.pinimg.com/564x/8a/e9/e9/8ae9e92fa4e69967aa61bf2bda967b7b.jpg" alt="Profile Icon" class="w-24 h-24 rounded-full mx-auto shadow-lg bg-gray-300">
            <h1 class="text-5xl font-extrabold text-purple-700 mt-4">Hi, {{ $nama }}!</h1>
            <h3 class="text-xl text-gray-600 mt-2">Welcome to Your Profile Page</h3>
        </div>

        <div class="bg-gradient-to-r from-blue-500 to-purple-500 p-6 rounded-lg text-white">
            <h5 class="text-2xl font-bold mb-4">Data Diri</h5>
            <div class="flex items-center mb-3">
                <span class="material-icons text-white mr-2">person</span>
                <p class="text-lg"><span class="font-semibold">Nama:</span> {{ $nama }}</p>
            </div>
            <div class="flex items-center mb-3">
                <span class="material-icons text-white mr-2">school</span>
                <p class="text-lg"><span class="font-semibold">Kelas:</span> {{ $kelas }}</p>
            </div>
            <div class="flex items-center">
                <span class="material-icons text-white mr-2">badge</span>
                <p class="text-lg"><span class="font-semibold">NPM:</span> {{ $npm }}</p>
            </div>
        </div>
        
        <div class="mt-6 flex justify-center space-x-4">
            <button class="bg-blue-600 text-white px-6 py-2 rounded-full font-semibold shadow-lg hover:bg-blue-700 transition-colors duration-300">Edit Profile</button>
            <button class="bg-red-600 text-white px-6 py-2 rounded-full font-semibold shadow-lg hover:bg-red-700 transition-colors duration-300">Logout</button>
        </div>
    </div>
</body>
</html>
