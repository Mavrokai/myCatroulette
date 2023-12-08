/**
 * @author LANE Romuald 😎 <laneromuald@gmail.com>
 */

window.onload = function() {

    canvas = document.getElementById("jardin");
    if (!canvas) {
        alert("Impossible de récupérer le canvas");
        return;
    }
    contexte = canvas.getContext("2d");
    if (!contexte) {
        alert("Impossible de récupérer le context du canvas");
        return;
    }
    document.addEventListener("keydown", keySprint);
    //speed
    denov = 8;

    vitesse = 1000 / denov;
    intervalID = setInterval(main, vitesse);


}
//variables Globales
snakeheadx = 25;
snakeheady = 25;
fruitx = 250;
fruity = 250;
largeur = hauteur = 30;
deplacex = 0;
deplacey = 0;
const sonCollisionFruit = new Audio('son/Bonus.wav');
const sonGameOver = new Audio('son/Gameover.mp3');

sonGameOver.addEventListener('ended', function() {
    sonGameOver.currentTime = 0;  // Réinitialisez la position de lecture à 0
});


//head of snake
serpent = new Image();
serpent.src = "image/TêteChatD.png";
corps = new Image();
corps.src = "image/CorpsChat.png";
back = new Image();
back.src = "image/back.PNG";

//les fruits
f1 = new Image();
f1.src = "image/passion.png";
f2 = new Image();
f2.src = "image/orange.png";
f3 = new Image();
f3.src = "image/lemon.png";
f4 = new Image();
f4.src = "image/avoca.png";
f5 = new Image();
f5.src = "image/mango.png";

//A  présent  pour  plus  de  logique  ne  laissons  pas  le  serpent  faire  un  demi-tour  sur  lui-même la variable tour
tour = 0;

//depalcei
depalcei = 500;

//pause
gamepause = false;

//control snake move
trace = [];
tailleTrace = 3;
// trace.push({snakeheadx:snakeheadx,snakeheady:snakeheady});
// trace.push({x:snakeheadx,y:snakeheady});

//tableau de fruits
fruits = [f1, f2, f3, f4, f5];
fruitsuivant = 3;

//variable pour score
score = 0;
banane = 0;
bmaj = document.getElementById("bananescounter");
orange = 0;
omaj = document.getElementById("orangecounter");
lemon = 0;
lmaj = document.getElementById("lemoncounter");
avoca = 0;
amaj = document.getElementById("avocacounter");
mango = 0;
mmaj = document.getElementById("mangocounter");
scoremaj = document.getElementById("valeurscore");

collisionbody = false;
attenterand = 0;

//la gestion du time
centi = 0;
mili = 0;
sec = 0;
sec_ = 0;
m = 0;

startingMinutes = 3;
go = startingMinutes * 60;

//document.getElementById("valeurTime").innerHTML = afficher;
energie = 1;
flou = 0;



