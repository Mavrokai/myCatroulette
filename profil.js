// Réponses précalculées pour le faux chat
const fauxChatMessages = [
    "Bonjour ! Comment puis-je vous aider ?",
    "Bien sûr, voici la réponse à votre question.",
    "Je suis désolé, je ne comprends pas votre demande.",
    // Ajoutez d'autres réponses précalculées ici
  ];
   
  // Fonction pour afficher les réponses précalculées dans le faux chat
  function afficherReponsesFauxChat() {
    const chatBox = document.getElementById("chatBox");
   
    fauxChatMessages.forEach((message, index) => {
      const newMessage = document.createElement("div");
      newMessage.classList.add("message");
      newMessage.textContent = message;
   
      // Ajoutez des classes différentes pour distinguer les messages entrants et sortants
      if (index % 2 === 0) {
        newMessage.classList.add("incoming");
      } else {
        newMessage.classList.add("outgoing");
      }
   
      chatBox.appendChild(newMessage);
    });
  }
   
  // Appel de la fonction pour afficher les réponses précalculées
  afficherReponsesFauxChat();