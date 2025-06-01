<div>
    <!-- Contact Hero -->
    <div class="bg-gradient-to-br from-gray-900 to-black py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="graffiti-text text-7xl md:text-8xl text-yellow-500 mb-4">{{ __('КОНТАКТИ') }} 📞</h1>
            <p class="text-2xl text-gray-300">{{ __('Свържи се с нас за колаборации, букинги и повече') }}</p>
        </div>
    </div>

    <!-- Contact Methods -->
    <section class="py-16 bg-black">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
                
                <!-- YouTube -->
                <div class="bg-gray-900 border-2 border-yellow-500 rounded-lg p-6 text-center hover:scale-105 transition-transform">
                    <div class="bg-red-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62-4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                        </svg>
                    </div>
                    <h3 class="graffiti-text text-2xl text-yellow-500 mb-2">YOUTUBE</h3>
                    <p class="text-gray-400 mb-4">{{ __('Гледай най-новите ни видеа') }}</p>
                    <a href="https://www.youtube.com/channel/UCOyprbdoK3vORVgITfw5TeA" 
                       target="_blank" 
                       class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded font-bold transition-colors inline-block">
                        {{ __('Абонирай се') }}
                    </a>
                </div>

                <!-- Instagram -->
                <div class="bg-gray-900 border-2 border-yellow-500 rounded-lg p-6 text-center hover:scale-105 transition-transform">
                    <div class="bg-gradient-to-r from-purple-500 to-pink-500 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </div>
                    <h3 class="graffiti-text text-2xl text-yellow-500 mb-2">INSTAGRAM</h3>
                    <p class="text-gray-400 mb-4">{{ __('Следи ни за ексклузивно съдържание') }}</p>
                    <a href="https://instagram.com/westcrew22" 
                       target="_blank" 
                       class="bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 text-white px-4 py-2 rounded font-bold transition-colors inline-block">
                        {{ __('Последвай') }}
                    </a>
                </div>

                <!-- TikTok -->
                <div class="bg-gray-900 border-2 border-yellow-500 rounded-lg p-6 text-center hover:scale-105 transition-transform">
                    <div class="bg-black w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                        </svg>
                    </div>
                    <h3 class="graffiti-text text-2xl text-yellow-500 mb-2">TIKTOK</h3>
                    <p class="text-gray-400 mb-4">{{ __('Къси видеа и предизвикателства') }}</p>
                    <a href="https://tiktok.com/@westcrew22" 
                       target="_blank" 
                       class="bg-black hover:bg-gray-800 text-white px-4 py-2 rounded font-bold transition-colors inline-block">
                        {{ __('Гледай') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Business Contact -->
    <section class="py-16 bg-gray-900">
        <div class="container mx-auto px-4">
            <h2 class="graffiti-text text-5xl text-yellow-500 mb-12 text-center">{{ __('БИЗНЕС КОНТАКТИ') }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <!-- Booking -->
                <div class="bg-black border-2 border-yellow-500 rounded-lg p-8">
                    <h3 class="graffiti-text text-3xl text-yellow-500 mb-4">{{ __('БУКИНГИ И СЪБИТИЯ') }}</h3>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                            <span class="text-gray-300">westcrew22.booking@gmail.com</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"/>
                            </svg>
                            <span class="text-gray-300">+359 88 123 4567</span>
                        </div>
                        <p class="text-gray-400 mt-4">{{ __('За концерти, фестивали и корпоративни събития. Отговаряме в рамките на 24 часа.') }}</p>
                    </div>
                </div>

                <!-- Collaborations -->
                <div class="bg-black border-2 border-yellow-500 rounded-lg p-8">
                    <h3 class="graffiti-text text-3xl text-yellow-500 mb-4">{{ __('КОЛАБОРАЦИИ') }}</h3>
                    <div class="space-y-4">
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"/>
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"/>
                            </svg>
                            <span class="text-gray-300">westcrew22.collab@gmail.com</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M4.083 9h1.946c.089-1.546.383-2.97.837-4.118A6.004 6.004 0 004.083 9zM10 2a8 8 0 100 16 8 8 0 000-16zm0 2c-.076 0-.232.032-.465.262-.238.234-.497.623-.737 1.182-.389.907-.673 2.142-.766 3.556h3.936c-.093-1.414-.377-2.649-.766-3.556-.24-.559-.5-.948-.737-1.182C10.232 4.032 10.076 4 10 4zm3.971 5c-.089-1.546-.383-2.97-.837-4.118A6.004 6.004 0 0115.917 9h-1.946zm-2.003 2H8.032c.093 1.414.377 2.649.766 3.556.24.559.5.948.737 1.182.233.23.389.262.465.262.076 0 .232-.032.465-.262.238-.234.498-.623.737-1.182.389-.907.673-2.142.766-3.556zm1.166 4.118c.454-1.147.748-2.572.837-4.118h1.946a6.004 6.004 0 01-2.783 4.118zm-6.268 0C6.412 13.97 6.118 12.546 6.03 11H4.083a6.004 6.004 0 002.783 4.118z"/>
                            </svg>
                            <span class="text-gray-300">{{ __('Работим с артисти от цял свят') }}</span>
                        </div>
                        <p class="text-gray-400 mt-4">{{ __('За музикални колаборации, ремикси и съвместни проекти. Изпращай демота си!') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location -->
    <section class="py-16 bg-black">
        <div class="container mx-auto px-4 text-center">
            <h2 class="graffiti-text text-5xl text-yellow-500 mb-8">{{ __('КЪДЕ СМЕ') }}</h2>
            <div class="bg-gray-900 border-2 border-yellow-500 rounded-lg p-8 max-w-2xl mx-auto">
                <div class="flex items-center justify-center gap-3 mb-4">
                    <svg class="w-8 h-8 text-yellow-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"/>
                    </svg>
                    <h3 class="graffiti-text text-3xl text-yellow-500">{{ __('СОФИЯ, БЪЛГАРИЯ') }}</h3>
                </div>
                <p class="text-gray-300 text-lg mb-6">{{ __('Базирани в столицата, но пътуваме из цялата страна') }}</p>
                <div class="bg-black p-4 rounded border border-gray-700">
                    <p class="text-yellow-500 font-bold mb-2">{{ __('СТУДИО АДРЕС:') }}</p>
                    <p class="text-gray-300">{{ __('ул. Музикална 22, София 1000') }}</p>
                    <p class="text-gray-400 text-sm mt-2">{{ __('*За среща се изисква предварително записване') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-16 bg-gray-900">
        <div class="container mx-auto px-4">
            <h2 class="graffiti-text text-5xl text-yellow-500 mb-12 text-center">{{ __('ЧЕСТО ЗАДАВАНИ ВЪПРОСИ') }}</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-6xl mx-auto">
                
                <div class="bg-black border border-gray-700 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-yellow-500 mb-3">{{ __('Как мога да ви наема за събитие?') }}</h3>
                    <p class="text-gray-300">{{ __('Свържи се с нас на booking имейла или телефона. Изпрати детайли за събитието и ще ти отговорим с оферта.') }}</p>
                </div>

                <div class="bg-black border border-gray-700 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-yellow-500 mb-3">{{ __('Правите ли колаборации с нови артисти?') }}</h3>
                    <p class="text-gray-300">{{ __('Да! Винаги търсим талантливи артисти. Изпрати ни твоята музика на collab имейла.') }}</p>
                </div>

                <div class="bg-black border border-gray-700 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-yellow-500 mb-3">{{ __('Имате ли студио за запис?') }}</h3>
                    <p class="text-gray-300">{{ __('Да, имаме професионално студио в София. Предлагаме услуги за запис, миксиране и мастериране.') }}</p>
                </div>

                <div class="bg-black border border-gray-700 rounded-lg p-6">
                    <h3 class="text-xl font-bold text-yellow-500 mb-3">{{ __('Кога излиза новия албум?') }}</h3>
                    <p class="text-gray-300">{{ __('Работим върху нов проект! Следи социалните ни мрежи за актуализации и дати на издаване.') }}</p>
                </div>
            </div>
        </div>
    </section>
</div>