//fonction principale de notre jeu le main
function main() {

//le timer ce lance des lorsquons commence a jouer

//Le snake se deplace 
snakeheadx += deplacex * largeur;
snakeheady += deplacey * hauteur;

//place au Game Over
gameover();
contexte.clearRect(0, 0, canvas.width, canvas.height); // efface la zone de canvas
contexte.fillStyle = "#DEB887";
contexte.fillRect(0, 0, canvas.width, canvas.height);
// la longueur et la largeur de fillRect sont donnees en pixels
//fillRect permet de construire des rectangle plein
contexte.strokeStyle = 'red';
//strokeRect permet de construire des contours
contexte.strokeRect(0, 0, canvas.width, canvas.height)
contexte.drawImage(back, 0, 0);

//le serpent et son corps
for (var i = 0; i < trace.length; i++) {
    var nouvelleLargeur = 40; // Choisissez la nouvelle largeur souhaitée
    var nouvelleHauteur = 40;
    //contexte.fillRect(trace[i].snakeheadx,trace[i].snakeheady,largeur,hauteur);
    contexte.drawImage(corps, trace[i].snakeheadx, trace[i].snakeheady, nouvelleLargeur, nouvelleHauteur);
    //if(trace[i].snakeheadx==snakeheadx && trace[i].snakeheady==snakeheady) {

    //    tailleTrace = 3;
    //}

}

contexte.drawImage(serpent, snakeheadx, snakeheady, nouvelleLargeur, nouvelleHauteur);
//contexte.drawImage(serpent,snakeheadx-25, snakeheady-25);
//push() ajoute un ou plusieurs éléments à la fin d'un tableau et retourne la nouvelle taille du tableau.
trace.push({ snakeheadx: snakeheadx, snakeheady: snakeheady });
while (trace.length > tailleTrace) {
    //shift() permet de retirer le premier élément d'un tableau et de renvoyer cet élément.
    // Cette méthode modifie la longueur du tableau.
    trace.shift();

}

//collision du serpent avec lui meme
if (trace.length > 3) {
    for (var jo = 0; jo < trace.length - 1; jo++) {
        // la position lenngth - 1 est celle de la tête elle n'a pas besoin d'être inclut dans le test avec elle même!
        if ((trace[jo].snakeheadx == trace[trace.length - 1].snakeheadx) && (trace[jo].snakeheady == trace[trace.length - 1].snakeheady)) {
            collisionbody = true;
            gameover();
            break;
        }
    }
}

// et si le serpent mange un fruit
if (
    snakeheadx < fruitx + largeur &&
    snakeheadx + largeur > fruitx &&
    snakeheady < fruity + hauteur &&
    snakeheady + hauteur > fruity
) {
    
    document.getElementById('colis').play();
    energie++;
     sonCollisionFruit.play();

    if (fruitsuivant == 0) {
        banane++;
        bmaj.innerHTML = banane;
    }
    if (fruitsuivant == 1) {
        orange++;
        omaj.innerHTML = orange;
    }
    if (fruitsuivant == 2) {
        lemon++;
        lmaj.innerHTML = lemon;
    }
    if (fruitsuivant == 4) {
        mango++;
        mmaj.innerHTML = mango;
    }
    if (fruitsuivant == 3) {
        avoca++;
        amaj.innerHTML = avoca;
    }
    // ... (code pour les autres fruits)

    fruitsuivant = Math.trunc(Math.random() * 5);
    flou = 1 + 60 - m;
    score += flou;
    majScore(score);
    m = 0;
    n = 3;
    go = startingMinutes * 60;
    tailleTrace++;

    // coordonnees fruits par random 
    fruitx = Math.round(Math.random() * (canvas.width - largeur) / largeur) * largeur;
    fruity = Math.round(Math.random() * (canvas.height - hauteur) / hauteur) * hauteur;

    for (var i = 0; i < trace.length; i++) {
        if (
            trace[i].snakeheadx === fruitx &&
            trace[i].snakeheady === fruity
        ) {
            // Si le fruit apparaît sur le serpent, recalculer les coordonnées
            fruitx = Math.round(Math.random() * (canvas.width - largeur) / largeur) * largeur;
            fruity = Math.round(Math.random() * (canvas.height - hauteur) / hauteur) * hauteur;
            // Vous pouvez également ajouter une boucle pour vérifier à nouveau avec d'autres parties du serpent si nécessaire
        }
    }
}

//nous decidons qu'apres 100 secondes si le serpent n'a pqs encore consomme la pomme  on deplace sa position
else {
    attenterand = attenterand + 2;
    if (attenterand > 100) {
        attenterand = 0;
        // coordonnees fruits par random 
        fruitx = Math.round(Math.random() * (canvas.width - largeur) / largeur) * largeur;
        fruity = Math.round(Math.random() * (canvas.height - hauteur) / hauteur) * hauteur;
        for (var i = 0; i < trace.length; i++) {
            if (trace[i].snakeheadx == fruitx && trace[i].snakeheady == fruity) {
                fruitx = Math.round(Math.random() * (canvas.width - largeur) / largeur) * largeur;
                fruity = Math.round(Math.random() * (canvas.height - hauteur) / hauteur) * hauteur;
            }
        }
        fruitsuivant = Math.trunc(Math.random() * 5); //on random pour l'indice du prochain fruit
    }

}

if (
    snakeheadx < fruitx + 70 &&
    snakeheadx + 30 > fruitx &&
    snakeheady < fruity + 70 &&
    snakeheady + 30 > fruity
  ) {
    document.getElementById('colis').play();
    energie++;
  
    // ... (le reste de votre code pour la gestion du fruit)
  }


//probleme
if (fruitx > 500) {
    fruitx = 250;
}
if (fruitx < 5) {
    fruitx = 250;
}
if (fruity > 500) {
    fruity = 250;
}
if (fruity < 5) {
    fruity = 250;
}
contexte.drawImage(fruits[fruitsuivant], fruitx, fruity, largeur, hauteur);

//Le Chono;
contexte.fillStyle = '#2c3e50';
contexte.fillRect(0, 500, 525, 25);
contexte.font = 'bold 20px sans-serif';
contexte.strokeStyle = '#2c3e50';
contexte.fillStyle = 'white';
contexte.textBaseline = 'middle';

contexte.strokeText('TIME: ' + n + ':' + m, posx, posy);
contexte.fillText('TIME: ' + n + ':' + m, posx, posy);

//acceleration
//apres 6 fruits conseomme le jeux accelere
if (energie > 3) {
    energie = 0;

    clearInterval(intervalID);
    denov = denov + 1;
    vitesse = 1000 / denov;
    intervalID = setInterval(main, vitesse);
}

}



