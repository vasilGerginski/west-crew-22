<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'УЕСТ ЕКИП 22' }}</title>
    
    <!-- Scripts -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .graffiti-text {
            font-family: 'Bebas Neue', cursive;
            text-shadow: 3px 3px 0px #000, 
                       -1px -1px 0px #000,  
                        1px -1px 0px #000,
                       -1px  1px 0px #000,
                        1px  1px 0px #000;
        }
        .gangsta-font {
            font-family: 'Oswald', sans-serif;
        }
        @keyframes pulse-gold {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        .gold-pulse {
            animation: pulse-gold 2s ease-in-out infinite;
        }
    </style>
    
    <!-- Livewire Styles -->
    @livewireStyles
</head>
<body class="antialiased bg-black text-white gangsta-font">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-[9999] bg-black/90 backdrop-blur-sm border-b-4 border-yellow-500" x-data="{ mobileMenuOpen: false }">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <h1 class="graffiti-text text-2xl md:text-4xl text-yellow-500 gold-pulse">WEST CREW 22</h1>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex gap-6">
                    <a href="/" wire:navigate class="text-white hover:text-yellow-500 transition-colors font-bold uppercase">НАЧАЛО</a>
                    <a href="/videos" wire:navigate class="text-white hover:text-yellow-500 transition-colors font-bold uppercase">ВИДЕА</a>
                    <a href="/crew" wire:navigate class="text-white hover:text-yellow-500 transition-colors font-bold uppercase">ЕКИПЪТ</a>
                    <a href="/contact" wire:navigate class="text-white hover:text-yellow-500 transition-colors font-bold uppercase">КОНТАКТИ</a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-yellow-500 p-2">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div x-show="mobileMenuOpen" 
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 transform -translate-y-2"
                 x-transition:enter-end="opacity-100 transform translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 transform translate-y-0"
                 x-transition:leave-end="opacity-0 transform -translate-y-2"
                 class="md:hidden mt-4 pb-4 border-t border-yellow-500/30">
                <div class="flex flex-col gap-4 pt-4">
                    <a href="/" wire:navigate @click="mobileMenuOpen = false" class="text-white hover:text-yellow-500 transition-colors font-bold uppercase text-lg">НАЧАЛО</a>
                    <a href="/videos" wire:navigate @click="mobileMenuOpen = false" class="text-white hover:text-yellow-500 transition-colors font-bold uppercase text-lg">ВИДЕА</a>
                    <a href="/crew" wire:navigate @click="mobileMenuOpen = false" class="text-white hover:text-yellow-500 transition-colors font-bold uppercase text-lg">ЕКИПЪТ</a>
                    <a href="/contact" wire:navigate @click="mobileMenuOpen = false" class="text-white hover:text-yellow-500 transition-colors font-bold uppercase text-lg">КОНТАКТИ</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-24 pb-32">
        {{ $slot }}
    </main>

    <!-- Persistent Music Player -->
    @livewire('music-player')
    
    <!-- Livewire Scripts -->
    @livewireScripts
    
    <!-- Stack for additional scripts -->
    @stack('scripts')
</body>
</html>