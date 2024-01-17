<?php
    $couleur_bulle_classe = "jaune";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-reset.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-fonts.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-global.css">
    <link rel="stylesheet" href="ressources/css/ne-pas-modifier/npm-header.css">
    <link rel="stylesheet" href="ressources/css/Contact.css">
    <link rel="stylesheet" href="ressources/css/header-Contact.css">
    <link rel="stylesheet" href="ressources/css/barre-navigation.css">
</head>

<body>
    <section class="conteneur-1280">
        <?php require_once('./ressources/includes/header.php'); ?>
    
        <!-- Vous allez principalement écrire votre code HTML ci-dessous -->
        <main class="conteneur-principal">
            <section class="section-contact">
                <h1 class="titre-page">Plus d'infos sur la formation?</h1>
                <h1 class="titre-page">Contactez-nous !</h1>
                <p class="paragraphe-Contact"><span>La formation s'ouvre à tous les bacheliers,</span> pour rappel. Avoir des connaissances en programmation, 
                design ou encore audiovisuel n'est pas obligatoire mais reste un bon atout, car il faut aimer la curiosité 
                dans cette formation pluridisciplinaire. <span>Il est également possible de faire la formation après une reprise 
                d'études ou une réorientation.</span></p>

                <h1 class="titre-page">Nous Contacter en ligne</h1>
                

                <form action="" method="post">
                    <ul class="conteneur-formulaire-contact">
                        <li class="conteneur-input-contact">
                            <label class="titre-de-formulaire" for="prenom">Prénom</label>
                            <input class="input-contact" type="text" id="prenom" name="user_name"/>
                        </li>
                        <li class="conteneur-input-contact">
                            <label class="titre-de-formulaire" for="nom">Nom</label>
                            <input type="text" id="nom" name="user_name"/>
                        </li>
                        <li class="conteneur-input-contact">
                            <label class="titre-de-formulaire" for="adresse-e-mail">Adresse e-mail</label>
                            <input type="text" id="adresse-e-mail" name="user_name"/>
                        </li>
                        <li class="conteneur-input-contact">
                            <label class="titre-de-formulaire" for="message">Message</label>
                            <textarea name="user_name" id="message" cols="30" rows="10"></textarea>
                        </li>
                        <li class="conteneur-input-contact">
                            <label class="titre-de-formulaire" for="je-suis">Je Suis</label>
                            <div class="conteneur-radio-contact">
                                <input type="radio" id="je ne souhaite pas précisais" name="Qui" 
                                value="je ne souhaite pas précisais" unchecked/>
                                <label for="je ne souhaite pas précisais">je ne souhaite pas précisais</label>

                                <input type="radio" id="étudiant/étudiantes" name="Qui" 
                                value="étudiant/étudiantes" unchecked />
                                <label for="étudiant/étudiantes">étudiant/étudiantes</label>

                                <input type="radio" id="Parent" name="Qui" 
                                value="Parent" unchecked />
                                <label for="Parent">Parent</label>

                                <input type="radio" id="Autres" name="Qui" 
                                value="Autres" unchecked />
                                <label for="Autres">Autres</label>
                            </div>
                        </li>
                        <li class="conteneur-input-contact">
                            <input class="button-contact" type="submit" value="ENVOYER">
                        </li>
                    </ul>
                </form>
                <h1 class="titre-page">Nous contacter par courrier</h1>
                <p class="paragraphe-Contact">IUT de Cergy-Pontoise,<br>
                Département Métiers du Multimédia et de l'internet (MMI)<br>
                34 Bis Boulevard Henri Bergson<br> 95200 Sarcelles</p>
            </section>

            <!-- à continuer ici. Mettre le code respectif de chaque page ici -->
        </main>
    </section>
</body>
</html>