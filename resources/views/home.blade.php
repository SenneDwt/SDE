@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 circuit-bg"></div>
        
        <!-- Floating particles -->
        <div class="particle" style="top: 20%; left: 10%; animation-delay: 0s;"></div>
        <div class="particle" style="top: 60%; left: 20%; animation-delay: 1s;"></div>
        <div class="particle" style="top: 30%; left: 80%; animation-delay: 2s;"></div>
        <div class="particle" style="top: 70%; left: 70%; animation-delay: 3s;"></div>

        <!-- Floating Robot Icons -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <i class="fas fa-robot absolute text-blue-500/20 text-6xl top-1/4 left-1/4 animate-float-slow"></i>
            <i class="fas fa-microchip absolute text-purple-500/20 text-5xl top-1/3 right-1/4 animate-float-medium"></i>
            <i class="fas fa-brain absolute text-blue-500/20 text-7xl bottom-1/4 left-1/3 animate-float-fast"></i>
            <i class="fas fa-cogs absolute text-purple-500/20 text-6xl bottom-1/3 right-1/3 animate-float-slow"></i>
            <i class="fas fa-network-wired absolute text-blue-500/20 text-5xl top-2/3 left-1/4 animate-float-medium"></i>
            <i class="fas fa-code absolute text-purple-500/20 text-6xl top-1/4 right-1/3 animate-float-fast"></i>
        </div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="mb-8">
                <span class="text-blue-400 font-semibold text-sm uppercase tracking-wider">AI Oplossingen</span>
            </div>
            <div class="floating">
                <h1 class="text-5xl md:text-7xl font-extrabold mb-6">
                    <span class="text-white">Transformeer je bedrijf met </span>
                    <span class="gradient-text">SDE</span>
                </h1>
            </div>
            <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-4xl mx-auto leading-relaxed">
                Ontdek hoe mijn slimme AI-oplossingen jouw bedrijf kunnen helpen groeien. Ik maak technologie toegankelijk en effectief.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/services" class="bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 px-8 py-4 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 ai-glow">
                    <i class="fas fa-rocket mr-2"></i>Bekijk Onze Diensten
                </a>
                <a href="/contact" class="bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 px-8 py-4 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 ai-glow text-white">
                    <i class="fas fa-envelope mr-2"></i>Neem Contact Op
                </a>
            </div>
        </div>
        
        <!-- Animated AI Brain -->
        <div class="absolute bottom-10 right-10 w-32 h-32 opacity-20">
            <div class="w-full h-full rounded-full border-2 border-blue-500 neural-network">
                <div class="w-full h-full rounded-full border-2 border-purple-500 animate-pulse"></div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-20 bg-slate-800/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-sm font-semibold text-blue-400 uppercase tracking-wider mb-4">Onze Expertise</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Waarom kiezen voor <span class="gradient-text">SDE?</span>
                </h3>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Ik maak slimme AI-oplossingen die direct resultaat leveren voor jouw bedrijf.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-slate-800/80 backdrop-blur-sm rounded-2xl p-8 border border-slate-700 hover:border-blue-500 transition-all duration-300 group hover:transform hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:rotate-12 transition-transform duration-300">
                        <i class="fas fa-cogs text-2xl text-white"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-4">Automatisatie</h4>
                    <p class="text-gray-300 leading-relaxed">
                        Slimme workflow oplossingen die tijd besparen en productiviteit verhogen.
                    </p>
                </div>

                <div class="bg-slate-800/80 backdrop-blur-sm rounded-2xl p-8 border border-slate-700 hover:border-blue-500 transition-all duration-300 group hover:transform hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6 group-hover:rotate-12 transition-transform duration-300">
                        <i class="fas fa-headset text-2xl text-white"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-4">24/7 Support</h4>
                    <p class="text-gray-300 leading-relaxed">
                        Zodra jouw chatbot is geïnstalleerd, ben je 24/7 beschikbaar voor je klanten.
                    </p>
                </div>

                <div class="bg-slate-800/80 backdrop-blur-sm rounded-2xl p-8 border border-slate-700 hover:border-blue-500 transition-all duration-300 group hover:transform hover:scale-105">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-teal-600 rounded-2xl flex items-center justify-center mb-6 group-hover:rotate-12 transition-transform duration-300">
                        <i class="fas fa-rocket text-2xl text-white"></i>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-4">Snelle Implementatie</h4>
                    <p class="text-gray-300 leading-relaxed">
                        We gaan snel van start met jouw project.
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
                    Klaar om te <span class="gradient-text">starten</span>?
                </h2>
                <p class="text-xl text-gray-300 mb-12 max-w-3xl mx-auto">
                    Laten we samen kijken hoe ik jouw bedrijf kan helpen met mijn slimme oplossingen.
                </p>
                <a href="/contact" class="inline-block bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 px-8 py-4 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 ai-glow text-white">
                    <i class="fas fa-envelope mr-2"></i>Neem Contact Op
                </a>
            </div>
        </div>
    </section>
@endsection