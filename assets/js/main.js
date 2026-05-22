// Navbar

const menuButton = document.getElementById('menuButton');
const mobileMenu = document.getElementById('mobileMenu');
menuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});


// Quiz importieren
function saveQuiz() {

  const textAusFeld = document.getElementById("json-input").value;
  const neuesQuiz = JSON.parse(textAusFeld);
  const speicherText = localStorage.getItem("quizzes");
  
  let liste = speicherText ? JSON.parse(speicherText) : [];

  liste.push(neuesQuiz);

  localStorage.setItem("quizzes", JSON.stringify(liste));

  window.location.href = `/?page=quiz&id=${encodeURIComponent(neuesQuiz.quizId)}`;

}

//Quizübersicht 
document.addEventListener("DOMContentLoaded",() => {
  
  const liste = document.getElementById("quiz-liste");
  const datenText = localStorage.getItem("quizzes");

  if (datenText) {
    const quizObjekt = JSON.parse(datenText);

    
    
    quizObjekt.forEach((einzelnesQuiz) => {

      const link = document.createElement("a");

      link.href = `/?page=quiz&id=${einzelnesQuiz.quizId}`;
      
      link.textContent = einzelnesQuiz.quizTitle;
      
      link.className = "px-3 py-2 rounded-lg text-slate-600 hover:bg-slate-100 text-sm transition";
   
      liste.appendChild(link);

    });


  }
});