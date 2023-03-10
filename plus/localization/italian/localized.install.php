<?php
// File : italian/localized.install.php - plus version (05.11.2017 - rev.10)
// Translation by Michele Ferro <specialmikius@yahoo.com> and Luciano Cataldo <lucianocataldo@gmail.com>
// Do not use ' ; use ’ istead (utf-8 edit bug)

define("L_BTN1", "Avanti");
define("L_BTN2", "Annulla");
define("L_BTN3", "Indietro");
define("L_BTN4", "Aggiorna");
define("L_BTN5", "Termina");
define("L_BTN6", "Salta");
define("L_CONN_ERROR", "FTP-host indirizzo errato!<br />Per cortesia torna indietro e controlla l’indirizzo ftp host.");
define("L_LOGIN_ERROR", "Autenticazione della connessione fallita!<br />Per cortesia torna indietro e controlla il tuo nome utente d’accesso e la password.");
define("L_FTP_NAME", "FTP utente lasciato vuoto!");
define("L_FTP_PASS", "FTP password lasciato vuoto!");
define("L_DB_NOCONNECT", "Potrebbe non connettersi al database!");
define("L_DB_HINT1", "Database %s non esiste e non può essere creato!");
define("L_PASS_ERROR1", "Non hai compilato il nome amministratore.<br />Per cortesia torna indietro e scegli il nome per il tuo Amministratore account!");
define("L_PASS_ERROR2", "Devi compilare il campo password.<br />Per cortesia torna indietro e scrivi due password identiche!");
define("L_PASS_ERROR3", "La password e la verifica password non corrispondono.<br />Per cortesia torna indietro e riscrivi le passwrod!");
define("L_FILE_ERROR1", "Could not CHMOD the file");
define("L_FILE_ERROR2", "");
define("L_FOLD_ERROR1", "Could not CHMOD the folder");
define("L_FOLD_ERROR2", "");
define("L_INST_FOR", "Installazione di %s");
define("L_INST_VER", "Versione:");
define("L_INST_SETUP", "Setup -");
define("L_INST_PAG_OF", "Pagina %s di %s");
define("L_P0_HINT1", "Benvenuto nell’installazione di %s.");
define("L_P0_HINT2", "Per cortesia inserisci la tua connessione ftp sotto.");
define("L_P1_HINT1", "Questo setup ti guiderà attraverso il processo di installazione.<br />Per cortesia seleziona quale tipo di installazione è questa:");
define("L_P1_HINT2", "Per cortesia seleziona il tuo tipo di installazione sotto.");
define("L_P1_HINT3", "L’ FTP che hai inserito sembra errato. Il setup non può continuare. Per cortesia torna indietro e correggi gli errori. Questi sono gli errori:");
define("L_P2_HINT1", "Ora vediamo la configurazione di phpMyChat. Deve essere cambiato un file (\"config/config.lib.php\") su questo server.");
define("L_P2_HINT2", "Il file config non è scrivibile. Rendilo scrivibile, usa qualsiasi programma FTP (es. Total Commander) per connetterti al tuo server e applica CHMOD 666 al file \"config.lib.php\" nella cartella config). Se non sai come fare o non gradisci cambiare i permessi al file, per cortesia lascia vuoto il campo sotto e premi \"".L_BTN1."\".");
define("L_P2_HINT3", "Nota: Se hai cambiato i permessi di questo file, per cortesia premi \"".L_BTN4."\" dopo l’operazione CHMOD, in modo che il setup riconosce che il file è scrivibile!");
define("L_P2_HINT4", "Il file \"config/config.lib.php\" è scrivibile. Per cortesia lascia vuoto questo campo e i valori verranno direttamente caricati nel file.");
define("L_P3_HINT1", "Torna all pagina precedente e cambia i valori. Se il setup non riesce a creare il database, per cortesia crealo tu.");
define("L_P3_HINT2", "Qui ci sono i risultati delle tue configurazioni passati nel file \"config/config.lib.php\". Per cortesia seleziona tutto il testo dal box messaggio sotto, copialo e incollalo in un editor di testo che preferisci (es. Notepad++). Salva il file come config.lib.php (assicurati che il tipo di file non sia \"Documento di testo\") e invia il file al tuo ftp-server nella directory \"config\".");
define("L_P3_HINT3", "Dopo aver creato l’account Amministratore, per essere abilitato all’accesso del pannello di amministrazione di phpMyChat.");
define("L_P3_HINT4", "Il tuo file \"config/config.lib.php\":");
define("L_P3_HINT5", "Non può essere aperto \"config/config.lib.php\" per la scrittura!");
define("L_P3_HINT6", "Ritorna nella pagina precedente a cambia i valori. Il file non è scrivibile.");
define("L_P3_HINT7", "Ora devi creare l’account Amministratore, per essere abilitato all’accesso del pannello di amministrazione di phpMyChat.");
define("L_P3_HINT8", "I tuoi cambiamenti sono stati salvati.");
define("L_P3_HINT9", "Nota: questo account utente ha avuto tutti i poteri e privilegi nel pannello di amministrazione e nelle stanze!");
define("L_P3_BTN1", "Seleziona tutto");
define("L_P4_HINT1", "L’account principle Amministratore è stato creato.");
define("L_P4_HINT2", "Sei pronto per connetterti al pannello di amministrazione e cambiare i parametri del server di phpMyChat. Ci sono tante opzioni che aiutano ad amministrare la stanza, utenti, messaggi e molto altro. Usa il link disponibile dell’amministrazione in modo da accedere al pannello di amministrazione.");
define("L_P4_HINT3", "Il processo di installazione è stato completato. Premi \"".L_BTN5."\" per passare alla pagina di connessione alla chat o chiudi questa finestra chiudendo l’installazione.");
define("L_P4_HINT4", "Il programma setup ha già dato permessi ai file necessari per te e ha anche cancellato questo programma. Assicurati che il file \"install/install.php\" sia stato cancellato dal server! Se non è cosi, cancellalo tu.");
define("L_P1_OP01", "Nuova installazione");
define("L_P1_OP02", "Aggiorna da %s");
define("L_P1_OP03", "Nessuna variazione del database");
define("L_P0_FORM1", "Indirizzo host FTP");
define("L_P0_FORM2", "FTP utente");
define("L_P0_FORM3", "FTP password");
define("L_P0_FORM4", "Percorso root FTP (relativo)");
define("L_P2_FORM01", "Database-Host per phpMyChat"); //rev.8
define("L_P2_FORM02", "Database-Utente per phpMyChat");
define("L_P2_FORM03", "Database-Password per phpMyChat");
define("L_P2_FORM04", "Database-Nome per phpMyChat");
define("L_P2_FORM05", "Tipo di database");
define("L_P2_FORM06", "Tabella per messaggi");
define("L_P2_FORM07", "Tabella per utenti in chat");
define("L_P2_FORM08", "Tabella per utenti registrati");
define("L_P2_FORM09", "Tabella per utenti cancellati");
define("L_P2_FORM10", "Tabella per configurazione");
define("L_P2_FORM11", "Tabella per osservatori");
define("L_P2_FORM12", "Rinomina la cartella delle tue connessioni da amministratore");
define("L_P2_FORM13", "Se intendi usare phpMyChat come un modulo integrato per phpNuke o phpBB, la tabelle di configurazione deve essere chiamata \"c_config\" e la tabella per utenti registrati deve essere chiamata \"c_reg_users\"!");
define("L_P2_FORM14", "Scegli un nome difficile da indovinare!");
define("L_P2_FORM15", "Nome della Chat");
define("L_P2_FORM16", "Tabella delle statistiche");
define("L_P2_FORM17", "Database-Port per phpMyChat (opzionabile)"); //rev.8
define("L_P2_FORM18", "Driver di database PDO (opzionabile)"); //rev.9
define("L_P2_FORM19", "Prefisso per tabelle di database (opzionabile)"); //rev.10
define("L_P3_FORM1", "Nome account Amministratore");
define("L_P3_FORM2", "Password account Amministratore");
define("L_P3_FORM3", "Verifica password");
define("L_P3_FORM4", "Contatta il nome reale per emails");
define("L_P3_FORM5", "Contatta l’indirizzo email ");
define("L_P3_FORM6", "Chat url per emails");
define("L_P4_FORM1", "Apri Pannello di amministrazione");
define("L_P4_FORM2", "Opzionalmente, puoi anche installare un bot (robot, utente virtuale) per la tua chat, così può aggiungere qualche divertimento alle stanze. Puoi farlo dopo, ma questo è il miglior momento per farlo. Se premi sul link sotto, per cortesia non fermare il programma che sta girando nella nuova finestra popup!");
define("L_P4_FORM3", "Installa Bot");
?>