<!DOCTYPE html>
<html lang="nl" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Solutions - @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        body { 
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #60a5fa 0%, #a78bfa 50%, #06b6d4 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .ai-card {
            background: linear-gradient(145deg, rgba(30, 41, 59, 0.8), rgba(15, 23, 42, 0.9));
            backdrop-filter: blur(20px);
            border: 1px solid rgba(96, 165, 250, 0.2);
            transition: all 0.4s ease;
        }
        
        .ai-card:hover {
            transform: translateY(-10px) scale(1.02);
            border-color: #60a5fa;
            box-shadow: 0 25px 50px rgba(96, 165, 250, 0.3);
        }
        
        .tech-grid {
            background-image: 
                linear-gradient(rgba(96,165,250,0.1) 1px, transparent 1px),
                linear-gradient(90deg, rgba(96,165,250,0.1) 1px, transparent 1px);
            background-size: 50px 50px;
        }
        
        .pulse-animation {
            animation: pulse-glow 2s infinite;
        }
        
        @keyframes pulse-glow {
            0%, 100% { opacity: 0.6; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.05); }
        }
        
        .service-feature {
            position: relative;
            overflow: hidden;
        }
        
        .service-feature::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: conic-gradient(from 0deg, transparent, rgba(96,165,250,0.1), transparent);
            animation: rotate 4s linear infinite;
        }
        
        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        .hologram-border {
            position: relative;
            background: linear-gradient(45deg, rgba(96,165,250,0.1), rgba(167,139,250,0.1));
            border: 1px solid transparent;
        }
        
        .hologram-border::before {
            content: '';
            position: absolute;
            inset: 0;
            padding: 2px;
            background: linear-gradient(45deg, #60a5fa, #a78bfa, #06b6d4);
            border-radius: inherit;
            mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            mask-composite: exclude;
        }
        
        .ai-glow {
            box-shadow: 0 0 50px rgba(96, 165, 250, 0.3);
        }
        
        .floating {
            animation: floating 3s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .circuit-bg {
            background-image: radial-gradient(circle at 25px 25px, rgba(255,255,255,0.1) 2px, transparent 0),
                              radial-gradient(circle at 75px 75px, rgba(96,165,250,0.1) 2px, transparent 0);
            background-size: 100px 100px;
        }
        
        .neural-network {
            position: relative;
            overflow: hidden;
        }
        
        .neural-network::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, transparent 40%, rgba(96,165,250,0.1) 50%, transparent 60%);
            transform: translateX(-100%);
            animation: shimmer 3s infinite;
        }
        
        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        
        .particle {
            position: absolute;
            width: 2px;
            height: 2px;
            background: #60a5fa;
            border-radius: 50%;
            animation: particle-float 4s infinite ease-in-out;
        }
        
        @keyframes particle-float {
            0%, 100% { transform: translateY(0) rotate(0deg); opacity: 0; }
            50% { transform: translateY(-50px) rotate(180deg); opacity: 1; }
        }
        
        /* Mobile menu styles */
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
        }
        
        .mobile-menu.active {
            transform: translateX(0);
        }
        
        @media (max-width: 768px) {
            .mobile-menu {
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                width: 100%;
                background: rgba(15, 23, 42, 0.95);
                backdrop-filter: blur(10px);
                z-index: 50;
            }
        }
    </style>
    @yield('additional_styles')
</head>
<body class="bg-slate-900 text-white">
    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-slate-900/80 backdrop-blur-lg border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo and Text - Left on desktop, centered on mobile -->
                <div class="md:static absolute left-1/2 md:left-0 transform md:transform-none -translate-x-1/2 md:translate-x-0">
                    <a href="/" class="flex items-center group whitespace-nowrap">
                        <img src="/images/SDE.png" alt="SDE Agency Logo" class="h-10 w-auto mr-3 rounded-full transition-transform duration-200 group-hover:scale-105 group-hover:shadow-lg" />
                        <span class="text-2xl font-bold gradient-text transition-colors duration-200 group-hover:text-blue-400">SDE Agency</span>
                    </a>
                </div>
                
                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="flex items-baseline space-x-8">
                        <a href="/" class="text-gray-300 hover:text-blue-400 px-3 py-2 text-sm font-medium transition-colors">Home</a>
                        <a href="/services" class="text-gray-300 hover:text-blue-400 px-3 py-2 text-sm font-medium transition-colors">Diensten</a>
                        <a href="/about" class="text-gray-300 hover:text-blue-400 px-3 py-2 text-sm font-medium transition-colors">Over Ons</a>
                        <a href="/contact" class="text-gray-300 hover:text-blue-400 px-3 py-2 text-sm font-medium transition-colors">Contact</a>
                    </div>
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-300 hover:text-white p-2">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu md:hidden">
        <div class="flex justify-end p-4">
            <button id="close-menu-button" class="text-gray-300 hover:text-white p-2">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>
        <div class="px-4 py-6">
            <div class="flex flex-col space-y-4">
                <a href="/" class="text-gray-300 hover:text-blue-400 px-3 py-2 text-lg font-medium transition-colors">Home</a>
                <a href="/services" class="text-gray-300 hover:text-blue-400 px-3 py-2 text-lg font-medium transition-colors">Diensten</a>
                <a href="/about" class="text-gray-300 hover:text-blue-400 px-3 py-2 text-lg font-medium transition-colors">Over Ons</a>
                <a href="/contact" class="text-gray-300 hover:text-blue-400 px-3 py-2 text-lg font-medium transition-colors">Contact</a>
            </div>
        </div>
    </div>

    <script>
        // Mobile menu functionality
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const closeMenuButton = document.getElementById('close-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.add('active');
            document.body.style.overflow = 'hidden';
        });

        closeMenuButton.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            document.body.style.overflow = '';
        });

        // Close menu when clicking outside
        mobileMenu.addEventListener('click', (e) => {
            if (e.target === mobileMenu) {
                mobileMenu.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    </script>
</body>
</html> 