<script id="variablen" type="application/json">
    {
  "quizId": "leben-in-deutschland-01",
  "quizTitle": "Leben in Deutschland",
  "questions": [
    {
      "id": "q1",
      "question": "Wie heißt der deutsche Nationalfeiertag?",
      "answers": [
        "Tag der Deutschen Einheit",
        "Tag der Arbeit",
        "Weihnachten",
        "Silvester"
      ],
      "correctAnswers": [0]
    },
    {
      "id": "q2",
      "question": "Welche der genannten Parteien gibt es in Deutschland? (Mehrere Antworten möglich)",
      "answers": [
        "CDU",
        "SPD",
        "Demokratische Partei",
        "Grüne"
      ],
      "correctAnswers": [0, 1, 3]
    }
  ]
}
</script>


<div id="quiz-wrapper" class="space-y-6">
    <h2 id="quiz-title" class="text-xl font-bold text-slate-900"></h2>
    
    <div id="question-container" class="p-6 "></div>
    
    <div class="flex justify-between items-center mt-4">
        <button id="next-btn" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
            Weiter
        </button>
    </div>
</div>