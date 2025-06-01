<template>
  <div>
    <!-- Hero Section with Graffiti Background -->
    <div class="relative min-h-screen flex items-center justify-center overflow-hidden -mt-24">
      <!-- Animated Background -->
      <div class="absolute inset-0 bg-gradient-to-br from-gray-900 via-black to-gray-900">
        <div class="absolute inset-0 opacity-20" style="background-image: url('data:image/svg+xml,%3Csvg width=&quot;100&quot; height=&quot;100&quot; xmlns=&quot;http://www.w3.org/2000/svg&quot;%3E%3Cdefs%3E%3Cpattern id=&quot;a&quot; patternUnits=&quot;userSpaceOnUse&quot; width=&quot;100&quot; height=&quot;100&quot;%3E%3Cpath d=&quot;M0 0h100v100H0z&quot; fill=&quot;%23000&quot;/%3E%3Cpath d=&quot;M0 0l50 50-50 50M50 0l50 50-50 50&quot; stroke=&quot;%23FFD700&quot; stroke-width=&quot;.5&quot; fill=&quot;none&quot; opacity=&quot;.1&quot;/%3E%3C/pattern%3E%3C/defs%3E%3Crect width=&quot;100%25&quot; height=&quot;100%25&quot; fill=&quot;url(%23a)&quot;/%3E%3C/svg%3E');"></div>
      </div>
      
      <!-- Hero Content -->
      <div class="relative z-10 text-center px-4">
        <h1 class="graffiti-text text-6xl md:text-8xl lg:text-9xl mb-6 text-yellow-500 gold-pulse transform -rotate-2">WEST CREW 22</h1>
        <p class="text-2xl md:text-3xl font-bold uppercase tracking-wider mb-8">Истински Bulgarian Rap от София</p>
        <div class="flex gap-4 justify-center flex-wrap">
          <a href="https://www.youtube.com/channel/UCOyprbdoK3vORVgITfw5TeA" 
             target="_blank"
             class="bg-yellow-500 text-black px-8 py-4 font-bold uppercase hover:bg-yellow-400 transition-colors transform hover:scale-110">
            Слушай Сега
          </a>
          <router-link to="/videos"
             class="border-2 border-yellow-500 text-yellow-500 px-8 py-4 font-bold uppercase hover:bg-yellow-500 hover:text-black transition-all transform hover:scale-110">
            Гледай Видеа
          </router-link>
        </div>
      </div>
    </div>

    <!-- About Section -->
    <section class="bg-gray-900 py-20">
      <div class="container mx-auto px-4">
        <h2 class="graffiti-text text-4xl md:text-6xl text-yellow-500 mb-12 text-center">КОИ СМЕ НИЕ</h2>
        <div class="max-w-4xl mx-auto text-center">
          <p class="text-xl leading-relaxed mb-8">
            West Crew 22 е български рап колектив от София, създаден през 2022 година. Състои се от Eazy, The Light, Stefo и Psihopata - артисти, които носят автентичния български хип хоп звук с международно качество.
          </p>
          <p class="text-lg text-gray-400">
            С над 50,000 гледания на YouTube и растяща фен база, ние представляваме новото поколение български рап артисти.
          </p>
        </div>
      </div>
    </section>

    <!-- Latest Drops -->
    <section class="py-20 bg-black">
      <div class="container mx-auto px-4">
        <h2 class="graffiti-text text-4xl md:text-6xl text-yellow-500 mb-12 text-center">ПОСЛЕДНИ ПАРЧЕТА 🔥</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="bg-gradient-to-br from-gray-900 to-gray-800 p-8 border-4 border-yellow-500 transform hover:scale-105 transition-transform cursor-pointer"
               @click="openYoutube('https://www.youtube.com/watch?v=6Ii0YFFNIIU')">
            <div class="bg-yellow-500 w-full h-48 mb-4 flex items-center justify-center">
              <span class="text-6xl">🎤</span>
            </div>
            <h3 class="text-2xl font-bold mb-2 text-yellow-500">Eazy - Деградация</h3>
            <p class="text-gray-300 mb-4">Официално видео с 2.7K гледания. Сурови текстове за истинския живот.</p>
            <button class="text-yellow-500 font-bold hover:text-yellow-400">ПУСНИ СЕГА →</button>
          </div>
          
          <div class="bg-gradient-to-br from-gray-900 to-gray-800 p-8 border-4 border-yellow-500 transform hover:scale-105 transition-transform cursor-pointer"
               @click="openYoutube('https://www.youtube.com/watch?v=SXOLB1hbEGo')">
            <div class="bg-yellow-500 w-full h-48 mb-4 flex items-center justify-center">
              <span class="text-6xl">🔥</span>
            </div>
            <h3 class="text-2xl font-bold mb-2 text-yellow-500">The Light × Stefo - Drilla Killa</h3>
            <p class="text-gray-300 mb-4">Колаборация между двама от най-силните MC-та в екипа.</p>
            <button class="text-yellow-500 font-bold hover:text-yellow-400">ПУСНИ СЕГА →</button>
          </div>
          
          <div class="bg-gradient-to-br from-gray-900 to-gray-800 p-8 border-4 border-yellow-500 transform hover:scale-105 transition-transform cursor-pointer"
               @click="openYoutube('https://www.youtube.com/watch?v=0EhCRPshAbA')">
            <div class="bg-yellow-500 w-full h-48 mb-4 flex items-center justify-center">
              <span class="text-6xl">💯</span>
            </div>
            <h3 class="text-2xl font-bold mb-2 text-yellow-500">THE LIGHT x EAZY - Vseki Vtori</h3>
            <p class="text-gray-300 mb-4">Официално аудио с над 500 гледания. Най-стария хит на екипа.</p>
            <button class="text-yellow-500 font-bold hover:text-yellow-400">ПУСНИ СЕГА →</button>
          </div>
        </div>
      </div>
    </section>

    <!-- Street Cred Section -->
    <section class="bg-gray-900 py-20">
      <div class="container mx-auto px-4">
        <h2 class="graffiti-text text-4xl md:text-6xl text-yellow-500 mb-12 text-center">СТАТИСТИКИ</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
          <div>
            <p class="text-4xl md:text-6xl font-bold text-yellow-500">50K+</p>
            <p class="text-lg md:text-xl uppercase">Гледания</p>
          </div>
          <div>
            <p class="text-4xl md:text-6xl font-bold text-yellow-500">14</p>
            <p class="text-lg md:text-xl uppercase">Песни</p>
          </div>
          <div>
            <p class="text-4xl md:text-6xl font-bold text-yellow-500">3</p>
            <p class="text-lg md:text-xl uppercase">Години заедно</p>
          </div>
          <div>
            <p class="text-4xl md:text-6xl font-bold text-yellow-500">∞</p>
            <p class="text-lg md:text-xl uppercase">Страст</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Call to Action -->
    <section class="py-20 bg-black">
      <div class="container mx-auto px-4 text-center">
        <h2 class="graffiti-text text-4xl md:text-6xl text-yellow-500 mb-8">ПРИСЪЕДИНИ СЕ КЪМ ДВИЖЕНИЕТО</h2>
        <p class="text-xl text-gray-300 mb-8">Следи ни за най-новите песни, видеа и новини от света на West Crew 22</p>
        <div class="flex gap-4 justify-center flex-wrap">
          <a href="https://www.youtube.com/channel/UCOyprbdoK3vORVgITfw5TeA" 
             target="_blank"
             class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded font-bold transition-colors">
            YouTube
          </a>
          <router-link to="/contact"
             class="bg-yellow-500 hover:bg-yellow-600 text-black px-6 py-3 rounded font-bold transition-colors">
            Контакти
          </router-link>
          <router-link to="/crew"
             class="border-2 border-yellow-500 text-yellow-500 hover:bg-yellow-500 hover:text-black px-6 py-3 rounded font-bold transition-colors">
            Екипът
          </router-link>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  name: 'Home',
  methods: {
    openYoutube(url) {
      window.open(url, '_blank')
    }
  }
}
</script>