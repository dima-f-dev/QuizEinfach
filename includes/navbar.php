<nav class="bg-white border-b border-slate-200 px-6">
    <div class="mx-auto max-w-7xl px-6">
        <div class="flex h-16 items-center justify-between">

            <!-- Logo -->
            <span  class="text-xl font-bold text-gray-900">
                <a href="/" class="cursor-pointer"><span class="text-2xl">💡</span><span class="text-emerald-700"> Quiz</span><span class="text-amber-800">Einfach</span></a>
            </span>

            <!-- Desktop Navigation -->
            <div class="hidden items-center gap-6 md:flex">
                <a href="/home" class="text-gray-600 hover:text-gray-900">
                    Startseite
                </a>

                <a href="/faq" class="text-gray-600 hover:text-gray-900">
                    Hilfe & Prompt
                </a>
            <span class="relative inline-flex">
                <a href="/create" class="rounded-lg border border-emerald-600 px-4 py-2 text-sm font-medium text-emerald-600 hover:border-emerald-700">
                    Quiz importieren
                </a>
                <span class="absolute top-0 right-0 -mt-1 -mr-1 flex size-3"><span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-emerald-400 opacity-75"></span><span class="relative inline-flex size-3 rounded-full bg-emerald-500"></span></span>
            </span>
            </div>

            <!-- Mobile Menu Button -->
            <button id="menuButton" class="rounded-md p-2 text-gray-700 md:hidden cursor-pointer" type="button" >
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

        </div>

        <!-- Mobile Navigation -->
        <div id="mobileMenu" class="hidden pb-4 md:hidden">
            <div class="flex flex-col gap-2">
                <a href="/home" class="rounded px-3 py-2 hover:bg-gray-100">
                    Startseite
                </a>

                <a href="/faq" class="rounded px-3 py-2 hover:bg-gray-100">
                    Hilfe & Prompt
                </a>

                <a href="/create" class="mt-2 rounded-lg bg-blue-600 px-4 py-2 text-center font-medium text-white hover:bg-blue-700">
                    Quiz importieren
                </a>
            </div>
        </div>
    </div>
</nav>

