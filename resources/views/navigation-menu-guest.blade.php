<nav x-data="{ open: false }" class="relative block w-full h-auto py-6 text-center text-indigo-900 bg-white md:py-2">
    <!-- Right Light Blue Background with Lighter Transparency -->
    <div class="absolute top-0 right-0 w-1/2 h-full transform opacity-20 bg-indigo-50"></div>

    <div class="flex items-center w-full h-full px-4 mx-auto leading-10 text-center md:h-24 md:px-4 lg:px-6 max-w-7xl relative z-10">
        <div class="flex flex-col items-center justify-between w-full h-full text-indigo-900 md:flex-row">

            <!-- Logo -->
            <div class="relative z-20 flex items-center w-auto px-4 leading-10 lg:flex-grow-0 lg:flex-shrink-0 lg:text-left">
                <a href="{{ route('welcome') }}" class="inline-block font-sans text-3xl font-black tracking-tight text-transparent no-underline bg-clip-text bg-gradient-to-r from-indigo-600 to-indigo-500">
                    a-mills
                </a>
            </div>

            <!-- Hamburger Button (visible on mobile only) -->
            <div class="md:hidden z-20">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-indigo-900 hover:text-indigo-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Navigation Links for Desktop (Hidden on Mobile) -->
            <div class="hidden md:flex md:flex-row md:space-x-6">
                <a href="{{ route('welcome') }}" class="font-semibold text-gray-600 hover:text-indigo-600">Home</a>
                <a href="#services" class="font-semibold text-gray-600 hover:text-indigo-600">Services</a>
                <a href="#testimonials" class="font-semibold text-gray-600 hover:text-indigo-600">Testimonials</a>
                <a href="#about" class="font-semibold text-gray-600 hover:text-indigo-600">About</a>
                <a href="#faq" class="font-semibold text-gray-600 hover:text-indigo-600">FAQ</a>
            </div>

            <!-- Request Consultation Button for Desktop (Visible on Desktop Only) -->
            <div class="hidden md:block z-20">
                <a href="{{ route('consultation.request') }}" class="inline-flex items-center px-5 py-2 font-bold text-white uppercase bg-blue-600 rounded-lg shadow-sm bg-gradient-to-r from-indigo-600 to-indigo-500 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600">
                    Request Consultation
                </a>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Links (visible on mobile only) -->
    <div x-show="open" class="md:hidden px-4 mt-4 space-y-2 z-10">
        <a href="{{ route('welcome') }}" class="block px-3 py-2 text-gray-600 rounded-md hover:bg-indigo-50 hover:text-indigo-600">Home</a>
        <a href="#services" class="block px-3 py-2 text-gray-600 rounded-md hover:bg-indigo-50 hover:text-indigo-600">Services</a>
        <a href="#testimonials" class="block px-3 py-2 text-gray-600 rounded-md hover:bg-indigo-50 hover:text-indigo-600">Testimonials</a>
        <a href="#about" class="block px-3 py-2 text-gray-600 rounded-md hover:bg-indigo-50 hover:text-indigo-600">About</a>
        <a href="#faq" class="block px-3 py-2 text-gray-600 rounded-md hover:bg-indigo-50 hover:text-indigo-600">FAQ</a>

        <!-- Request Consultation Button for Mobile (Styled as a Regular Link) -->
        <a href="{{ route('consultation.request') }}" class="block w-full px-3 py-2 text-center text-white bg-indigo-600 rounded-md hover:bg-indigo-700">
            Request Consultation
        </a>
    </div>
</nav>
