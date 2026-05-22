<h1 class="text-2xl font-bold text-slate-900 mb-4">Quiz importieren</h1>
<p class="text-slate-600 leading-relaxed">JSON-Code im vorgesehenen Format einfügen. Informationen zum Prompt findet ihr <a href="/?page=faq" class="text-blue-600 underline hover:no-underline cursor-pointer font-semibold">hier</a>, oder ihr könnt den Test-Prompt importieren.</p>

<div class="space-y-4 mt-4">
    <div>
         <textarea id="json-input" rows="8" placeholder="JSON hier einfügen..." class="w-full px-3 py-2 border border-slate-300 rounded-lg font-mono text-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 bg-white"></textarea>
    </div>
    <button onclick="saveQuiz()" class="bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-6 py-2.5 rounded-lg transition-colors cursor-pointer w-full md:w-auto">
        Importieren
    </button>
</div>