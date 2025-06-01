<div x-data="{ minimized: false }" 
     class="fixed left-0 right-0 bg-gradient-to-t from-gray-900 via-gray-800 to-gray-900 border-t-4 border-yellow-500 z-[9998] transition-all duration-300 shadow-2xl backdrop-blur-sm"
     :class="minimized ? 'bottom-0 translate-y-[calc(100%-4rem)]' : 'bottom-0 translate-y-0'">
    
    <!-- Minimize/Maximize Handle -->
    <button @click="minimized = !minimized" 
            class="absolute -top-10 left-1/2 transform -translate-x-1/2 bg-gradient-to-b from-gray-800 to-gray-900 border-4 border-b-0 border-yellow-500 px-8 py-2 rounded-t-xl hover:from-gray-700 hover:to-gray-800 transition-all duration-300 shadow-lg group">
        <svg x-show="!minimized" class="w-5 h-5 text-yellow-500 group-hover:text-yellow-400 transition-colors" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"/>
        </svg>
        <svg x-show="minimized" class="w-5 h-5 text-yellow-500 group-hover:text-yellow-400 transition-colors" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
        </svg>
    </button>
    
    <div class="container mx-auto p-6">
        <div class="flex items-center justify-between" :class="minimized ? '' : 'mb-6'">
            <!-- Track Info -->
            <div class="flex items-center gap-5">
                <div class="bg-gradient-to-br from-yellow-400 to-yellow-600 w-20 h-20 rounded-lg flex items-center justify-center shadow-lg border-2 border-yellow-300/30 group-hover:scale-105 transition-transform">
                    <svg class="w-10 h-10 text-black" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M18 3a1 1 0 00-1.196-.98l-10 2A1 1 0 006 5v9.114A4.369 4.369 0 005 14c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V7.82l8-1.6v5.894A4.37 4.37 0 0015 12c-1.657 0-3 .895-3 2s1.343 2 3 2 3-.895 3-2V3z"/>
                    </svg>
                </div>
                <div class="min-w-0 flex-1">
                    <h3 class="font-black text-xl text-yellow-400 tracking-wide uppercase leading-tight truncate graffiti-text">{{ $currentTrack['title'] ?? __('Няма възпроизвеждане') }}</h3>
                    <p class="text-gray-300 text-sm font-semibold tracking-wider uppercase opacity-80">{{ $currentTrack['artist'] ?? __('Уест Екип 22') }}</p>
                </div>
            </div>

            <!-- Player Controls -->
            <div class="flex items-center gap-3">
                <button wire:click="previousTrack" class="bg-gray-800/50 hover:bg-gray-700/50 text-white hover:text-yellow-400 transition-all duration-200 p-3 rounded-lg border border-gray-600/30 hover:border-yellow-500/50 group">
                    <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M8.445 14.832A1 1 0 0010 14v-2.798l5.445 3.63A1 1 0 0017 14V6a1 1 0 00-1.555-.832L10 8.798V6a1 1 0 00-1.555-.832l-6 4a1 1 0 000 1.664l6 4z"/>
                    </svg>
                </button>
                
                <button wire:click="nextTrack" class="bg-gray-800/50 hover:bg-gray-700/50 text-white hover:text-yellow-400 transition-all duration-200 p-3 rounded-lg border border-gray-600/30 hover:border-yellow-500/50 group">
                    <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M4.555 5.168A1 1 0 003 6v8a1 1 0 001.555.832L10 11.202V14a1 1 0 001.555.832l6-4a1 1 0 000-1.664l-6-4A1 1 0 0010 6v2.798L4.555 5.168z"/>
                    </svg>
                </button>
            </div>

            <!-- View on YouTube Button -->
            <div class="flex items-center gap-3">
                <a href="{{ $currentTrack['url'] ?? '#' }}" 
                   target="_blank" 
                   class="bg-gradient-to-r from-yellow-500 to-yellow-600 hover:from-yellow-400 hover:to-yellow-500 text-black px-6 py-3 rounded-lg font-black uppercase tracking-wide transition-all duration-200 flex items-center gap-3 shadow-lg border-2 border-yellow-400/30 hover:border-yellow-300/50 hover:scale-105 group">
                    <svg class="w-5 h-5 group-hover:rotate-12 transition-transform" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                    </svg>
                    <span class="hidden sm:inline text-sm">Гледай в YouTube</span>
                    <span class="sm:hidden text-xs">YT</span>
                </a>
            </div>
        </div>
        
        <!-- Embedded YouTube Player -->
        <div x-show="!minimized" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100">
            @if($this->isYouTubeUrl($currentTrack['url'] ?? ''))
                <div class="aspect-video max-w-full mx-auto bg-gray-800 rounded-xl overflow-hidden shadow-2xl border-2 border-yellow-500/20">
                    <iframe 
                        class="w-full h-full"
                        src="https://www.youtube.com/embed/{{ $this->getYouTubeId($currentTrack['url']) }}?enablejsapi=1&autoplay=1" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
            @else
                <div class="aspect-video max-w-full mx-auto bg-gradient-to-br from-gray-800 to-gray-900 rounded-xl flex items-center justify-center border-2 border-yellow-500/20 shadow-2xl">
                    <div class="text-center">
                        <svg class="w-16 h-16 text-yellow-500 mx-auto mb-4 opacity-50" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                        </svg>
                        <p class="text-gray-400 font-semibold uppercase tracking-wide">Няма налично видео</p>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

