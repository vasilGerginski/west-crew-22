<template>
  <nav class="fixed top-0 left-0 right-0 z-[9999] bg-black/90 backdrop-blur-sm border-b-4 border-yellow-500">
    <div class="container mx-auto px-4 py-4">
      <div class="flex items-center justify-between">
        <h1 class="graffiti-text text-2xl md:text-4xl text-yellow-500 gold-pulse">WEST CREW 22</h1>
        
        <!-- Desktop Menu -->
        <div class="hidden md:flex gap-6">
          <router-link to="/" class="text-white hover:text-yellow-500 transition-colors font-bold uppercase">НАЧАЛО</router-link>
          <router-link to="/videos" class="text-white hover:text-yellow-500 transition-colors font-bold uppercase">ВИДЕА</router-link>
          <router-link to="/crew" class="text-white hover:text-yellow-500 transition-colors font-bold uppercase">ЕКИПЪТ</router-link>
          <router-link to="/contact" class="text-white hover:text-yellow-500 transition-colors font-bold uppercase">КОНТАКТИ</router-link>
        </div>
        
        <!-- Mobile Menu Button -->
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-yellow-500 p-2">
          <svg v-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
          <svg v-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>
      
      <!-- Mobile Menu -->
      <transition
        enter-active-class="transition ease-out duration-200"
        enter-from-class="opacity-0 transform -translate-y-2"
        enter-to-class="opacity-100 transform translate-y-0"
        leave-active-class="transition ease-in duration-150"
        leave-from-class="opacity-100 transform translate-y-0"
        leave-to-class="opacity-0 transform -translate-y-2"
      >
        <div v-show="mobileMenuOpen" class="md:hidden mt-4 pb-4 border-t border-yellow-500/30">
          <div class="flex flex-col gap-4 pt-4">
            <router-link to="/" @click="mobileMenuOpen = false" class="text-white hover:text-yellow-500 transition-colors font-bold uppercase text-lg">НАЧАЛО</router-link>
            <router-link to="/videos" @click="mobileMenuOpen = false" class="text-white hover:text-yellow-500 transition-colors font-bold uppercase text-lg">ВИДЕА</router-link>
            <router-link to="/crew" @click="mobileMenuOpen = false" class="text-white hover:text-yellow-500 transition-colors font-bold uppercase text-lg">ЕКИПЪТ</router-link>
            <router-link to="/contact" @click="mobileMenuOpen = false" class="text-white hover:text-yellow-500 transition-colors font-bold uppercase text-lg">КОНТАКТИ</router-link>
          </div>
        </div>
      </transition>
    </div>
  </nav>
</template>

<script>
export default {
  name: 'Navigation',
  data() {
    return {
      mobileMenuOpen: false
    }
  }
}
</script>