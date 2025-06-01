<template>
  <div class="container mx-auto px-6 py-12">
    <div class="text-center mb-12">
      <h1 class="graffiti-text text-5xl md:text-6xl text-yellow-500 mb-6">
        ВИДЕА
      </h1>
      <p class="text-xl text-gray-300 font-semibold tracking-wide uppercase">
        Гледай нашите най-горещи клипове
      </p>
    </div>

    <!-- Video Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
      <div v-for="video in videos" :key="video.id" class="bg-gradient-to-br from-gray-800 to-gray-900 rounded-xl overflow-hidden shadow-xl border-2 border-yellow-500/20 hover:border-yellow-500/50 transition-all duration-300 hover:scale-105">
        <div class="aspect-video">
          <iframe 
            class="w-full h-full"
            :src="`https://www.youtube.com/embed/${getYouTubeId(video.url)}`"
            frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
          </iframe>
        </div>
        <div class="p-6">
          <h3 class="text-lg font-bold text-yellow-400 mb-2 uppercase tracking-wide">{{ video.title }}</h3>
          <p class="text-gray-300 text-sm uppercase tracking-wider">{{ video.artist }}</p>
          <a :href="video.url" target="_blank" class="inline-flex items-center gap-2 mt-4 bg-yellow-500 hover:bg-yellow-600 text-black px-4 py-2 rounded-lg font-bold transition-colors">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
              <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
            </svg>
            Гледай в YouTube
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Videos',
  data() {
    return {
      videos: [
        {
          id: 1,
          title: 'The Light × Stefo - Drilla Killa',
          artist: 'West Crew 22',
          url: 'https://www.youtube.com/watch?v=SXOLB1hbEGo'
        },
        {
          id: 2,
          title: 'Eazy- Деградация (Official Video)',
          artist: 'West Crew 22',
          url: 'https://www.youtube.com/watch?v=6Ii0YFFNIIU'
        },
        {
          id: 3,
          title: 'Psihopata- Чук Чук',
          artist: 'West Crew 22',
          url: 'https://www.youtube.com/watch?v=ZRoodAOI-lw'
        },
        {
          id: 4,
          title: 'The Light- Bitches love me',
          artist: 'West Crew 22',
          url: 'https://www.youtube.com/watch?v=68KHVgbdy8s'
        },
        {
          id: 5,
          title: 'Eazy - S Cigara Na Golqmoto',
          artist: 'West Crew 22',
          url: 'https://www.youtube.com/watch?v=UDDmcu1rDEo'
        },
        {
          id: 6,
          title: 'Eazy- Един Миг',
          artist: 'West Crew 22',
          url: 'https://www.youtube.com/watch?v=H7suyntY8JU'
        },
        {
          id: 7,
          title: 'Eazy× Stefo× The Light- Anti System',
          artist: 'West Crew 22',
          url: 'https://www.youtube.com/watch?v=zMZFSUdSiPc'
        },
        {
          id: 8,
          title: 'Eazy- Музикална епопея',
          artist: 'West Crew 22',
          url: 'https://www.youtube.com/watch?v=x52YoXynUqY'
        }
      ]
    }
  },
  methods: {
    getYouTubeId(url) {
      const pattern = /(?:youtube\.com\/watch\?v=|youtu\.be\/|youtube\.com\/embed\/)([a-zA-Z0-9_-]+)/
      const matches = url.match(pattern)
      return matches ? matches[1] : null
    }
  }
}
</script>