<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-200 flex justify-center items-center h-screen">
    <div class="bg-blue-500 w-96 p-8 rounded-xl shadow-lg">
        <h1 class="text-white text-3xl font-bold text-center mb-6">SILAHKAN LOGIN</h1>
        <form action="/" method="POST">
            @csrf <!-- Token CSRF untuk keamanan Laravel -->
            <div class="mb-4">
                <input type="email" placeholder="Masukan Email Anda"
                    class="w-full p-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-6">
                <input type="password" placeholder="Password"
                    class="w-full p-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div class="mb-4">
                <button type="submit"
                    class="w-full bg-teal-400 text-white py-3 rounded-md font-semibold hover:bg-teal-500 transition-all duration-300">LOGIN</button>
            </div>
        </form>
        
    </div>
</body>

</html>
