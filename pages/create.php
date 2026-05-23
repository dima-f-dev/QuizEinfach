<h1 class="text-2xl font-bold text-slate-900 mb-4">Quiz importieren</h1>
<p class="text-slate-600 leading-relaxed">JSON-Code im vorgesehenen Format einfügen. Informationen zum Prompt findet ihr <a href="/faq" class="text-blue-600 underline hover:no-underline cursor-pointer font-semibold">hier</a>, oder ihr könnt den Test-JSON importieren.</p>

<div class="space-y-4 mt-4">
         <textarea id="json-input" rows="8" placeholder="JSON hier einfügen..." class="w-full px-3 py-2 border border-slate-300 rounded-lg font-mono text-sm focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 bg-white">
            {
    "quizId": "bonn-quiz-01",
    "quizTitle": "Test Quiz",
    "questions": [
        {
            "id": "q1",
            "question": "Welche Stadt war die Hauptstadt der Bundesrepublik Deutschland von 1949 bis 1990?",
            "answers": [
                "Bonn",
                "Berlin",
                "Hamburg",
                "München"
            ],
            "correctAnswers": [
                0
            ]
        },
        {
            "id": "q2",
            "question": "In welcher Stadt wurde Ludwig van Beethoven geboren?",
            "answers": [
                "Köln",
                "Bonn",
                "Dresden",
                "Leipzig"
            ],
            "correctAnswers": [
                1
            ]
        },
        {
            "id": "q3",
            "question": "Welche dieser Städte liegt am Rhein?",
            "answers": [
                "Bonn",
                "Erfurt",
                "Magdeburg",
                "Chemnitz"
            ],
            "correctAnswers": [
                0
            ]
        },
        {
            "id": "q4",
            "question": "Wo befindet sich der Hauptsitz der Deutschen Welle?",
            "answers": [
                "Frankfurt am Main",
                "Stuttgart",
                "Bonn",
                "Nürnberg"
            ],
            "correctAnswers": [
                2
            ]
        },
        {
            "id": "q5",
            "question": "Welche Stadt ist eine ehemalige Bundeshauptstadt Deutschlands?",
            "answers": [
                "Bonn",
                "Bremen",
                "Hannover",
                "Rostock"
            ],
            "correctAnswers": [
                0
            ]
        }
    ]
}
         </textarea> 

    <div class="mt-4 flex flex-wrap items-center gap-4">
        <button onclick="saveQuiz()" class="bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-6 py-2.5 rounded-lg transition-colors cursor-pointer w-full md:w-auto">
            Importieren
        </button>

        <button type="button" onclick="clearTextarea()" class="text-red-600 underline hover:text-red-700 cursor-pointer">
            Inhalt löschen
        </button>
    </div>
</div>