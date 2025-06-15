@extends('layouts.app')

@section('title', 'Onze Diensten')

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
                <span class="text-blue-400 font-semibold text-sm uppercase tracking-wider">AI-Powered Services</span>
            </div>
            <div class="floating">
                <h1 class="text-5xl md:text-7xl font-extrabold mb-6">
                    <span class="text-white">Onze</span>
                    <span class="gradient-text block">Diensten</span>
                </h1>
            </div>
            <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-4xl mx-auto leading-relaxed">
                Ontdek hoe onze geavanceerde AI-oplossingen uw bedrijf kunnen transformeren met intelligente automatisering en innovatieve technologie.
            </p>
        </div>
        
        <!-- Animated AI Brain -->
        <div class="absolute bottom-10 right-10 w-32 h-32 opacity-20">
            <div class="w-full h-full rounded-full border-2 border-blue-500 neural-network">
                <div class="w-full h-full rounded-full border-2 border-purple-500 animate-pulse"></div>
            </div>
        </div>
    </section>

    <!-- Main Services -->
    <section class="py-20 bg-slate-800/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- AI Chatbots Service -->
            <div class="mb-24">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="order-2 lg:order-1">
                        <div class="hologram-border rounded-3xl p-8 ai-card">
                            <div class="aspect-video bg-gradient-to-br from-blue-500/20 to-purple-600/20 rounded-2xl flex items-center justify-center mb-6 relative overflow-hidden">
                                <div class="service-feature absolute inset-0"></div>
                                <div class="relative z-10">
                                    <i class="fas fa-robot text-6xl text-blue-400 pulse-animation"></i>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 text-center">
                                <div class="bg-slate-800/50 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-blue-400">24/7</div>
                                    <div class="text-sm text-gray-300">Beschikbaar</div>
                                </div>
                                <div class="bg-slate-800/50 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-purple-400">95%</div>
                                    <div class="text-sm text-gray-300">Nauwkeurigheid</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-1 lg:order-2">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-robot text-xl text-white"></i>
                            </div>
                            <h2 class="text-4xl font-bold text-white">AI Chatbots</h2>
                        </div>
                        <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                            Revolutioneer uw klantenservice met intelligente chatbots die natuurlijke gesprekken voeren, 
                            complexe vragen beantwoorden en naadloos integreren met uw bestaande systemen.
                        </p>
                        
                        <div class="space-y-4 mb-8">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-blue-400 rounded-full mr-4"></div>
                                <span class="text-gray-300">Natuurlijke taalverwerking (NLP)</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-purple-400 rounded-full mr-4"></div>
                                <span class="text-gray-300">Machine learning & zelflerend</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-cyan-400 rounded-full mr-4"></div>
                                <span class="text-gray-300">Multi-platform integratie</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-green-400 rounded-full mr-4"></div>
                                <span class="text-gray-300">Real-time analytics & rapportage</span>
                            </div>
                        </div>
                        
                        <a href="{{ route('contact') }}" class="inline-block">
                            <button class="bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 px-8 py-4 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 ai-glow">
                                <i class="fas fa-envelope mr-2" ></i>Neem Contact Op 
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Smart Websites Service -->
            <div class="mb-24">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-brain text-xl text-white"></i>
                            </div>
                            <h2 class="text-4xl font-bold text-white">Smart Websites</h2>
                        </div>
                        <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                            Moderne, responsieve websites met geïntegreerde AI-functionaliteit die zich aanpassen aan 
                            gebruikersgedrag en een gepersonaliseerde ervaring bieden.
                        </p>
                        
                        <div class="grid grid-cols-2 gap-6 mb-8">
                            <div class="bg-slate-800/30 rounded-xl p-6 border border-slate-700">
                                <i class="fas fa-mobile-alt text-2xl text-purple-400 mb-3"></i>
                                <h4 class="font-semibold text-white mb-2">Responsive Design</h4>
                                <p class="text-sm text-gray-300">Perfecte weergave op alle apparaten</p>
                            </div>
                            <div class="bg-slate-800/30 rounded-xl p-6 border border-slate-700">
                                <i class="fas fa-tachometer-alt text-2xl text-pink-400 mb-3"></i>
                                <h4 class="font-semibold text-white mb-2">Snelle Laadtijden</h4>
                                <p class="text-sm text-gray-300">Geoptimaliseerd voor prestaties</p>
                            </div>
                        </div>
                        
                        <div class="space-y-4 mb-8">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-purple-400 rounded-full mr-4"></div>
                                <span class="text-gray-300">Gepersonaliseerde gebruikerservaring</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-pink-400 rounded-full mr-4"></div>
                                <span class="text-gray-300">SEO geoptimaliseerd & toegankelijk</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-cyan-400 rounded-full mr-4"></div>
                                <span class="text-gray-300">Integratie met AI-tools</span>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div>
                        <div class="hologram-border rounded-3xl p-8 ai-card">
                            <div class="aspect-video bg-gradient-to-br from-purple-500/20 to-pink-600/20 rounded-2xl flex items-center justify-center mb-6 relative overflow-hidden">
                                <div class="service-feature absolute inset-0"></div>
                                <div class="relative z-10">
                                    <i class="fas fa-brain text-6xl text-purple-400 pulse-animation"></i>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 text-center">
                                <div class="bg-slate-800/50 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-purple-400">100%</div>
                                    <div class="text-sm text-gray-300">Responsief</div>
                                </div>
                                <div class="bg-slate-800/50 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-pink-400">A+</div>
                                    <div class="text-sm text-gray-300">Performance</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- AI Integratie Service -->
            <div class="mb-24">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div class="order-2 lg:order-1">
                        <div class="hologram-border rounded-3xl p-8 ai-card">
                            <div class="aspect-video bg-gradient-to-br from-cyan-500/20 to-blue-600/20 rounded-2xl flex items-center justify-center mb-6 relative overflow-hidden">
                                <div class="service-feature absolute inset-0"></div>
                                <div class="relative z-10">
                                    <i class="fas fa-network-wired text-6xl text-cyan-400 pulse-animation"></i>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 text-center">
                                <div class="bg-slate-800/50 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-cyan-400">50+</div>
                                    <div class="text-sm text-gray-300">Integraties</div>
                                </div>
                                <div class="bg-slate-800/50 rounded-lg p-4">
                                    <div class="text-2xl font-bold text-blue-400">99%</div>
                                    <div class="text-sm text-gray-300">Uptime</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order-1 lg:order-2">
                        <div class="flex items-center mb-6">
                            <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-600 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-network-wired text-xl text-white"></i>
                            </div>
                            <h2 class="text-4xl font-bold text-white">AI Integratie</h2>
                        </div>
                        <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                            Naadloze integratie van AI-technologie in uw bestaande systemen en workflows. 
                            Verhoog efficiëntie zonder disruption van uw huidige processen.
                        </p>
                        
                        <div class="space-y-4 mb-8">
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-cyan-400 rounded-full mr-4"></div>
                                <span class="text-gray-300">API & Database connectiviteit</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-blue-400 rounded-full mr-4"></div>
                                <span class="text-gray-300">Cloud & on-premise oplossingen</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-teal-400 rounded-full mr-4"></div>
                                <span class="text-gray-300">Veilige data-overdracht</span>
                            </div>
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-green-400 rounded-full mr-4"></div>
                                <span class="text-gray-300">24/7 monitoring & support</span>
                            </div>
                        </div>
                        
                        <a href="{{ route('contact') }}" class="inline-block">
                            <button class="bg-gradient-to-r from-cyan-500 to-blue-600 hover:from-cyan-600 hover:to-blue-700 px-8 py-4 rounded-full font-semibold transition-all duration-300 transform hover:scale-105 ai-glow">
                                <i class="fas fa-cogs mr-2"></i>Plan Integratie
                            </button>
                        </a>
                    </div>
                </div>
            </div>

           

    <!-- Features Overview -->
    <section class="py-20 bg-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-sm font-semibold text-blue-400 uppercase tracking-wider mb-4">Waarom Kiezen Voor Ons</h2>
                <h3 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Onze <span class="gradient-text">Expertise</span>
                </h3>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    We combineren de nieuwste AI-technologieën met frisse ideeën om slimme oplossingen te creëren.
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
                        Zodra jouw chatbot is geïnstalleerd, ben je 24/7 beschikbaar voor je klanten.                    </p>
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
@endsection