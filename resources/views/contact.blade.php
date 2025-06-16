@extends('layouts.app')

@section('title', 'Contact')

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
                <span class="text-blue-400 font-semibold text-sm uppercase tracking-wider">Neem Contact Op</span>
            </div>
            <div class="floating">
                <h1 class="text-4xl sm:text-5xl md:text-7xl font-extrabold mb-6">
                    <span class="text-white">Laten We</span>
                    <span class="gradient-text block">Samenwerken</span>
                </h1>
            </div>
            <p class="text-lg sm:text-xl md:text-2xl text-gray-300 mb-12 max-w-4xl mx-auto leading-relaxed">
                Heb je vragen of wil je meer weten over mijn slimme oplossingen? Neem gerust contact met me op.
            </p>
        </div>
        
        <!-- Animated AI Brain -->
        <div class="absolute bottom-10 right-10 w-24 sm:w-32 h-24 sm:h-32 opacity-20">
            <div class="w-full h-full rounded-full border-2 border-blue-500 neural-network">
                <div class="w-full h-full rounded-full border-2 border-purple-500 animate-pulse"></div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-12 sm:py-20 bg-slate-800/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 items-start">
                <div class="order-2 lg:order-1">
                    <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6">
                        Stuur me een <span class="gradient-text">bericht</span>
                    </h2>
                    <p class="text-lg sm:text-xl text-gray-300 mb-8 leading-relaxed">
                        Vul het formulier in en ik neem snel contact met je op. 
                        Of bel me direct voor een snelle reactie.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-phone text-xl text-white"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-white">Telefoon</h4>
                                <a href="tel:+32471241912" class="text-gray-300 hover:text-blue-400 transition-colors">+32 471 24 19 12</a>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-600 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-envelope text-xl text-white"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-white">Email</h4>
                                <a href="mailto:Senne@sde-agency.com" class="text-gray-300 hover:text-blue-400 transition-colors">Senne@sde-agency.com</a>
                            </div>
                        </div>
                        
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-gradient-to-br from-pink-500 to-red-600 rounded-xl flex items-center justify-center mr-4">
                                <i class="fas fa-map-marker-alt text-xl text-white"></i>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-white">Adres</h4>
                                <p class="text-gray-300">Lommel, Belgi&euml;</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="order-1 lg:order-2">
                    <form id="contactForm" action="{{ route('contact.send') }}" method="POST" class="bg-slate-800/80 backdrop-blur-sm rounded-2xl p-6 sm:p-8 border border-slate-700">
                        @csrf
                        <div class="space-y-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Naam</label>
                                <input type="text" name="name" id="name" required
                                    class="w-full px-4 py-3 bg-slate-900/50 border border-slate-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors"
                                    placeholder="Jouw naam">
                                <div class="error-message mt-1 text-sm text-red-500 hidden"></div>
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email</label>
                                <input type="email" name="email" id="email" required
                                    class="w-full px-4 py-3 bg-slate-900/50 border border-slate-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors"
                                    placeholder="jouw@email.com">
                                <div class="error-message mt-1 text-sm text-red-500 hidden"></div>
                            </div>
                            
                            <div>
                                <label for="subject" class="block text-sm font-medium text-gray-300 mb-2">Onderwerp</label>
                                <input type="text" name="subject" id="subject" required
                                    class="w-full px-4 py-3 bg-slate-900/50 border border-slate-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors"
                                    placeholder="Waar gaat het over?">
                                <div class="error-message mt-1 text-sm text-red-500 hidden"></div>
                            </div>
                            
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-300 mb-2">Bericht</label>
                                <textarea name="message" id="message" rows="6" required
                                    class="w-full px-4 py-3 bg-slate-900/50 border border-slate-700 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors resize-none"
                                    placeholder="Vertel me meer..."></textarea>
                                <div class="error-message mt-1 text-sm text-red-500 hidden"></div>
                            </div>

                            <div id="formSuccess" class="bg-green-500/20 border border-green-500 text-green-500 px-4 py-3 rounded-lg text-center mb-6 hidden">
                                <i class="fas fa-check-circle mr-2"></i>
                                <span>Bedankt voor je bericht! Ik neem zo snel mogelijk contact met je op.</span>
                            </div>

                            <div id="formError" class="bg-red-500/20 border border-red-500 text-red-500 px-4 py-3 rounded-lg text-center mb-6 hidden">
                                <i class="fas fa-exclamation-circle mr-2"></i>
                                <span>Er is iets misgegaan. Probeer het later opnieuw.</span>
                            </div>
                            
                            <button type="submit" 
                                class="w-full bg-gradient-to-r from-blue-500 to-purple-600 hover:from-blue-600 hover:to-purple-700 px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 ai-glow text-white">
                                <i class="fas fa-paper-plane mr-2"></i>Verstuur Bericht
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Reset previous messages
            document.querySelectorAll('.error-message').forEach(el => {
                el.classList.add('hidden');
                el.textContent = '';
            });
            document.getElementById('formSuccess').classList.add('hidden');
            document.getElementById('formError').classList.add('hidden');
            
            // Get form data
            const formData = new FormData(this);
            
            // Send AJAX request
            fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    document.getElementById('formSuccess').classList.remove('hidden');
                    // Reset form
                    this.reset();
                } else {
                    // Show error message
                    document.getElementById('formError').classList.remove('hidden');
                }
            })
            .catch(error => {
                // Show error message
                document.getElementById('formError').classList.remove('hidden');
            });
        });
    </script>
@endsection 