// fonction Gameover
function gameover() {
    
if (snakeheadx < -1 || snakeheadx > depalcei + 1 || snakeheady < -1 || snakeheady > depalcei - 1 || collisionbody == true) {
    sonGameOver.play();
    contexte.font = 'bold 50px sans-serif';
    contexte.strokeStyle = '#2c3e50';
    contexte.fillStyle = 'white';
    contexte.textBaseline = 'middle';
    contexte.textAlign = 'center';
    contexte.strokeText('Game Over', canvas.width / 2, canvas.height / 2);
    contexte.fillText('Game Over', canvas.width / 2, canvas.height / 2);
    contexte.fillStyle = 'white';
    contexte.strokeStyle = '#2c3e50';
    contexte.font = 'bold 20px sans-serif';
    contexte.strokeText('R pour rejouer !', canvas.width / 2 + 40, canvas.height / 2 + 40);
    contexte.fillText('R pour rejouer !', canvas.width / 2 + 40, canvas.height / 2 + 40);
    denov = 5;
    vitesse = 1000 / denov;



    clearTime(intervalID);
    //window.location.reload();

}
}

//fonction pour mettre a jours le score
function majScore(s) {
scoremaj.innerHTML = s;
}

function randfruits() {
if (fruitsuivant == 0) {
    f1.src = "image/TêteChatD.png";

    fruitsuivant++;
}
if (fruitsuivant == 1) {
    f1.src = "image/TêteChatB.png";

    fruitsuivant++;
}
if (fruitsuivant == 2) {
    f1.src = "image/TêteChatH.png";

    fruitsuivant++;
}
if (fruitsuivant == 3) {
    f1.src = "image/TêteChatG.png";

    fruitsuivant++;
} else {
    fruitsuivant = 0;
    f1.src = "image/TêteChatD.png";


}

}


//la fonction pause()
function pause() {


if (!gamepause) {
    intervalID = clearInterval(intervalID);

    gamepause = true;
    contexte.font = 'bold 50px sans-serif';
    contexte.strokeStyle = 'red';
    contexte.fillStyle = 'white';
    contexte.textBaseline = 'middle';
    contexte.textAlign = 'center';
    contexte.strokeText('PAUSE', canvas.width / 2, canvas.height / 2);
    contexte.fillText('PAUSE', canvas.width / 2, canvas.height / 2);

} else if (gamepause) {
    intervalID = setInterval(main, vitesse);

    gamepause = false;
}
//clearTimeout(intervalID);
}

