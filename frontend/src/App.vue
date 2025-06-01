<template>
  <div id="app" class="min-h-screen bg-black text-white gangsta-font">
    <!-- Navigation -->
    <Navigation />
    
    <!-- Main Content -->
    <main class="pt-24 pb-32">
      <router-view />
    </main>
    
    <!-- Music Player -->
    <MusicPlayer />
  </div>
</template>

<script>
import Navigation from './components/Navigation.vue'
import MusicPlayer from './components/MusicPlayer.vue'

export default {
  name: 'App',
  components: {
    Navigation,
    MusicPlayer
  }
}
</script>

<style>
@import './style.css';
</style>