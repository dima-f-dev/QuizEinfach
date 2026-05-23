
const params = new URLSearchParams(window.location.search);
const quizId = params.get("id");



const datenText = localStorage.getItem("quizzes");
const parsedObject2 = JSON.parse(datenText);

const parsedObject = parsedObject2.find(quiz => quiz.quizId === quizId);


// Quiz
const titleElement = document.getElementById("quiz-title");
titleElement.textContent = parsedObject.quizTitle;

let currentIndex = 0; 
let userAnswers = {}; // Antworten-Array
let result = ""; // Ergebnis

const container = document.getElementById("question-container");

renderQuestion(currentIndex);

function renderQuestion(index) {
  container.innerHTML = ""; 

  const q = parsedObject.questions[index];

  const questionBlock = document.createElement("div");
  questionBlock.classList.add("question");

  const correctAnswersQ = q.correctAnswers.length;

  // Frage
  const questionTitle = document.createElement("h3");
  questionTitle.textContent = q.question;
  questionTitle.className = "text-xl font-semibold text-slate-800 mb-4";
  questionBlock.appendChild(questionTitle);

  // Info
  const questionErford = document.createElement("div");
  questionErford.textContent = correctAnswersQ > 1 ? "Es sind " + correctAnswersQ + " Antworten richtig." : "Es ist 1 Antwort richtig.";

  questionErford.className = "text-sm font-medium text-slate-500 mb-4";
  questionBlock.appendChild(questionErford);

  // Antworten
  const answersList = document.createElement("div");
  answersList.className = "answers mb-4";

  q.answers.forEach((answer, i) => {
    const label = document.createElement("label");
    label.className = "flex items-center gap-3 p-4 border border-slate-500 rounded-lg cursor-pointer hover:bg-gray-100 has-[:checked]:bg-blue-100 has-[:checked]:border-blue-500 mb-2";

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

  // Weiter
  const nextBtn = document.createElement("button");
  nextBtn.textContent = index === parsedObject.questions.length - 1 ? "Fertig" : "Weiter";

  nextBtn.className = "bg-emerald-600 hover:bg-emerald-700 text-white font-semibold px-6 py-2.5 rounded-lg transition-colors cursor-pointer w-full md:w-auto";

  nextBtn.addEventListener("click", () => {
    if (currentIndex < parsedObject.questions.length - 1) {

        currentAnswers = parsedObject.questions[currentIndex].correctAnswers;
        console.log( "Korrekte Antworten = " + currentAnswers);

        userAnswers = Array.from(document.querySelectorAll('input:checked')).map(input => Number(input.value));
        console.log( "Benutzerantworten = " + userAnswers);

        if (JSON.stringify(currentAnswers.sort()) === JSON.stringify(userAnswers.sort())) {
            alert("Richtig");
        } else { alert("Falsch, probiere noch mal"); return;}

      currentIndex++;
      renderQuestion(currentIndex);
    } else {
      container.innerHTML = "<p class='text-green-600 font-semibold'>Quiz beendet</p>";
    }
  });

  questionBlock.appendChild(nextBtn);

  container.appendChild(questionBlock);
}
