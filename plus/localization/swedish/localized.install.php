<?php
// File : swedish/localized.install.php - plus version (05.11.2017 - rev.10)
// Translated by Fimpen Högström <fimpen@relative-work.se>
// Do not use ' but use ’ instead (utf-8 edit bug)

define("L_BTN1", "Nästa");
define("L_BTN2", "Avbryt");
define("L_BTN3", "Tillbaka");
define("L_BTN4", "Uppdatera");
define("L_BTN5", "Avsluta");
define("L_BTN6", "Hoppa över");
define("L_CONN_ERROR", "FTP-host adress felaktig!<br />Vänligen backa och kolla att din ftp adress är riktig.");
define("L_LOGIN_ERROR", "Inloggningen misslyckades!<br />Vänligen gå tillbaks och kontrollera att ditt användarnamn och lösenord blivit riktigt.");
define("L_FTP_NAME", "FTP användarnamn saknas!");
define("L_FTP_PASS", "FTP lösenord saknas!");
define("L_DB_NOCONNECT", "Kunde inte koppla upp mot databasen!");
define("L_DB_HINT1", "Databas %s finns inte och går inte att skapa!");
define("L_PASS_ERROR1", "Du skrev inte in ett admin namn.<br />Vänligen backa och välj ett namn för ditt Administratör konto!");
define("L_PASS_ERROR2", "Du måste fylla i lösenords rutorna.<br />Vänligen gå tillbaks och skriv i lösenordet identiskt i bägge rutorna!");
define("L_PASS_ERROR3", "Lösenorden är inte identiskt skivna.<br />Vänligen gå tillbaks och skriv i lösenorden igen!");
define("L_FILE_ERROR1", "Kunde inte ändra skrivrättigheterna för filer (CHMOD)");
define("L_FILE_ERROR2", "");
define("L_FOLD_ERROR1", "Kunde inte ändra skrivrättigheterna för mappar (CHMOD)");
define("L_FOLD_ERROR2", "");
define("L_INST_FOR", "Installerare för %s");
define("L_INST_VER", "Version:");
define("L_INST_SETUP", "Setup -");
define("L_INST_PAG_OF", "Sida %s av %s");
define("L_P0_HINT1", "Välkommen till vår installation för %s.");
define("L_P0_HINT2", "Vänligen skriv in dina ftp logg in data nedan.");
define("L_P1_HINT1", "Denna guiden kommer hjälpa dig genom installationsprocessen.<br />Vänligen välj typ av installation du vill göra nedan.");
define("L_P1_HINT2", "Vänligen välj vilken typ av installation detta är:");
define("L_P1_HINT3", "De FTP - data du skrivit in verkar vara felaktiga. Installationen kan inte fortsätta. Vänligen backa och korrigera felaktigheterna. Detta är vad som är fel:");
define("L_P2_HINT1", "Nu kontrolleras hur din konfiguration av phpMyChat. Du måste ändra I filen (\"config/config.lib.php\") på denna server.");
define("L_P2_HINT2", "Filen config är skrivskyddad. För att ändra den till skrivbar, använd ett FTP-program (t. ex. Total Commander) för att koppla upp dig mot din FTP och ändra skrivskyddet (CHMOD 666) på \"config.lib.php\" filen i mappen config). Om du inte vet hur man gör detta eller inte vill ändra på rättigheterna på filen, vänligen fyll I formuläret nedan och klicka på \"".L_BTN1."\".");
define("L_P2_HINT3", "Notera: Om du har ändrat på rättigheterna till denna fil så klicka på \"".L_BTN4."\" knappen efter du gjort så, så att installationsprogrammet vet att filen är skrivbar nu!");
define("L_P2_HINT4", "Filen \"config/config.lib.php\" är skrivbar. Vänligen fyll i detta formulär så sparas värdet direkt i filen.");
define("L_P3_HINT1", "Gå tillbaks till föregående sida och ändra värdet. Om inte setupprogrammet klarar att skapa databasen, så vänligen gör det själv.");
define("L_P3_HINT2", "Här är resultatet av din konfiguration, klipp ut och klistra in i \"config/config.lib.php\" filen. Vänligen kopiera all text från textboxen nedan, klistra sen in den i en texeditor du föredrar (t.ex. Notepad++). Spara sen filen som config.lib.php (det är viktigt att den inte får ändelsen txt som är brukligt, då får man ändra det i utforskaren t ex) tanka sen upp filen till din FTP-server i mappen \"config\".");
define("L_P3_HINT3", "Sen måste du skapa ett Administratörs konto, så du får tillgång till Admin Panel i phpMyChat.");
define("L_P3_HINT4", "Din \"config/config.lib.php\" - fil:");
define("L_P3_HINT5", "Kan inte öppna \"config/config.lib.php\" för skrivning!");
define("L_P3_HINT6", "Gå tillbaks till föregående sida och ändra det du skrivit. Filen är inte skrivbar (skrivskyddad).");
define("L_P3_HINT7", "Nu måste du skapa ett Administratörs konto, så du får tillgång till Admin Panel i phpMyChat.");
define("L_P3_HINT8", "Dina ändringar har blivit sparade.");
define("L_P3_HINT9", "Notera: Detta användarkonto har nu fullständiga rättigheter i Admin Panel och chatrummen!");
define("L_P3_BTN1", "Markera allt");
define("L_P4_HINT1", "Ditt Administratörs konto har blivit skapat.");
define("L_P4_HINT2", "Du är nu redo att logga in i Admin Panel och ändra inställningarna i phpMyChat servern. Där är också flera andra saker du kan ställa in här vilket hjälper dig att administrera dina chat rum, användare, meddelanden och mycket annat. Använd den tillgängliga Administrations länken för att komma åt Admin Panel när du så behöver."); 
define("L_P4_HINT3", "Installations processen är klar. Klicka \"".L_BTN5."\" för att hoppa till chat loggin sidan eller stäng detta fönster för att lämna installationsprocessen.");
define("L_P4_HINT4", "Setup scriptet har ändrat nödvändiga filer och även raderat detta setupsckript. Kolla för säkerhets skull att filen \"install/install.php\" har blivit raderad från din web, om inte så gör det själv.");
define("L_P1_OP01", "Ny installation");
define("L_P1_OP02", "Uppgradera från %s");
define("L_P1_OP03", "Inga databasförändringar");
define("L_P0_FORM1", "FTP host adress");
define("L_P0_FORM2", "FTP användarnamn");
define("L_P0_FORM3", "FTP lösenord");
define("L_P0_FORM4", "FTP root sökväg (relative)");
define("L_P2_FORM01", "Database-Host för phpMyChat"); //rev.8
define("L_P2_FORM02", "Database-Användarnamn för phpMyChat");
define("L_P2_FORM03", "Database-Lösenord för phpMyChat");
define("L_P2_FORM04", "Database-Namn för phpMyChat");
define("L_P2_FORM05", "Typ av databas");
define("L_P2_FORM06", "Tabell för meddelande");
define("L_P2_FORM07", "Tabell för användare i chaten");
define("L_P2_FORM08", "Tabell för registerade användare");
define("L_P2_FORM09", "Tabell för bannade användare");
define("L_P2_FORM10", "Tabell för konfiguration");
define("L_P2_FORM11", "Tabell för lurkers");
define("L_P2_FORM12", "Döp om admin logg mappen");
define("L_P2_FORM13", "Om du har för avsikt att använda phpMyChat som en integrerad module för phpNuke eller phpBB, då måste konfigurationstabellen heta \"c_config\" och tabellen för registrerade användare måste heta \"c_reg_users\"!");
define("L_P2_FORM14", "Välj ett svårgissat namn!");
define("L_P2_FORM15", "Namn på din Chat server");
define("L_P2_FORM16", "Tabell för statistik");
define("L_P2_FORM17", "Databas-Port för phpMyChat (valfri)"); //rev.8
define("L_P2_FORM18", "PDO Database Driver (valfri)"); //rev.9
define("L_P2_FORM19", "Prefix för databas tabeller (valfri)"); //rev.10
define("L_P3_FORM1", "Administratörs konto namn");
define("L_P3_FORM2", "Administratörs kontots lösenord");
define("L_P3_FORM3", "Verifiera lösenordet");
define("L_P3_FORM4", "Kontakt Namn för emails");
define("L_P3_FORM5", "Kontakt email adress");
define("L_P3_FORM6", "Chat url för emails");
define("L_P4_FORM1", "Öppna Admin Panel");
define("L_P4_FORM2", "Som option, kan du också installera en bot (robot, virtuell användare) för din chat, som kan förhöja stämningen i vissa av dina rum. Du kan göra det senare om du vill, men nu är en bra tidpunkt att göra det. Om du klickar på länken nedan så stoppa inte scriptet från att rulla klart i det popupfönster som kommer fram!");
define("L_P4_FORM3", "Install Bot");
?>