// la fonction keySprint() // deplacement du snake
function keySprint(evenement) {
//sablier();
switch (evenement.keyCode) {
    case 37: //37 code clavier de la touche de direction gauche
        //if(tour==39){break;}
        deplacex = -1;
        deplacey = 0;
        serpent.src = "image/TêteChatG.png";
        tour = evenement.keyCode;
        break;

    case 38: // 38 code clavier de la touche de direction haut
        if (tour == 40) { break; }
        deplacex = 0;
        deplacey = -1;
        serpent.src = "image/TêteChatH.png";
        tour = evenement.keyCode;
        break;

    case 39: //39 code clavier de la touche de direction droite
        //if(tour==37){break;}
        deplacex = 1;
        deplacey = 0;
        serpent.src = "image/TêteChatD.png";
        tour = evenement.keyCode;
        break;

    case 40: // 40 code clavier de la touche de direction  bas
        if (tour == 38) { break; }
        deplacex = 0;
        deplacey = 1;
        serpent.src = "image/TêteChatB.png";
        tour = evenement.keyCode;
        break;

    case 82: // 82 code clavier de la touche r/R , pour restart, reintialiser tous
        denov = 50;
        vitesse = 1000 / denov;
        //variable Glo
        snakeheadx = 25;
        snakeheady = 25;
        fruitx = 250;
        fruity = 250;
        largeur = hauteur = 25;
        deplacex = 0;
        deplacey = 0;
        //head of snake
        serpent = new Image();
        serpent.src = "image/TêteChatD.png";
        corps = new Image();
        corps.src = "image/CorpsChat.png";
        back = new Image();
        back.src = "image/back.png";

        //les fruits
        f1 = new Image();
        f1.src = "image/passion.png";
        f2 = new Image();
        f2.src = "image/orange.png";
        f3 = new Image();
        f3.src = "image/lemon.png";
        f4 = new Image();
        f4.src = "image/avoca.png";
        f5 = new Image();
        f5.src = "image/mango.png";
        //A  présent  pour  plus  de  logique  ne  laissons  pas  le  serpent  faire  un  demi-tour  sur  lui-même la variable tour
        tour = 0;
        //depalcei
        depalcei = 500;
        //pause
        gamepause = false;
        //control snake move
        trace = [];
        tailleTrace = 3;
        // trace.push({snakeheadx:snakeheadx,snakeheady:snakeheady});
        // trace.push({x:snakeheadx,y:snakeheady});
        //tableau de fruits
        fruits = [f1, f2, f3, f4, f5];
        fruitsuivant = 3;

        //var pour score
        score = 0;
        majScore(score);
        banane = 0;
        bmaj.innerHTML = banane;
        bmaj = document.getElementById("bananescounter");
        orange = 0;
        omaj.innerHTML = banane;
        omaj = document.getElementById("orangecounter");
        lemon = 0;
        lmaj.innerHTML = banane;
        lmaj = document.getElementById("lemoncounter");
        avoca = 0;
        amaj.innerHTML = banane;
        amaj = document.getElementById("avocacounter");
        mango = 0;
        mmaj.innerHTML = banane;
        mmaj = document.getElementById("mangocounter");
        scoremaj = document.getElementById("valeurscore");

        collisionbody = false;
        attenterand = 0;
        //le time
        centi = 0;
        mili = 0;
        sec = 0;
        sec_ = 0;
        m = 0;
        n = 3;
        startingMinutes = 3;
        go = startingMinutes * 60;
        afficher = n + ":" + m + "0";
        //document.getElementById("valeurTime").innerHTML = afficher;
        energie = 0;
        flou = 0;
        posx = 200;
        posy = 518;
        //sabler

        break;
    case 80: //  code clavier de la touche p/P, pour pause
        //intervalID=clearInterval(intervalID);

        pause();
        break;

}

}
/**
* @author LANE Romuald 😎 <laneromuald@gmail.com>
*/