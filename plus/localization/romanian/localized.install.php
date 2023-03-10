<?php
// File : romanian/localized.install.php - plus version (05.11.2017 - rev.10)
// Translation by Ciprian Murariu <ciprianmp@yahoo.com>
// Do not use ' ; use ’ istead (utf-8 edit bug)

define("L_BTN1", "Înainte");
define("L_BTN2", "Anulare");
define("L_BTN3", "Înapoi");
define("L_BTN4", "Reîncărcare");
define("L_BTN5", "Terminare");
define("L_BTN6", "Sari peste");
define("L_CONN_ERROR", "Adresa FTP-host este greşită!<br />Întoarceţi-vă şi verificaţi adresa FTP-host.");
define("L_LOGIN_ERROR", "Autentificare eşuată!<br />Întoarceţi-vă şi verificaţi numele şi parola.");
define("L_FTP_NAME", "Numele contului FTP nu a fost introdus!");
define("L_FTP_PASS", "Parola contului FTP nu a fost introdusă!");
define("L_DB_NOCONNECT", "Conexiunea la baza de date eşuată!");
define("L_DB_HINT1", "Baza de date %s nu există şi nu se poate crea!");
define("L_PASS_ERROR1", "Nu aţi ales numele contului.<br />Întoarceţi-vă şi introduceţi un nume pentru contul de Administrator!");
define("L_PASS_ERROR2", "Nu au fost completate parolele.<br />Întoarceţi-vă şi introduceţi aceeaşi parolă de două ori!");
define("L_PASS_ERROR3", "Parola şi parola de verificare nu sunt aceleaşi.<br />Întoarceţi-vă şi introduceţi aceeaşi parolă de două ori!");
define("L_FILE_ERROR1", "Nu se pot modifica (CHMOD) permisiunile fişierului");
define("L_FILE_ERROR2", "");
define("L_FOLD_ERROR1", "Nu se pot modifica (CHMOD) permisiunile directorului");
define("L_FOLD_ERROR2", "");
define("L_INST_FOR", "Instalare pentru %s");
define("L_INST_VER", "Versiune:");
define("L_INST_SETUP", "Instalare -");
define("L_INST_PAG_OF", "Pagina %s din %s");
define("L_P0_HINT1", "Bun venit în expertul de instalare pentru %s.");
define("L_P0_HINT2", "Introduceţi mai jos datele pentru logarea FTP.");
define("L_P1_HINT1", "Acest script vă va ghida pe parcursul instalării.<br />Alegeţi tipul de instalare din lista de mai jos.");
define("L_P1_HINT2", "Vă rugăm să alegeţi tipul de instalare dorit:");
define("L_P1_HINT3", "Datele FTP introduse sunt greşite. Instalarea nu poate continua. Întoarceţi-vă şi corectaţi erorile. Erorile sunt:");
define("L_P2_HINT1", "S-au extras datele de configurare din vechea instalare a phpMyChat. Fişierul (\"config/config.lib.php\") va trebui modificat.");
define("L_P2_HINT2", "Fişierul config nu are drepturi de scriere. Pentru a-i da aceste drepturi, folosiţi un manager FTP (ex. Total Commander) pentru a vă conecta la server şi aplicaţi CHMOD 666 fişierului \"config.lib.php\" din directorul config). Dacă nu ştiţi sau nu aveţi cum să faceţi asta acum, completaţi formularul de mai jos şi apăsaţi butonul \"".L_BTN1."\".");
define("L_P2_HINT3", "Notă: Dacă aţi ales să schimbaţi permisiunile şi le-aţi şi schimbat, apăsaţi butonul \"".L_BTN4."\" pentru ca scriptul să re-verifice noile permisiuni!");
define("L_P2_HINT4", "Fişierul \"config/config.lib.php\" are drepturi de scriere. Completaţi formularul de mai jos şi valorile vor fi scrise direct în fişier.");
define("L_P3_HINT1", "Întoarceţi-vă la pagina anterioară şi schimbaţi valorile. Dacă scriptul nu poate crea baza de date pentru dumneavoastră, vă rugăm să o creaţi personal în cpanel.");
define("L_P3_HINT2", "Mai jos se găsesc configurările dumneavostră, pe care va trebui să le pastaţi în fişierul \"config/config.lib.php\". Selectaţi întregul text din căsuţa de mai jos, copiaţi şi pastaţi-l într-un editor de text (ex. Notepad++). Salvaţi fişierul cu numele config.lib.php (asiguraţi-vă că tipul este All types şi nu Text document), după care uploadaţi pe serverul FTP fişierul nou creat, în directorul \"config\".");
define("L_P3_HINT3", "Apoi va trebui să creaţi un cont de Administrator, pentru a putea accesa Panoul de Administrare al phpMyChat.");
define("L_P3_HINT4", "Conţinutul fişierului \"config/config.lib.php\" rezultat:");
define("L_P3_HINT5", "Nu se poate deschide fişierul \"config/config.lib.php\" pentru scriere!");
define("L_P3_HINT6", "Întoarceţi-vă la pagina anterioară şi schimbaţi valorile. Fişierul nu are drepturi de scriere.");
define("L_P3_HINT7", "Acum trebuie să creaţi un cont de Administrator, pentru a putea accesa panoul de configurări al phpMyChat.");
define("L_P3_HINT8", "Modificările au fost salvate.");
define("L_P3_HINT9", "Notă: Acest cont de utilizator are drepturi şi puteri depline în Panoul de Administrare şi în camerele de chat!");
define("L_P3_BTN1", "Selectează tot");
define("L_P4_HINT1", "Contul principal de Administrator a fost creat.");
define("L_P4_HINT2", "Acum vă puteţi loga în Panoul de Configurare şi schimba setările serverului phpMyChat. Veţi găsi o serie de alte opţiuni care vă vor ajuta să administraţi camerele de chat, utilizatorii, mesajee şi multe altele. Pentru a accesa Panoul de Administrare, puteţi folosi oricând link-urile Administrare.");
define("L_P4_HINT3", "Instalarea a luat sfârşit. Apăsaţi \"".L_BTN5."\" pentru a deschide pagina de chat sau închideţi această fereastră pentru a părăsi acest script.");
define("L_P4_HINT4", "Acest script a modificat deja (CHMOD) fişierele necesare şi a şters şi această pagină. Vă rugăm să vă asiguraţi că fişierul \"install/install.php\" a fost şters de pe server! Dacă nu, va trebui să-l ştergeţi personal.");
define("L_P1_OP01", "Instalare nouă");
define("L_P1_OP02", "Actualizare de la %s");
define("L_P1_OP03", "Fără modificări în Baza de date");
define("L_P0_FORM1", "Adresă host FTP");
define("L_P0_FORM2", "Nume utilizator FTP");
define("L_P0_FORM3", "Parolă FTP");
define("L_P0_FORM4", "Calea principală FTP (root relativă)");
define("L_P2_FORM01", "Host-ul Bazei de date pentru phpMyChat"); //rev.8
define("L_P2_FORM02", "Numele utilizatorului Bazei de date pentru phpMyChat");
define("L_P2_FORM03", "Parola Bazei de date pentru phpMyChat");
define("L_P2_FORM04", "Numele Bazei de date pentru phpMyChat");
define("L_P2_FORM05", "Tipul Bazei de date");
define("L_P2_FORM06", "Tabela pentru mesaje");
define("L_P2_FORM07", "Tabela pentru utilizatori conectaţi");
define("L_P2_FORM08", "Tabela pentru utilizatori înregistraţi");
define("L_P2_FORM09", "Tabela pentru utilizatori blocaţi");
define("L_P2_FORM10", "Tabela pentru configurări");
define("L_P2_FORM11", "Tabela pentru observatori");
define("L_P2_FORM12", "Redenumiţi folderul pentru istorice");
define("L_P2_FORM13", "Dacă intenţionaţi să folosiţi phpMyChat ca modul integrat pentru phpNuke sau phpBB, tabela de configurări trebuie să se numească \"c_config\", iar cea pentru utilizatori înregistraţi să se numească \"c_reg_users\"!");
define("L_P2_FORM14", "Alegeţi un nume greu de ghicit!");
define("L_P2_FORM15", "Alegeţi numele chat-ului");
define("L_P2_FORM16", "Tabela pentru statistici");
define("L_P2_FORM17", "Portul bazei de date pentru phpMyChat (opţional)"); //rev.8
define("L_P2_FORM18", "Driver-ul bazei de date PDO (opţional)"); //rev.9
define("L_P2_FORM19", "Prefixul tabelelor Bazei de date (opţional)"); //rev.10
define("L_P3_FORM1", "Numele (porecla) contului de Administrator");
define("L_P3_FORM2", "Parola contului de Administrator");
define("L_P3_FORM3", "Verificare parolă");
define("L_P3_FORM4", "Numele real de contact");
define("L_P3_FORM5", "Adresa email de contact");
define("L_P3_FORM6", "Adresa URL a chat-ului");
define("L_P4_FORM1", "Deschideţi Panoul de Administrare");
define("L_P4_FORM2", "Opţional, puteţi instala un bot (roboţel, utilizator virtual), care să aducă puţină distracţie în camerele de chat. Puteţi face acest lucru şi mai târziu, dar acesta ar fi un moment potrivit. Dacă apăsaţi link-ul de mai jos, NU opriţi scriptul ce se va deschide în noua fereastră! Lăsaţi-l să termine singur şi testaţi rezultatele vorbind cu roboţelul în pagina talk.html ce apare în josul installer-ului");
define("L_P4_FORM3", "Instalare RoBoţel");
?>