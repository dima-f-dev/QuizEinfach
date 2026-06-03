// Navbar

const menuButton = document.getElementById('menuButton');
const mobileMenu = document.getElementById('mobileMenu');
menuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});


// Quiz importieren
function saveQuiz() {

  const textAusFeld = document.getElementById("json-input").value;

  // textarea leer
  if (!textAusFeld) {
    alert("Bitte fügen Sie zuerst einen JSON-Code ein!");
    return;
  }

  let neuesQuiz;

  // JSON gültig 
  try { 
    neuesQuiz = JSON.parse(textAusFeld);
  } catch (fehler) {
    alert("Der eingegebene Text ist kein gültiges JSON-Format!");
    console.error("JSON-Fehler:", fehler);
    return; 
  }

  const speicherText = localStorage.getItem("quizzes");
  
  let liste = speicherText ? JSON.parse(speicherText) : [];

  liste.push(neuesQuiz);

  localStorage.setItem("quizzes", JSON.stringify(liste));

  window.location.href = `/quiz?id=${encodeURIComponent(neuesQuiz.quizId)}`;

}

//Quizübersicht 
document.addEventListener("DOMContentLoaded",() => {
  
  const liste = document.getElementById("quiz-liste");
  const datenText = localStorage.getItem("quizzes");

  if (datenText) {
    const quizObjekt = JSON.parse(datenText);

    
    
    quizObjekt.forEach((einzelnesQuiz) => {

      const link = document.createElement("a");

      link.href = `/quiz?id=${einzelnesQuiz.quizId}`;
      
      link.textContent = "❓ " + einzelnesQuiz.quizTitle;
      
      link.className = "px-3 py-2 rounded-lg text-slate-600 hover:bg-slate-100 text-sm transition";
   
      liste.appendChild(link);

    });


  }
});


// Inhalt löschen
function clearTextarea() {
    document.getElementById('json-input').value = '';
}

// Löscht alle Einträge im LocalStorage
function clearAllData() {
  localStorage.clear();
  alert("Der gesamte LocalStorage wurde geleert.");
  window.location.reload();
}

// QUIZ löschen
function quizDelete(id) {
    const quizzes = JSON.parse(localStorage.getItem("quizzes")) || [];
    console.log(id);
    const updated = quizzes.filter(
      quiz => quiz.quizId !== id
    );
    localStorage.setItem("quizzes", JSON.stringify(updated));
    window.location.reload();
}
