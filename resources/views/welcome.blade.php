<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factory Admin Panel</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">
    <!-- Navigation Menu -->
    <nav class="bg-white w-full p-4 shadow-md flex justify-between items-center">
        <div class="text-lg font-semibold">
            <a href="/" class="text-purple-700 hover:text-purple-900">Factory Admin Panel</a>
        </div>
        <div>
            <a href="/login" class="text-blue-500 hover:text-blue-700 font-medium">Login</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="flex-grow flex items-center justify-center bg-gradient-to-r from-purple-500 via-blue-500 to-pink-500 text-white text-center p-10">
        <div class="max-w-2xl">
            <h1 class="text-5xl font-bold mb-4">Welcome to the Factory Admin Panel</h1>
            <p class="text-lg mb-6">Effortlessly manage your factory's operations with our intuitive admin panel. Streamline processes, monitor performance, and improve productivity all in one place.</p>
            <a href="/login" class="bg-white text-purple-700 font-semibold px-6 py-3 rounded-full shadow-md hover:bg-purple-100 transition">Get Started</a>
        </div>
    </header>

    <!-- Features Section -->
    <section class="bg-white py-12">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-8">Features</h2>
            <div class="flex flex-wrap justify-center gap-6">
                <div class="bg-gray-100 p-6 rounded-lg shadow-md w-80">
                    <h3 class="text-xl font-semibold mb-4">Real-Time Monitoring</h3>
                    <p class="text-gray-600">Track your factory’s performance in real-time with our comprehensive monitoring tools.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md w-80">
                    <h3 class="text-xl font-semibold mb-4">Detailed Reports</h3>
                    <p class="text-gray-600">Generate detailed reports to analyze and optimize your operations.</p>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow-md w-80">
                    <h3 class="text-xl font-semibold mb-4">User Management</h3>
                    <p class="text-gray-600">Easily manage user access and permissions within your organization.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Factory Admin Panel. All rights reserved.</p>
            <div class="flex justify-center space-x-4 mt-4">
                <a href="#" class="hover:underline">Privacy Policy</a>
                <a href="#" class="hover:underline">Terms of Service</a>
            </div>
        </div>
    </footer>
</body>
</html>
