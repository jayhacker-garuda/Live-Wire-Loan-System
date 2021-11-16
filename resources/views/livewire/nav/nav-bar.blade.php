<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <header class="fixed z-50 w-full text-gray-600 body-font">
        <div class="container flex flex-col flex-wrap items-center p-5 mx-auto md:flex-row">
            <a class="flex items-center p-1 mb-4 font-medium text-gray-900 bg-gray-400 rounded-md title-font md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" class="w-10 h-10 p-2 text-white bg-indigo-500 rounded-full"
                    viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">Take A Loan</span>
            </a>
            <nav
                class="flex flex-wrap items-center justify-center p-1 text-base bg-gray-400 rounded-md md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400">
                <a class="mr-5 font-black uppercase hover:text-gray-900">{{ Auth::user()->user_type }}</a>
                <a class="mr-5 hover:text-gray-900">{{ Auth::user()->name }}</a>
            </nav>
            <button wire:click='logout'
                class="inline-flex items-center px-3 py-1 mt-4 text-base bg-red-100 border-0 rounded focus:outline-none hover:bg-red-200 md:mt-0">Logout
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>
    </header>
</div>
