<?php
// File : french/localized.install.php - plus version (05.11.2017 - rev.10)
// Original translation for Plus version by Pierre Liget <sourceforge@pliget.freesurf.fr> 10.12.2007
// Do not use ' ; use ’ instead (utf-8 edit bug)

define("L_BTN1", "Suivant");
define("L_BTN2", "Annuler");
define("L_BTN3", "Retour");
define("L_BTN4", "Actualiser");
define("L_BTN5", "Terminer");
define("L_BTN6", "Sauter");
define("L_CONN_ERROR", "Mauvaise adresse d’hôte FTP!<br />Veuillez revenir à la page précédente et vérifiez l’adresse de votre serveur FTP.");
define("L_LOGIN_ERROR", "Echec d’authentification!<br />Veuillez revenir à la page précédente et vérifiez votre login et mot de passe.");
define("L_FTP_NAME", "Aucun nom d’utilisateur saisi!");
define("L_FTP_PASS", "Aucun mot de passe saisi!");
define("L_DB_NOCONNECT", "Impossible de se connecter à la base de données!");
define("L_DB_HINT1", "La base de données %s n’existe pas et ne peux pas être créée!");
define("L_PASS_ERROR1", "Vous n’avez pas saisi un nom d’administrateur.<br />Veuillez revenir à la page précédente et choisissez un nom pour votre compte Administrateur!");
define("L_PASS_ERROR2", "Vous devez saisir les champs mots de passe<br />Veuillez revenir à la page précédente et saisir 2 fois le même mot de passe!");
define("L_PASS_ERROR3", "Les 2 mots de passe ne correspondent pas.<br />Veuillez revenir à la page précédente et taper à nouveau les mots de passe!");
define("L_FILE_ERROR1", "Impossible de changer les attributs du fichier (CHMOD)");
define("L_FILE_ERROR2", "");
define("L_FOLD_ERROR1", "Impossible de changer les attributs du répertoire (CHMOD)");
define("L_FOLD_ERROR2", "");
define("L_INST_FOR", "Programme d’installation pour %s");
define("L_INST_VER", "Version:");
define("L_INST_SETUP", "Setup -");
define("L_INST_PAG_OF", "Page %s de %s");
define("L_P0_HINT1", "Bienvenue sur notre programme d’installation pour %s.");
define("L_P0_HINT2", "Veuillez saisir votre login FTP ci-dessous.");
define("L_P1_HINT1", "Ce programme vous guidera tout au long du processus d’installation.<br />Veuillez sélectionner votre type d’installation.");
define("L_P1_HINT2", "Veuillez préciser de quel type d’installation il s’agit :");
define("L_P1_HINT3", "Les données FTP que vous avez fournies semblent incorrectes. L’installation ne peut pas se poursuivre. Veuillez revenir à la page précédente et corrigez les erreurs. Voici les messages d’erreurs :");
define("L_P2_HINT1", "Maintenant nous allons vérifier la configuration de phpMyChat. Un seul fichier devrait être modifié (\"config/config.lib.php\") sur ce serveur.");
define("L_P2_HINT2", "Le fichier de configuration est en lecture seule. Pour le rendre accessible en écriture, utilisez un programme FTP (ex. Total Commander) pour vous connecter à votre serveur et appliquer les permissions CHMOD 666 au fichier \"config.lib.php\" dans le répertoire config). Si vous ne savez pas comment faire cette opération ou vous préférez ne pas modifier les permissions de ce fichier, veuillez remplir le formulaire ci-dessous et cliquez sur \"".L_BTN1."\".");
define("L_P2_HINT3", "Note : si vous avez modifié les droits sur ce fichier, veuillez cliquer sur ce bouton \"".L_BTN4."\" après l’application du chmod, afin d’indiquer au programme d’installation que le fichier peut être accédé en écriture!");
define("L_P2_HINT4", "Le fichier \"config/config.lib.php\" est accessible en écriture. Veuillez remplir ce formulaire, ainsi les informations seront enregistrées directement dans ce fichier.");
define("L_P3_HINT1", "Retournez à la page précédente et modifiez les valeurs. Si le programme d’installation ne peut pas créer la base de données, vous devez la créer par vous-même.");
define("L_P3_HINT2", "Voici les résultats de votre configuration que vous devez copier et coller dans votre fichier \"config/config.lib.php\". Sélectionnez tout le texte dans la zone ci-dessous, copiez-le et coller-le dans votre éditeur de texte préféré (ex. Notepad++). Enregistrez le fichier avec le nom config.lib.php (assurez-vous de sélectionner le type de document \"All types (*.*)\" et non pas \"Texte\") et téléchargez-le sur votre serveur FTP dans le répertoire \"config\".");
define("L_P3_HINT3", "Ensuite vous devez créer un compte Administrateur qui vous permettra d’accéder à la console d’amdinistration de phpMyChat.");
define("L_P3_HINT4", "Votre fichier \"config/config.lib.php\" :");
define("L_P3_HINT5", "Impossible d’ouvrir le fichier \"config/config.lib.php\" en écriture!");
define("L_P3_HINT6", "Retournez à la page précédente et modifiez les valeurs. Le fichier n’est pas accessible en écriture.");
define("L_P3_HINT7", "Maintenant vous devez créer un compte Administrateur qui vous permettra d’accéder à la console d’administration de phpMyChat.");
define("L_P3_HINT8", "Vos modifications ont été sauvegardées.");
define("L_P3_HINT9", "Note : cet utilisateur possède le niveau de privilège le plus élevé dans la console d’administration et les salons du chat!");
define("L_P3_BTN1", "Tout sélectionner");
define("L_P4_HINT1", "Votre compte Administrateur a été créé.");
define("L_P4_HINT2", "Vous êtes prêt à vous connecter à la console d’administration, vous pouvez modifier le paramétrage de votre serveur phpMyChat. De nombreuses options vous permettront de gérer vos salons, vos utilisateurs, les messages et beaucoup plus encore. Utilisez les liens \"Administration\" du chat pour accéder à la console d’administration à tout moment.");
define("L_P4_HINT3", "L’installation est terminée. Cliquer sur \"".L_BTN5."\" pour aller sur la page de connexion au chat ou fermer cette fenêtre pour quitter le programme d’installation.");
define("L_P4_HINT4", "Le programme d’installation a déjà attribué les permissions requises (chmod) sur les fichiers et a supprimé ce script d’installation. Veuillez vous assurer que le fichier \"install/install.php\" a bien été supprimé de votre serveur Web! Si ce n’est pas le cas, supprimez-le manuellement.");
define("L_P1_OP01", "Nouvelle installation");
define("L_P1_OP02", "Mise à jour de %s");
define("L_P1_OP03", "Aucun changement sur la base de données");
define("L_P0_FORM1", "Adresse du serveur FTP");
define("L_P0_FORM2", "Login FTP");
define("L_P0_FORM3", "Mot de passe FTP");
define("L_P0_FORM4", "Chemin racine FTP (relatif)");
define("L_P2_FORM01", "Nom de l'hôte de la base de données pour phpMyChat"); //rev.8
define("L_P2_FORM02", "Login Base de données pour phpMyChat");
define("L_P2_FORM03", "Mot de passe Base de données pour phpMyChat");
define("L_P2_FORM04", "Nom de la Base de données pour phpMyChat");
define("L_P2_FORM05", "Type de Base de données");
define("L_P2_FORM06", "Table des messages");
define("L_P2_FORM07", "Table des utilisateurs du chat");
define("L_P2_FORM08", "Table des utilisateurs inscrits");
define("L_P2_FORM09", "Table des utilisateurs exclus");
define("L_P2_FORM10", "Table des paramètres de configuration");
define("L_P2_FORM11", "Table des rôdeurs (lurkers)");
define("L_P2_FORM12", "Renommer votre répertoire des logs d’admin");
define("L_P2_FORM13", "Si vous avez l’intention d’utiliser phpMyChat en tant que module intégré pour phpNuke ou phpBB, la table de configuration doit être nommée \"c_config\" et la table des utilisateurs inscrits doit être nommée\"c_reg_users\"!");
define("L_P2_FORM14", "Choisissez un nom difficile à deviner!");
define("L_P2_FORM15", "Nom de votre serveur de Chat");
define("L_P2_FORM16", "Table des statistiques");
define("L_P2_FORM17", "Port de base de données pour phpMyChat (facultatif)"); //rev.8
define("L_P2_FORM18", "Pilote de base de données PDO (facultatif)"); //rev.9
define("L_P2_FORM19", "Préfixe pour les tables de base de données (facultatif)"); //rev.10
define("L_P3_FORM1", "Nom du compte Administrateur");
define("L_P3_FORM2", "Mot de passe du compte Administrateur");
define("L_P3_FORM3", "Vérification du mot de passe");
define("L_P3_FORM4", "Nom long de contact pour les e-mails");
define("L_P3_FORM5", "Adresse email de contact");
define("L_P3_FORM6", "URL du Chat pour les emails");
define("L_P4_FORM1", "Ouvrir la console d’administration");
define("L_P4_FORM2", "De façon optionnelle, vous pouvez aussi installer un \"bot\" (un programme-robot simulant un utilisateur virtuel) pour votre chat, ainsi vous ajouterez un peu d’attractivité à votre chat. Cela peut être fait a posteriori, mais il est préférable de réaliser le paramétrage maintenant. Si vous cliquez sur le lien ci-dessous, veuillez ne pas interrompre l’exécution du script dans la fenêtre popup!");
define("L_P4_FORM3", "Installation du \"Bot\"");
?>
