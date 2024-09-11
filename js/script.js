let messagesArray = [];

function sendMessage() {
    const messageInput = document.getElementById('message-input');
    const message = messageInput.value;

    if (message.trim() !== '') {
        appendMessage(`Vous: ${message}`);
        messagesArray.push(message); // Ajouter à l'historique
        messageInput.value = ''; // Réinitialiser le champ de saisie
    }
}

function sendFile() {
    const fileInput = document.getElementById('file-input');
    const file = fileInput.files[0];

    if (file) {
        appendMessage(`Vous avez envoyé un fichier: ${file.name}`);
        messagesArray.push(`Fichier: ${file.name}`); // Ajouter à l'historique
        fileInput.value = ''; // Réinitialiser le champ de fichier
    }
}

function appendMessage(message) {
    const messagesDiv = document.getElementById('messages');
    const messageElement = document.createElement('div');
    messageElement.innerText = message;
    messagesDiv.appendChild(messageElement);
    messagesDiv.scrollTop = messagesDiv.scrollHeight; // Faire défiler vers le bas
}

function searchMessages() {
    const searchInput = document.getElementById('search-input').value.toLowerCase();
    const messagesDiv = document.getElementById('messages');
    messagesDiv.innerHTML = ''; // Effacer les messages affichés

    messagesArray.forEach(message => {
        if (message.toLowerCase().includes(searchInput)) {
            appendMessage(message);
        }
    });
}

function toggleDarkMode() {
    document.body.classList.toggle('dark-mode');
}
