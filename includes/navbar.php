<nav class="bg-white border-b border-slate-200 px-6">
    <div class="mx-auto max-w-7xl px-6">
        <div class="flex h-16 items-center justify-between">

            <!-- Logo -->
            <span  class="text-xl font-bold text-gray-900">
                <span class="text-2xl">💡</span> QuizEinfach
            </span>

            <!-- Desktop Navigation -->
            <div class="hidden items-center gap-6 md:flex">
                <a href="/?page=home" class="text-gray-600 hover:text-gray-900">
                    Startseite
                </a>

                <a href="/?page=faq" class="text-gray-600 hover:text-gray-900">
                    Hilfe & Prompt
                </a>

                <a href="/?page=quiz" class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700">
                    Quiz importieren
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="menuButton" class="rounded-md p-2 text-gray-700 md:hidden" type="button" >
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

        </div>

        <!-- Mobile Navigation -->
        <div id="mobileMenu" class="hidden pb-4 md:hidden">
            <div class="flex flex-col gap-2">
                <a href="/?page=home" class="rounded px-3 py-2 hover:bg-gray-100">
                    Startseite
                </a>

                <a href="/?page=faq" class="text-gray-600 hover:text-gray-900">
                    Hilfe & Prompt
                </a>

                <a href="/?page=quiz" class="mt-2 rounded-lg bg-blue-600 px-4 py-2 text-center font-medium text-white hover:bg-blue-700">
                    Quiz importieren
                </a>
            </div>
        </div>
    </div>
</nav>

