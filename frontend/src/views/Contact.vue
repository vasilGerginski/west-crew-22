<template>
  <div class="container mx-auto px-6 py-12">
    <div class="text-center mb-12">
      <h1 class="graffiti-text text-5xl md:text-6xl text-yellow-500 mb-6">
        КОНТАКТИ
      </h1>
      <p class="text-xl text-gray-300 font-semibold tracking-wide uppercase">
        Свържи се с West Crew 22
      </p>
    </div>

    <div class="grid md:grid-cols-2 gap-12">
      <!-- Contact Information -->
      <div class="space-y-8">
        <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-xl border-2 border-yellow-500/20 shadow-xl">
          <h2 class="graffiti-text text-2xl text-yellow-400 mb-6 uppercase">За Контакти</h2>
          
          <div class="space-y-6">
            <div class="flex items-center gap-4">
              <div class="bg-yellow-500 p-3 rounded-lg">
                <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                </svg>
              </div>
              <div>
                <h3 class="text-yellow-400 font-bold uppercase">Имейл</h3>
                <p class="text-gray-300">westcrew22@gmail.com</p>
              </div>
            </div>

            <div class="flex items-center gap-4">
              <div class="bg-yellow-500 p-3 rounded-lg">
                <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                </svg>
              </div>
              <div>
                <h3 class="text-yellow-400 font-bold uppercase">YouTube</h3>
                <p class="text-gray-300">West Crew 22 Official</p>
              </div>
            </div>

            <div class="flex items-center gap-4">
              <div class="bg-yellow-500 p-3 rounded-lg">
                <svg class="w-6 h-6 text-black" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.404-5.962 1.404-5.962s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.097.118.112.221.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.758-1.378l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z"/>
                </svg>
              </div>
              <div>
                <h3 class="text-yellow-400 font-bold uppercase">Социални мрежи</h3>
                <p class="text-gray-300">Последвай ни за новини</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Booking Information -->
        <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-xl border-2 border-yellow-500/20 shadow-xl">
          <h2 class="graffiti-text text-2xl text-yellow-400 mb-6 uppercase">За Букинги</h2>
          <p class="text-gray-300 mb-4">
            Заявки за концерти, сътрудничества и интервюта:
          </p>
          <div class="bg-yellow-500/10 p-4 rounded-lg border border-yellow-500/30">
            <p class="text-yellow-400 font-bold">booking@westcrew22.bg</p>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="bg-gradient-to-br from-gray-800 to-gray-900 p-8 rounded-xl border-2 border-yellow-500/20 shadow-xl">
        <h2 class="graffiti-text text-2xl text-yellow-400 mb-6 uppercase">Изпрати Съобщение</h2>
        
        <form @submit.prevent="submitForm" class="space-y-6">
          <div>
            <label class="block text-yellow-400 font-bold uppercase tracking-wide mb-2">Име</label>
            <input 
              v-model="form.name"
              type="text" 
              required
              class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-yellow-500 focus:outline-none transition-colors"
              placeholder="Твоето име">
          </div>

          <div>
            <label class="block text-yellow-400 font-bold uppercase tracking-wide mb-2">Имейл</label>
            <input 
              v-model="form.email"
              type="email" 
              required
              class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-yellow-500 focus:outline-none transition-colors"
              placeholder="твой@имейл.bg">
          </div>

          <div>
            <label class="block text-yellow-400 font-bold uppercase tracking-wide mb-2">Тема</label>
            <select 
              v-model="form.subject"
              required
              class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-yellow-500 focus:outline-none transition-colors">
              <option value="">Избери тема</option>
              <option value="booking">Букинг за концерт</option>
              <option value="collaboration">Сътрудничество</option>
              <option value="interview">Интервю</option>
              <option value="general">Общ въпрос</option>
            </select>
          </div>

          <div>
            <label class="block text-yellow-400 font-bold uppercase tracking-wide mb-2">Съобщение</label>
            <textarea 
              v-model="form.message"
              required
              rows="5"
              class="w-full bg-gray-700 border border-gray-600 rounded-lg px-4 py-3 text-white focus:border-yellow-500 focus:outline-none transition-colors resize-none"
              placeholder="Напиши съобщението си тук..."></textarea>
          </div>

          <button 
            type="submit"
            class="w-full bg-gradient-to-r from-yellow-500 to-yellow-600 hover:from-yellow-400 hover:to-yellow-500 text-black py-4 px-6 rounded-lg font-black uppercase tracking-wide transition-all duration-200 hover:scale-105 shadow-lg">
            Изпрати Съобщение
          </button>
        </form>

        <div v-if="submitMessage" class="mt-6 p-4 rounded-lg" :class="submitSuccess ? 'bg-green-500/20 border border-green-500/30 text-green-400' : 'bg-red-500/20 border border-red-500/30 text-red-400'">
          {{ submitMessage }}
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Contact',
  data() {
    return {
      form: {
        name: '',
        email: '',
        subject: '',
        message: ''
      },
      submitMessage: '',
      submitSuccess: false
    }
  },
  methods: {
    submitForm() {
      // Simulate form submission
      this.submitMessage = 'Съобщението е изпратено успешно! Ще се свържем с теб скоро.'
      this.submitSuccess = true
      
      // Reset form
      this.form = {
        name: '',
        email: '',
        subject: '',
        message: ''
      }
      
      // Clear message after 5 seconds
      setTimeout(() => {
        this.submitMessage = ''
      }, 5000)
    }
  }
}
</script>