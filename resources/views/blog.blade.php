<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-blue-800">

  <!-- Sidebar -->
  <div class="flex h-screen">
    <aside class="w-64 bg-blue-700 text-white">
      <div class="p-4">
        <h1 class="text-2xl font-bold">Dashboard</h1>
      </div>
      <nav>
        <ul>
          <li class="px-4 py-2 hover:bg-blue-600">
            <a href="#" class="block">Home</a>
          </li>
          <li class="px-4 py-2 hover:bg-blue-600">
            <a href="#" class="block">About</a>
          </li>
          <li class="px-4 py-2 hover:bg-blue-600">
            <a href="#" class="block">Settings</a>
          </li>
        </ul>
      </nav>
    </aside>

    <!-- Main Content -->
    <div class="flex-1 flex flex-col">
      <!-- Top Bar -->
      <header class="bg-blue-800 text-white p-4">
        <div class="flex justify-between">
          <div class="text-xl">Home</div>
          <div class="text-sm">Welcome, User</div>
        </div>
      </header>

      <!-- Content Area -->
      <main class="flex-1 p-6 bg-white">
        <h2 class="text-2xl font-semibold mb-4">Welcome to the Dashboard</h2>
        <p class="text-blue-700">This is your main content area. Customize it as you like!</p>
      </main>
    </div>
  </div>

</body>
</html>
