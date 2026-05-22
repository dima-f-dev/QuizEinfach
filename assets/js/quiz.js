
const params = new URLSearchParams(window.location.search);
const quizId = params.get("id");



const datenText = localStorage.getItem("quizzes");
const parsedObject2 = JSON.parse(datenText);

const parsedObject = parsedObject2.find(quiz => quiz.quizId === quizId);


// Quiz
const titleElement = document.getElementById("quiz-title");
titleElement.textContent = parsedObject.quizTitle;

const container = document.getElementById("question-container");

parsedObject.questions.forEach((q, index) => {
  const questionBlock = document.createElement("div");
  questionBlock.classList.add("question");

  const correctAnswersQ = q.correctAnswers.length;



  // Fragen
  const questionTitle = document.createElement("h3");
  questionTitle.textContent = q.question;
  questionTitle.className = "text-xl font-semibold text-slate-800 mb-4";
  questionBlock.appendChild(questionTitle);

  // erforderlich
  const questionErford = document.createElement("div");
  questionErford.textContent = correctAnswersQ > 1 ? "👉 "+correctAnswersQ+" Antworten erforderlich" : "👉 1 Antwort erforderlich";
  questionErford.className = "text-sm font-medium text-indigo-500 mb-4";
  questionBlock.appendChild(questionErford);

  // Antworten
    const answersList = document.createElement("div");
    answersList.className = "answers mb-4";

    q.answers.forEach((answer, i) => {
    const label = document.createElement("label");
    label.className = "flex items-center gap-3 p-4 border rounded-lg cursor-pointer hover:bg-gray-100 has-[:checked]:bg-blue-100 has-[:checked]:border-blue-500 mb-2";

    const input = document.createElement("input");
    input.type = correctAnswersQ > 1 ? "checkbox" : "radio";
    input.name = q.id;
    input.value = i;
    input.className = "sr-only";

    const span = document.createElement("span");
    span.textContent = answer;

    label.append(input, span);
    answersList.appendChild(label);
    });

  questionBlock.appendChild(answersList);
  container.appendChild(questionBlock);
});


//Result
function result() {

    let richtigeAntworten = 0;

    for (let i = 0; i < parsedObject.questions.length; i++) {

        let frage = parsedObject.questions[i];

        let checked = document.querySelectorAll(
            'input[name="' + frage.id + '"]:checked'
        );

        let richtig = true;

        if (checked.length != frage.correctAnswers.length) {
            richtig = false;
        }

        for (let j = 0; j < checked.length; j++) {

            let gefunden = false;

            for (let k = 0; k < frage.correctAnswers.length; k++) {

                if (Number(checked[j].value) == frage.correctAnswers[k]) {
                    gefunden = true;
                }
            }

            if (gefunden == false) {
                richtig = false;
            }
        }

        if (richtig) {
            richtigeAntworten++;
        }
    }

    alert("Ergebnis: " + richtigeAntworten + " von " + parsedObject.questions.length + " richtig!");
}