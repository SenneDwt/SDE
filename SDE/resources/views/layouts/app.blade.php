<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - AI Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <a href="/" class="text-2xl font-bold text-blue-600">AI Solutions</a>
                    </div>
                    <div class="hidden md:ml-6 md:flex md:space-x-8">
                        <a href="/" class="inline-flex items-center px-1 pt-1 text-gray-900 hover:text-blue-600">Home</a>
                        <a href="/about" class="inline-flex items-center px-1 pt-1 text-gray-900 hover:text-blue-600">Over Ons</a>
                        <a href="/services" class="inline-flex items-center px-1 pt-1 text-gray-900 hover:text-blue-600">Diensten</a>
                        <a href="/contact" class="inline-flex items-center px-1 pt-1 text-gray-900 hover:text-blue-600">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-12">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">AI Solutions</h3>
                    <p class="text-gray-300">Innovatieve AI-oplossingen voor uw bedrijf</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact</h3>
                    <p class="text-gray-300">Email: info@aisolutions.nl</p>
                    <p class="text-gray-300">Tel: +31 6 12345678</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Volg Ons</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-300 hover:text-white"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-8 text-center">
                <p class="text-gray-300">&copy; 2024 AI Solutions. Alle rechten voorbehouden.</p>
            </div>
        </div>
    </footer>
</body>
</html> 