// Réponses préétablies pour le faux chat
const reponsesPredefinies = {
    "bonjour": "Chalu mon khey",
    "ça va ?": "Ouais cha peut aller",
    "connard": "Ta mère la Chatte",
    "ta mère la chatte":"Moi j'ai une mère au moins ;)",
    "je t'aime":" bah pas moi ptdr",
    "t'aimes la pelote ?":"ouais pelote de laine",
    "ça va pas ?":"Cha allais avant que tu me parles",
    "ferme ta gueule":"toi ferme tagueule le chartier",
    "tu m'insultes pas":"je t'insulte si je veux",
    "quoi":"Feur ! Allez mon gars",
    "j":"FK ?",
    "FDP":"Frère De Pelote",
    "fdp":"Frère de pelote",
    "au revoir":"à la revoyure mon khey",
    "tu fais quoi ?":"je te parle, t'es con ou quoi ?",
    "pas besoin de m'insulter":"bah tu le cherches aussi",
    "attention":"????",
    "je t'invite au bar ce soir":"cool !",
    "t'es de quelle race ?":"heuuuuu, changeons de sujet veux tu ?",
    "Miaou":"MIAOUUU",
    "Miaou ?":"MIAAAAAAAAOUUUUUUUUUuuuuu ?",
    "Miaou !":"Miaouuu miaou miaouuuuu !",
    "MIAOU !":"Ho du calme pas besoin de me crier dessus aussi fort",
    "t'as fais une faute d'orthographe" : "je suis chalexique aussi",
    "tu aimes le lait ?":"cha'dore ça !",
    "tu es cool":"Pas autant que toi ;)",
    "chatlu":"Chalut c'est Rufus",
    "tu veux faire le tour du monde en 80jours ?":"je te conseille d'aller sur Eighty Days",
    "quoicoufish":"Apafish Apafish",
    "miaou":"miaouuu?",
    "miaou?":"miaou miaouuu",
    "tu connais océane ?":"Ouais elle nous doit des petits pains",
    "tu connais hugues ?":"ouais, c'est lui qui a pissé sur le paillason",
    "miaou!":"miaouuu miamou miaou miamiaou",
    "tu connais pauline ?":"oui, elle m'en veut de ne pas avoir signé",
    "tu connais valentin ?":"oui, c'est lui qui a fait le site(avec chat gpt)",
    "tu connais maxime ?":"oui, c'est le dictateur du groupe",
    "tu connais kevin ?":"oui, c'est lui qui casse toujours tout",
    "tu connais steeven ?":"non, il est sûrement mort au combat",
    "tu connais romain ?":"oui, on l'entend jamais, mais on le voit",
    "c'est quoi ta couleur préférée ?":"le saumon",
    "saumon ou saumon ?": "bah euh saumon ?",
    "comment avoir peur ?":" va sur ghostland et tu verras",
    "israël ou palestine":"je ne suis qu'un chat je ne suis pas apte à répondre",
    "tu aimes quoi ?":"la pelote, et le lait !",
    "tu fais quoi sur le site ?":"j'essaie de me faire des chatmis",
    "Bel-Ami":"Chalami",
    "t'aimes le lait ?": "Chadore ça !!!",
    "ta mère":"on avait dit pas les mamans",
    "on sort ?":"ouais, cha me va",
    "tu viens d'où ?":"de nulle part et d'ailleurs",
    "?":"???",
    "c'est quoi le sens de la vie ?": "42 espèces de tocard",
    "ma mère est morte":"bah bien fait pour ta gueule",
    "tu es beau":"on me le dit souvent ;)",
    "tu es drôle":"pourtant je rigole pas",
    "tu fumes ?": "je suis un chat -_-",
    "tu connais rachida ?": "oui, c'est la clando du groupe( elle est hors la loi)",
    "tu connais helena ?": " oui elle connait le LocalStirage mais elle déclare R",
    "tu connais rodrigue ?":"oui, c'est le barbu du groupe, un véritable viking",
    "tu connais gregor ?":"oui, c'est lui qui contribue aux petits pains lors du banquet félin",
    "tu connais salima ?":"oui c'est la ch'ti de la classe",
    "tu connais lika ?" : "oui, la maestra du copié/collé",
    "tu connais fatima ?": "oui, c'est la retardataire du groupe",
    "t'aimes les caresses ?":"oui beaucoup",
    "donne la patte":"je suis pas un chien...",
    "tu aimes les chiens ?":"non pas vraiment",
    "tu es un chat":"bien vu l'aveugle",
    "tu connais Sherlock Code ?":"ha le groupe de pseudo codeur",
    "tu es qui ?":"un chat...",
    "tu aimes quoi ?": "le lait, c'est vachement bon !",
    "tu aimes les croquettes ?":"oui, bien que je préfère la pâté",
    "apagnan":"quoicoubeh quoicoubeh",
    "tu chasses ?":"oui, je suis un chat soeur ptdr",
    "on va bouffer ?": "oui pourquoi pas",
    "on va manger ?": "oui pourquoi pas",
    "lait ou pelote ?": "lait",
    "tu connais sarkozy ?":"https://youtu.be/4d-sA2nqE0g?list=RD4d-sA2nqE0g",
    "tu as des amis ?":"oui j'ai beaucoup de chat'mis",
    "qu'est ce que tu fais ici ?":"j'essai de me faire des amis",
    "raconte moi une blague": "un chat qui retombe sur ces pattes c'est un chatteux",
    "tu es sympas": "c'est vraie",
    "tu es con":"tu t'es pas entendu",
    "batard":"c'est pour les chiens ça",
    "on joue à un jeu":"en ce moment j'ai pas envie",
    "xd":"XDDDDDD",
    "xoxo":"moi aussi je t'aimes",
    "tu connais catdnappeur ?":"tu en sais trop -_-",
    "dis moi tout ce que tu sais sur catdnappeur":"t'as pas bien compris à qui tu parles",
    "tu es vraiment un chat ?":"qui sait ?",
    "42":" alors toi aussi tu connais le sens de la vie",
    "tu connais le chat de Schrödinger ?":"ouais ce pauvre chat meurt pour vivre et vie pour mourir",
    "chalu":"chalu !",
    "tu connais samir":"oui, c'est le détect'cat'ive du groupe",
    "fais moi rire":"non",

  };
  function afficherReponsesFauxChat(message) {
    const chatBox = document.getElementById("chatBox");
    const newMessage = document.createElement("div");
    newMessage.classList.add("message");
    const reponse = reponsesPredefinies[message];
    if (reponse) {
      newMessage.textContent = reponse;
      newMessage.classList.add("incoming");
    } else {
      newMessage.textContent = "?";
      newMessage.classList.add("outgoing");
    }
   
    chatBox.appendChild(newMessage);
  }
   
  // Écouteur d'événement pour surveiller la saisie dans l'input
  const userInput = document.getElementById("userInput");
  userInput.addEventListener("keypress", function(e) {
    if (e.key === "Enter") {
      const message = userInput.value;
      afficherReponsesFauxChat(message);
      userInput.value = ""; // Efface le champ après l'envoi du message
    }
  });
  