<?php
// File : danish/localized.install.php - plus version (05.11.2017 - rev.10)
// Original translation by Bente Feldballe
// Do not use ' ; use ’ istead (utf-8 edit bug)

define("L_BTN1", "Næste");
define("L_BTN2", "Afbryd");
define("L_BTN3", "Tilbage");
define("L_BTN4", "Reload");
define("L_BTN5", "Afslut");
define("L_BTN6", "Skip");
define("L_CONN_ERROR", "Forkert FTP host adresse!<br />Gå tilbage og tjek din ftp host adresse.");
define("L_LOGIN_ERROR", "Log-in godkendelse afbrudt!<br />Gå tilbage og tjek dit log-in brugernavn og adgangskode.");
define("L_FTP_NAME", "FTP brugernavn skal udfyldes!");
define("L_FTP_PASS", "FTP adgangskode skal udfyldes!");
define("L_DB_NOCONNECT", "Kunne ikke oprette forbindelse til databasen!");
define("L_DB_HINT1", "Database %s eksisterer ikke og kan ikke oprettes!");
define("L_PASS_ERROR1", "Du har ikke angivet et admin navn.<br />Gå tilbage og vælg et navn til din Administrator konto!");
define("L_PASS_ERROR2", "Du skal udfylde felterne til adgangskode.<br />Gå tilbage og indtast den valgte adgangskode to gange!");
define("L_PASS_ERROR3", "Din adgangskode og kontrol adgangskode matcher ikke.<br />Gå tilbage og indtast den samme adgangskode to gange!");
define("L_FILE_ERROR1", "Kunne ikke CHMOD filen");
define("L_FILE_ERROR2", "");
define("L_FOLD_ERROR1", "Kunne ikke CHMOD mappen");
define("L_FOLD_ERROR2", "");
define("L_INST_FOR", "Auto-installer for %s");
define("L_INST_VER", "Version:");
define("L_INST_SETUP", "Opsætning -");
define("L_INST_PAG_OF", "Side %s af %s");
define("L_P0_HINT1", "Velkommen til auto-opsætning af %s.");
define("L_P0_HINT2", "Indtast dine ftp log-in data herunder.");
define("L_P1_HINT1", "Denne guide fører dig igennem installationsprocessen.<br />Vælg den ønskede type installation herunder.");
define("L_P1_HINT2", "Vælg den ønskede type installation:");
define("L_P1_HINT3", "De indtastede FTP - data indeholder fejl. Opsætningen blev afbrudt. Gå tilbage og ret fejlene. Der er følgende fejlmeldinger:");
define("L_P2_HINT1", "Nu skal vi gennemgå konfigurationen af phpMyChat. Der skal foretages ændringer i en fil (\"config/config.lib.php\") på denne server.");
define("L_P2_HINT2", "Filen config er ikke skrivbar. Hvis du vil gøre den skrivbar, skal du anvende et FTP-program (f.eks. Total Commander), oprette forbindelse til din server og vælge CHMOD 666 for filen  \"config.lib.php\" i mappen config). Hvis du ikke ved, hvordan du gør dette, eller hvis du ikke ønsker at ændre tilladelserne for filen, skal du udfylde formularen herunder og klikke på \"".L_BTN1."\".");
define("L_P2_HINT3", "Bemærk: Hvis du har ændret tilladelsen for denne fil, skal du klikke på knappen \"".L_BTN4."\", når du har gennemført chmod, således at filen genkendes som skrivbar under opsætningen!");
define("L_P2_HINT4", "Filen \"config/config.lib.php\" er skrivbar. Udfyld formularen, hvorefter værdierne gemmes i selve filen.");
define("L_P3_HINT1", "Gå tilbage til foregående side og vælg de nye værdier. Hvis opsætningen ikke kunne oprette databasen, er du nødt til selv at oprette den.");
define("L_P3_HINT2", "Her er din konfiguration, der skal sættes ind i filen \"config/config.lib.php\". Vælg hele teksten i boksen herunder, kopier teksten og sæt den ind i din foretrukne tekst-editor (f.eks. Notepad++). Gem filen som config.lib.php (sørg for at gemme filen som filtype Alle filer og ikke som et rent tekst-dokument) og læg filen op på din ftp-server i mappen \"config\".");
define("L_P3_HINT3", "Næste skridt er at oprette en Administrator konto, så du kan få adgang til Admin Panelet i phpMyChat.");
define("L_P3_HINT4", "Din \"config/config.lib.php\" - fil:");
define("L_P3_HINT5", "Kunne ikke skrive til \"config/config.lib.php\"!");
define("L_P3_HINT6", "Gå tilbage til foregående side og indsæt de nødvendige værdier. Filen er ikke skrivbar.");
define("L_P3_HINT7", "Du skal nu oprette en Administrator konto, så du kan få adgang til Admin Panelet i phpMyChat.");
define("L_P3_HINT8", "Dine ændringer er blevet gemt.");
define("L_P3_HINT9", "Bemærk: Denne brugerkonto har alle rettigheder til både Admin Panel og chatrum!");
define("L_P3_BTN1", "Vælg alt");
define("L_P4_HINT1", "Din centrale Administrator konto er oprettet.");
define("L_P4_HINT2", "Du er klar til at logge ind i Admin Panelet og ændre indstillingerne for din phpMyChat server. Der er også adskillige andre punkter, som hjælper dig håndtere chatrum, brugere, poster og meget andet. Brug linket Administration, der til enhver tid giver adgang til Admin Panelet.");
define("L_P4_HINT3", "Installationen er gennemført. Klik på \"".L_BTN5."\",  hvis du vil gå til chattens log-in side, eller luk dette vindue, hvis du vil afslutte installationen og lukke.");
define("L_P4_HINT4", "De nødvendige filer blev chmod'ed under opsætningen, ligesom auto-installeren sørgede for at slette setup-scriptet. Kontrollér venligst selv dette og sørg for, at filen \"install/install.php\" er blevet slettet på din web server! Hvis dette ikke er tilfældet, skal du slette filen manuelt.");
define("L_P1_OP01", "Ny installation");
define("L_P1_OP02", "Opgradér fra %s");
define("L_P1_OP03", "Ingen ændringer i databasen");
define("L_P0_FORM1", "FTP host adresse");
define("L_P0_FORM2", "FTP brugernavn");
define("L_P0_FORM3", "FTP adgangskode");
define("L_P0_FORM4", "FTP root path (relativ)");
define("L_P2_FORM01", "Database-Host for phpMyChat"); //rev.8
define("L_P2_FORM02", "Database-Brugernavn til phpMyChat");
define("L_P2_FORM03", "Database-Password til phpMyChat");
define("L_P2_FORM04", "Database-Navn til phpMyChat");
define("L_P2_FORM05", "Databasetype");
define("L_P2_FORM06", "Tabel over poster");
define("L_P2_FORM07", "Tabel over brugere i chatten");
define("L_P2_FORM08", "Tabel over registrerede brugere");
define("L_P2_FORM09", "Tabel over forviste brugere");
define("L_P2_FORM10", "Tabel over konfiguration");
define("L_P2_FORM11", "Tabel over lurepassere");
define("L_P2_FORM12", "Omdøb din admin logs mappe");
define("L_P2_FORM13", "Hvis du vil anvende phpMyChat som et integreret modul i phpNuke eller phpBB, skal konfigurationstabellen hedde \"c_config\" og tabellen over registrerede brugere skal hedde \"c_reg_users\"!");
define("L_P2_FORM14", "Vælg et navn, der ikke er nemt at gætte!");
define("L_P2_FORM15", "Navnet på din chat server");
define("L_P2_FORM16", "Tabel over statistik");
define("L_P2_FORM17", "Database-Port for phpMyChat (valgfri)"); //rev.8
define("L_P2_FORM18", "PDO Database Driver (valgfri)"); //rev.9
define("L_P2_FORM19", "Prefix for database tabeller (valgfri)"); //rev.10
define("L_P3_FORM1", "Administrator konto navn");
define("L_P3_FORM2", "Administrator konto adgangskode");
define("L_P3_FORM3", "Bekræft adgangskode");
define("L_P3_FORM4", "Navn til brug i e-mails");
define("L_P3_FORM5", "E-mail kontaktadresse");
define("L_P3_FORM6", "Chattens url til e-mails");
define("L_P4_FORM1", "Åben Admin Panel");
define("L_P4_FORM2", "Det er valgfrit om du vil installere botten (en robot, en virtuel bruger) i din chat, så du kan have ekstra sjov i chatten. Botten kan også installeres senere, men det er bedst at gøre det nu. Hvis du klikker på linket herunder, må du ikke afbryde det script, der begynder at  køre i et nyt pop-up vindue!");
define("L_P4_FORM3", "Installér Bot");
?>