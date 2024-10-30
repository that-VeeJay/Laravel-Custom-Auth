<x-layout>
    <div class="relative bg-gray-900 min-h-screen flex items-center justify-center">
        {{-- Backdrop Gradient --}}
        <div class="absolute top-50 left-50 w-96 h-96 rounded-full bg-gradient-to-br from-blue-200 to-green-600 blur-3xl opacity-15"></div>

        {{-- Welcome Message --}}
        <div class="text-center">
            <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Join</span> Now.</h1>
            <div>
                <a href="{{ route('login') }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    LOGIN
                    </span>
                </a>

                <a href="{{ route('register') }}" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                    REGISTER
                    </span>
                </a>
            </div>
        </div>
    </div>
</x-layout>
