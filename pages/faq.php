<h1 class="text-2xl font-bold text-slate-900 mb-4">KI-Prompt zur Datengenerierung </h1>
<p class="text-slate-600 leading-relaxed mb-4">Zur Generierung neuer Fragenfolgen kann folgender Prompt in ein KI-Modell (z. B. ChatGPT) kopiert werden. 

<div class="bg-slate-100 p-4 rounded-lg font-mono text-xs text-slate-700 leading-relaxed border border-slate-200 select-all mb-4">
                                Erstelle ein Multiple-Choice-Quiz zum Thema [THEMA EINFÜGEN].<br><br>
                                WICHTIGE REGELN:<br>
                                1. Antworte AUSSCHLIESSLICH mit validem JSON. Kein Markdown, keine einleitenden oder abschließenden Sätze.<br>
                                2. Sämtliche Sonderzeichen in Fragetexten und Antworten (wie Anführungszeichen, Backslashes oder HTML/PHP-Tags) müssen JSON-konform escaped werden (z. B. \" statt "). Alternativ einfache Anführungszeichen innerhalb von Code-Snippets verwenden.<br><br>
                                STRUKTUR-VORGABE:<br>
                                {<br>
                                &nbsp;&nbsp;"quizId": "id-ohne-leerzeichen",<br>
                                &nbsp;&nbsp;"quizTitle": "Name des Quizzes",<br>
                                &nbsp;&nbsp;"questions": [<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;{<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"id": "q1",<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"question": "Was bewirkt der Tag &lt;div&gt; in HTML?",<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"answers": ["Antwort A", "Antwort B", "Antwort C"],<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"correctAnswers": [0] <br>
                                &nbsp;&nbsp;&nbsp;&nbsp;}<br>
                                &nbsp;&nbsp;]<br>
                                }<br><br>
                                Hinweis: Bei Multiple-Choice-Fragen (mehrere richtige Antworten) das Array entsprechend füllen (z. B. [0, 2]).
</div>

</p>


    <h2 class="mb-3 text-2xl font-semibold">
        Probleme beim Importieren?
    </h2>

    <p class="text-slate-600 leading-relaxed mb-4">
        Falls Probleme auftreten oder gespeicherte Quizze nicht korrekt angezeigt werden,
        könnt ihr alle lokal gespeicherten Quizze löschen und es anschließend erneut versuchen.
    </p>

    <button type="button" onclick="clearAllData()"  class="mt-4 rounded-lg bg-amber-600 px-4 py-2 font-medium text-white transition hover:bg-amber-700 cursor-pointer">
        Alle lokalen Quizze löschen
    </button>