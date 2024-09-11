const express = require('express');
const nodemailer = require('nodemailer');
const bodyParser = require('body-parser');
const cors = require('cors');

const app = express();
const PORT = 3000;

app.use(cors());
app.use(bodyParser.json());

// Configuration de Nodemailer
const transporter = nodemailer.createTransport({
    service: 'gmail', // Vous pouvez utiliser d'autres services comme SendGrid, Mailgun, etc.
    auth: {
        user: 'votre_email@gmail.com', // Remplacez par votre adresse e-mail
        pass: 'votre_mot_de_passe' // Remplacez par votre mot de passe
    }
});

// Endpoint pour s'enregistrer aux alertes
app.post('/api/alertes', (req, res) => {
    const { email } = req.body;

    // Ici, vous pouvez ajouter la logique pour stocker l'adresse e-mail dans une base de données

    // Envoi de l'e-mail de confirmation
    const mailOptions = {
        from: 'votre_email@gmail.com',
        to: email,
        subject: 'Inscription aux alertes',
        text: 'Merci de vous être inscrit pour recevoir des alertes par e-mail !'
    };

    transporter.sendMail(mailOptions, (error, info) => {
        if (error) {
            return res.status(500).send('Erreur lors de l\'envoi de l\'e-mail.');
        }
        res.status(200).send('Inscription réussie ! Un e-mail de confirmation a été envoyé.');
    });
});

// Lancer le serveur
app.listen(PORT, () => {
    console.log(`Serveur en cours d'exécution sur http://localhost:${PORT}`);
});
