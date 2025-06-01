<template>
  <div class="container mx-auto px-6 py-12">
    <div class="text-center mb-12">
      <h1 class="graffiti-text text-5xl md:text-6xl text-yellow-500 mb-6">
        ЕКИПЪТ
      </h1>
      <p class="text-xl text-gray-300 font-semibold tracking-wide uppercase">
        Запознай се с артистите от West Crew 22
      </p>
    </div>

    <!-- Crew Members Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
      <div v-for="member in crewMembers" :key="member.id" class="bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-xl border-2 border-yellow-500/20 hover:border-yellow-500/50 transition-all duration-300 hover:scale-105 shadow-xl text-center">
        <div class="w-24 h-24 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full flex items-center justify-center mx-auto mb-6 shadow-lg">
          <svg class="w-12 h-12 text-black" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
          </svg>
        </div>
        <h3 class="graffiti-text text-2xl text-yellow-400 mb-3 uppercase">{{ member.name }}</h3>
        <p class="text-gray-300 font-semibold uppercase tracking-wide mb-4">{{ member.role }}</p>
        <p class="text-gray-400 text-sm leading-relaxed">{{ member.description }}</p>
      </div>
    </div>

    <!-- West Crew 22 Story -->
    <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-8 md:p-12 rounded-xl border-2 border-yellow-500/30 shadow-xl">
      <h2 class="graffiti-text text-3xl md:text-4xl text-yellow-500 mb-6 text-center">
        НАШАТА ИСТОРИЯ
      </h2>
      <div class="text-gray-300 text-lg leading-relaxed space-y-4">
        <p>
          West Crew 22 е български андъргранд рап колектив, създаден с цел да представи автентичен български хип-хоп на сцената. 
          Екипът се състои от талантливи артисти, обединени от общата страст към музиката и желанието да предадат истински послания.
        </p>
        <p>
          Нашите текстове отразяват реалността на улицата, социалните проблеми и личните преживявания. 
          Комбинираме мощни битове с дълбоки послания, за да създадем музика, която докосва сърцата на слушателите.
        </p>
        <p class="text-yellow-400 font-semibold uppercase tracking-wide text-center">
          Музиката е нашият начин да говорим истината
        </p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Crew',
  data() {
    return {
      crewMembers: [
        {
          id: 1,
          name: 'Eazy',
          role: 'MC / Songwriter',
          description: 'Лидер на екипа с мощни текстове и харизматично присъствие на сцената.'
        },
        {
          id: 2,
          name: 'The Light',
          role: 'MC / Producer',
          description: 'Универсален артист, който съчетава рап умения с продуцентски талант.'
        },
        {
          id: 3,
          name: 'Psihopata',
          role: 'MC / Lyricist',
          description: 'Агресивен стил и директни послания, които карат публиката да слуша внимателно.'
        },
        {
          id: 4,
          name: 'Stefo',
          role: 'MC / Collaborator',
          description: 'Ключов сътрудник в много от най-силните парчета на колектива.'
        }
      ]
    }
  }
}
</script>