<div>
    <!-- Videos Hero -->
    <div class="bg-gradient-to-br from-gray-900 to-black py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="graffiti-text text-7xl md:text-8xl text-yellow-500 mb-4">{{ __('ВИДЕА 📹') }}</h1>
            <p class="text-2xl text-gray-300">{{ __('Гледай най-истинските визуали от улицата') }}</p>
        </div>
    </div>

    <!-- Featured Video -->
    <section class="py-16 bg-black">
        <div class="container mx-auto px-4">
            <h2 class="graffiti-text text-5xl text-yellow-500 mb-8">{{ __('ПОСЛЕДНО КАЧВАНЕ 🔥') }}</h2>
            <div class="aspect-video bg-gray-900 rounded-lg overflow-hidden max-w-6xl mx-auto border-4 border-yellow-500">
                <iframe 
                    class="w-full h-full"
                    src="https://www.youtube.com/embed/6Ii0YFFNIIU" 
                    title="Eazy- Деградация (Official Video)"
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
            </div>
            <div class="text-center mt-6">
                <h3 class="text-3xl font-bold text-yellow-500 mb-2">Eazy- Деградация (Official Video)</h3>
                <p class="text-gray-400">2.7K {{ __('гледания') }} • {{ __('Качено преди') }} 1 {{ __('година') }}</p>
            </div>
        </div>
    </section>

    <!-- Video Grid -->
    <section class="py-16 bg-gray-900">
        <div class="container mx-auto px-4">
            <h2 class="graffiti-text text-5xl text-yellow-500 mb-12 text-center">{{ __('ВСИЧКИ ВИДЕА') }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Video 1 -->
                <div class="bg-black border-2 border-gray-800 hover:border-yellow-500 transition-colors group cursor-pointer" onclick="window.open('https://www.youtube.com/watch?v=SXOLB1hbEGo', '_blank')">
                    <div class="aspect-video bg-gray-800 relative overflow-hidden">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/SXOLB1hbEGo" frameborder="0" allowfullscreen></iframe>
                        <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none">
                            <div class="bg-yellow-500 rounded-full p-4">
                                <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-yellow-500 mb-2">The Light × Stefo - Drilla Killa</h3>
                        <p class="text-gray-400 text-sm">143 {{ __('гледания') }} • 2 {{ __('години') }}</p>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="bg-black border-2 border-gray-800 hover:border-yellow-500 transition-colors group cursor-pointer" onclick="window.open('https://www.youtube.com/watch?v=ZRoodAOI-lw', '_blank')">
                    <div class="aspect-video bg-gray-800 relative overflow-hidden">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/ZRoodAOI-lw" frameborder="0" allowfullscreen></iframe>
                        <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none">
                            <div class="bg-yellow-500 rounded-full p-4">
                                <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-yellow-500 mb-2">Psihopata- Чук Чук</h3>
                        <p class="text-gray-400 text-sm">113 {{ __('гледания') }} • 1 {{ __('година') }}</p>
                    </div>
                </div>

                <!-- Video 3 -->
                <div class="bg-black border-2 border-gray-800 hover:border-yellow-500 transition-colors group cursor-pointer" onclick="window.open('https://www.youtube.com/watch?v=68KHVgbdy8s', '_blank')">
                    <div class="aspect-video bg-gray-800 relative overflow-hidden">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/68KHVgbdy8s" frameborder="0" allowfullscreen></iframe>
                        <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none">
                            <div class="bg-yellow-500 rounded-full p-4">
                                <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-yellow-500 mb-2">The Light- Bitches love me</h3>
                        <p class="text-gray-400 text-sm">88 {{ __('гледания') }} • 2 {{ __('години') }}</p>
                    </div>
                </div>

                <!-- Video 4 -->
                <div class="bg-black border-2 border-gray-800 hover:border-yellow-500 transition-colors group cursor-pointer" onclick="window.open('https://www.youtube.com/watch?v=UDDmcu1rDEo', '_blank')">
                    <div class="aspect-video bg-gray-800 relative overflow-hidden">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/UDDmcu1rDEo" frameborder="0" allowfullscreen></iframe>
                        <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none">
                            <div class="bg-yellow-500 rounded-full p-4">
                                <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-yellow-500 mb-2">Eazy - S Cigara Na Golqmoto</h3>
                        <p class="text-gray-400 text-sm">181 {{ __('гледания') }} • 2 {{ __('години') }}</p>
                    </div>
                </div>

                <!-- Video 5 -->
                <div class="bg-black border-2 border-gray-800 hover:border-yellow-500 transition-colors group cursor-pointer" onclick="window.open('https://www.youtube.com/watch?v=H7suyntY8JU', '_blank')">
                    <div class="aspect-video bg-gray-800 relative overflow-hidden">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/H7suyntY8JU" frameborder="0" allowfullscreen></iframe>
                        <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none">
                            <div class="bg-yellow-500 rounded-full p-4">
                                <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-yellow-500 mb-2">Eazy- Един Миг</h3>
                        <p class="text-gray-400 text-sm">92 {{ __('гледания') }} • 1 {{ __('година') }}</p>
                    </div>
                </div>

                <!-- Video 6 -->
                <div class="bg-black border-2 border-gray-800 hover:border-yellow-500 transition-colors group cursor-pointer" onclick="window.open('https://www.youtube.com/watch?v=zMZFSUdSiPc', '_blank')">
                    <div class="aspect-video bg-gray-800 relative overflow-hidden">
                        <iframe class="w-full h-full" src="https://www.youtube.com/embed/zMZFSUdSiPc" frameborder="0" allowfullscreen></iframe>
                        <div class="absolute inset-0 bg-black/50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none">
                            <div class="bg-yellow-500 rounded-full p-4">
                                <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="text-xl font-bold text-yellow-500 mb-2">Eazy× Stefo× The Light- Anti System</h3>
                        <p class="text-gray-400 text-sm">129 {{ __('гледания') }} • 1 {{ __('година') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>