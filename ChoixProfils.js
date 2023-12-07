"use strict";

const slides = document.querySelectorAll(".slide");
const nextSlide = document.querySelector(".btn-next");
const prevSlide = document.querySelector(".btn-prev");
const monBouton = document.getElementById('Pelote');

let curSlide = 0;
let maxSlide = slides.length - 1;

function updateContentVisibility() {
  document.querySelectorAll(".content").forEach(content => {
    content.style.display = "none";
  });

  slides.forEach((slide, indx) => {
    const contentForSlide = document.querySelector(`.contentForSlide${indx}`);
    if (indx === curSlide) {
      slide.style.transform = `translateX(0)`;
      contentForSlide.style.display = "block";
      updateButtonLink(indx);
    } else {
      slide.style.transform = `translateX(${100 * (indx - curSlide)}%)`;
      contentForSlide.style.display = "none";
    }
  });
}

function updateButtonLink(position) {
  switch (position) {
    case 0:
      monBouton.setAttribute('onclick', 'window.location.href="profil.html";');
      break;
    case 1:
      monBouton.setAttribute('onclick', 'window.location.href="profil1.html";');
      break;
    case 2:
      monBouton.setAttribute('onclick', 'window.location.href="profil2.html";');
      break;
    case 3:
      monBouton.setAttribute('onclick', 'window.location.href="profil3.html";');
      break;
    default:

      break;
  }
}


slides.forEach((slide, indx) => {
  slide.style.transform = `translateX(${indx * 100}%)`;
});


nextSlide.addEventListener("click", function () {
  if (curSlide === maxSlide) {
    curSlide = 0;
  } else {
    curSlide++;
  }


  updateContentVisibility();
});


prevSlide.addEventListener("click", function () {
  if (curSlide === 0) {
    curSlide = maxSlide;
  } else {
    curSlide--;
  }


  updateContentVisibility();
});


updateContentVisibility();


/////////////////////////////////////////////////////////////////////////////////////////////////////////


var audio = new Audio("./jeu/son/Nounours.mp3");


function func() {
  console.log(audio);
  audio.play();
}

var audio2 = new Audio("./jeu/son/Diarrhée.mp3");


function func2() {
  console.log(audio2);
  audio2.play();
}


"use strict";

const peloteButton = document.getElementById('Pelote');

function pelotebuttonDown() {
  peloteButton.classList.add('clicked');
}

function pelotebuttonUp() {
  peloteButton.classList.remove('clicked');
}


peloteButton.addEventListener("mouseleave", function () {
  peloteButton.classList.remove('clicked');
});

"use strict";

const laitButton = document.getElementById('Lait');

function laitbuttonDown() {
  laitButton.classList.add('clicked');
}

function laitbuttonUp() {
  laitButton.classList.remove('clicked');
}


laitButton.addEventListener("mouseleave", function () {
  laitButton.classList.remove('clicked');
});

"use strict";

const ratButton = document.getElementById('Rat');

function ratbuttonDown() {
  ratButton.classList.add('clicked');
}

function ratbuttonUp() {
  ratButton.classList.remove('clicked');
}


ratButton.addEventListener("mouseleave", function () {
  ratButton.classList.remove('clicked');
});

