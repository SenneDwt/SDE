@extends('layouts.app')

@section('title', 'Over Ons')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 circuit-bg"></div>
        
        <!-- Floating particles -->
        <div class="particle" style="top: 20%; left: 10%; animation-delay: 0s;"></div>
        <div class="particle" style="top: 60%; left: 20%; animation-delay: 1s;"></div>
        <div class="particle" style="top: 30%; left: 80%; animation-delay: 2s;"></div>
        <div class="particle" style="top: 70%; left: 70%; animation-delay: 3s;"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="mb-8">
                <span class="text-blue-400 font-semibold text-sm uppercase tracking-wider">Ons Verhaal</span>
            </div>
            <div class="floating">
                <h1 class="text-5xl md:text-7xl font-extrabold mb-6">
                    <span class="text-white">Over </span>
                    <span class="gradient-text">SDE</span>
                </h1>
            </div>
            <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-4xl mx-auto leading-relaxed">
                Als tech-enthousiasteling help ik bedrijven verder met praktische en slimme AI-oplossingen.
            </p>
        </div>
        
        <!-- Animated AI Brain -->
        <div class="absolute bottom-10 right-10 w-32 h-32 opacity-20">
            <div class="w-full h-full rounded-full border-2 border-blue-500 neural-network">
                <div class="w-full h-full rounded-full border-2 border-purple-500 animate-pulse"></div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-20 bg-slate-800/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-white mb-6">
                        Mijn <span class="gradient-text">Missie</span>
                    </h2>
                    <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                        Als tech-enthousiasteling geloof ik dat slimme technologie bedrijven vooruit helpt. 
                        Ik maak AI toegankelijk en praktisch, zodat je er direct voordeel van hebt.
                    </p>
                    <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                        Met mijn ervaring in AI en kennis van bedrijfsprocessen maak ik oplossingen 
                        die echt werken voor jouw bedrijf.
                    </p>
                </div>
                <div class="hologram-border rounded-3xl p-8 ai-card">
                    <div class="aspect-video bg-gradient-to-br from-blue-500/20 to-purple-600/20 rounded-2xl flex items-center justify-center mb-6 relative overflow-hidden">
                        <div class="service-feature absolute inset-0"></div>
                        <div class="relative z-10">
                            <i class="fas fa-rocket text-6xl text-blue-400 pulse-animation"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   

    <!-- Values Section -->
    <section class="py-20 bg-slate-800/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-sm font-semibold text-blue-400 uppercase tracking-wider mb-4">Onze Waarden</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Wat mij <span class="gradient-text">drijft</span>
                </h3>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Dit zijn de principes waar ik voor sta.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-slate-800/80 backdrop-blur-sm rounded-2xl p-8 border border-slate-700 hover:border-blue-500 transition-all duration-300 group hover:transform hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:rotate-12 transition-transform duration-300">
                        <i class="fas fa-lightbulb text-2xl text-white"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-4">Innovatie</h4>
                    <p class="text-gray-300 leading-relaxed">
                        Ik blijf altijd op de hoogte van de nieuwste ontwikkelingen en pas deze toe in praktische oplossingen.
                    </p>
                </div>

                <div class="bg-slate-800/80 backdrop-blur-sm rounded-2xl p-8 border border-slate-700 hover:border-blue-500 transition-all duration-300 group hover:transform hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6 group-hover:rotate-12 transition-transform duration-300">
                        <i class="fas fa-handshake text-2xl text-white"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-4">Partnerschap</h4>
                    <p class="text-gray-300 leading-relaxed">
                        Ik werk graag samen met je om de beste oplossingen te vinden voor jouw specifieke situatie.
                    </p>
                </div>

                <div class="bg-slate-800/80 backdrop-blur-sm rounded-2xl p-8 border border-slate-700 hover:border-blue-500 transition-all duration-300 group hover:transform hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-600 rounded-2xl flex items-center justify-center mb-6 group-hover:rotate-12 transition-transform duration-300">
                        <i class="fas fa-chart-line text-2xl text-white"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-4">Resultaatgericht</h4>
                    <p class="text-gray-300 leading-relaxed">
                        Ik focus op concrete resultaten die jouw bedrijf verder helpen.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Klaar om samen te <span class="gradient-text">werken</span>?
                </h2>
                <p class="text-xl text-gray-300 mb-12 max-w-3xl mx-auto">
                    Laten we samen kijken hoe ik jouw bedrijf kan helpen met mijn slimme oplossingen.
                </p>
                <a href="/contact" class="inline-block bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 px-8 py-4 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 ai-glow">
                    <i class="fas fa-envelope mr-2"></i>Neem Contact Op
                </a>
            </div>
        </div>
    </section>
@endsection 