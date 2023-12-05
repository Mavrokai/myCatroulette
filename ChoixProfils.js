
"use strict";

const slides = document.querySelectorAll(".slide");
const nextSlide = document.querySelector(".btn-next");
const prevSlide = document.querySelector(".btn-prev");

let curSlide = 0;
let maxSlide = slides.length - 1;

function updateContentVisibility() {
  // Mettez en œuvre la logique pour afficher ou masquer les contenus en fonction de curSlide
  // Utilisez les identifiants uniques des éléments de contenu associés à chaque image
  document.querySelectorAll(".content").forEach(content => {
    content.style.display = "none";
  });

  // Ajoutez des conditions pour chaque diapositive
  if (curSlide === 0) {
    document.querySelector(".contentForSlide0").style.display = "block";
    document.querySelector(".contentForSlide1").style.display = "none";
    document.querySelector(".contentForSlide2").style.display = "none";
    document.querySelector(".contentForSlide3").style.display = "none";
  } else if (curSlide === 1) {
    document.querySelector(".contentForSlide0").style.display = "none";
    document.querySelector(".contentForSlide1").style.display = "block";
    document.querySelector(".contentForSlide2").style.display = "none";
    document.querySelector(".contentForSlide3").style.display = "none";
  } else if (curSlide === 2) {
    document.querySelector(".contentForSlide0").style.display = "none";
    document.querySelector(".contentForSlide1").style.display = "none";
    document.querySelector(".contentForSlide2").style.display = "block";
    document.querySelector(".contentForSlide3").style.display = "none";
  } else if (curSlide === 3) {
    document.querySelector(".contentForSlide0").style.display = "none";
    document.querySelector(".contentForSlide1").style.display = "none";
    document.querySelector(".contentForSlide2").style.display = "none";
    document.querySelector(".contentForSlide3").style.display = "block";
  }
}

// Initialisation
slides.forEach((slide, indx) => {
  slide.style.transform = `translateX(${indx * 100}%)`;
});

// Événement pour la diapositive suivante
nextSlide.addEventListener("click", function () {
  if (curSlide === maxSlide) {
    curSlide = 0;
  } else {
    curSlide++;
  }

  slides.forEach((slide, indx) => {
    slide.style.transform = `translateX(${100 * (indx - curSlide)}%)`;
  });

  // Mettez à jour la visibilité des contenus en fonction de la diapositive actuelle
  updateContentVisibility();
});

// Événement pour la diapositive précédente
prevSlide.addEventListener("click", function () {
  if (curSlide === 0) {
    curSlide = maxSlide;
  } else {
    curSlide--;
  }

  slides.forEach((slide, indx) => {
    slide.style.transform = `translateX(${100 * (indx - curSlide)}%)`;
  });

  // Mettez à jour la visibilité des contenus en fonction de la diapositive actuelle
  updateContentVisibility();
});



/////////////////////////////////////////////////////////////////////////////////////////////////////////


var audio = new Audio("./jeu/son/Nounours.mp3");


function func() {
  console.log(audio);
  audio.play();
}


