<?php
// File : german/localized.install.php - plus version (05.11.2017 - rev.10)
// Translation by Thomas Pschernig <tpsde1970@aol.com> & Thomas Schorpp <thomas.schorpp@googlemail.com>
// Do not use ' ; use ’ istead (utf-8 edit bug)

define("L_BTN1", "Weiter");
define("L_BTN2", "Abbruch");
define("L_BTN3", "Zurück");
define("L_BTN4", "Neu laden");
define("L_BTN5", "Fertig stellen");
define("L_BTN6", "Überspringen");
define("L_CONN_ERROR", "FTP-Host-Adresse falsch!<br />Gehen Sie bitte zurück und prüfen Sie Ihre FTP-Host-Adresse.");
define("L_LOGIN_ERROR", "Login Überprüfung fehlgeschlagen!<br />Gehen Sie bitte zurück und prüfen Sie den Login - Namen und das Passwort.");
define("L_FTP_NAME", "FTP Benutername ist leer!");
define("L_FTP_PASS", "FTP Passwort ist leer!");
define("L_DB_NOCONNECT", "Konnte keine Verbindung zum Datenbank-Host herstellen!");
define("L_DB_HINT1", "Datenbank %s existiert nicht und kann nicht angelegt werden!");
define("L_PASS_ERROR1", "Sie haben keinen Administratornamen eingegeben.<br />Gehen Sie bitte zurück und wählen Sie einen Namen für Ihren Administrator - Account!");
define("L_PASS_ERROR2", "Sie müssen die Passwort - Felder ausfüllen.<br />Gehen Sie bitte zurück und geben Sie das Passwort zweimal ein!");
define("L_PASS_ERROR3", "Das Passwort und die Passwort - Überprüfung stimmen nicht überein.<br />Gehen Sie bitte zurück und geben Sie die Passworte erneut ein!");
define("L_FILE_ERROR1", "Kann die Dateirechte der Datei");
define("L_FILE_ERROR2", "nicht ändern");
define("L_FOLD_ERROR1", "Kann die Dateirechte des Verzeichnisses");
define("L_FOLD_ERROR2", "nicht ändern");
define("L_INST_FOR", "Installation für %s");
define("L_INST_VER", "Version:");
define("L_INST_SETUP", "Setup -");
define("L_INST_PAG_OF", "Seite %s von %s");
define("L_P0_HINT1", "Willkommen bei unserer Installation für %s.");
define("L_P0_HINT2", "Geben Sie unten bitte Ihre FTP-Daten ein.");
define("L_P1_HINT1", "Diese Installation wird Sie durch den Installationsprozess begleiten.<br />Wählen Sie bitte die Art der Installation unten aus.");
define("L_P1_HINT2", "Wählen Sie bitte die Art der Installation:");
define("L_P1_HINT3", "Die FTP-Daten, die Sie eingegeben haben, scheinen nicht zu stimmen. Die Installation kann nicht fortgeführt werden. Gehen Sie bitte zurück und korrigieren Sie die Fehler. Dies sind folgende Fehler:");
define("L_P2_HINT1", "Nun prüfen wir die Konfiguration von phpMyChat. Es muss eine Datei (die Datei \"config/config.lib.php\") auf dem Server geändert werden.");
define("L_P2_HINT2", "Die Konfigurationsdatei hat keine Schreibrechte. Um der Datei die Schreibrechte zu geben, benutzen Sie ein beliebiges FTP-Programm (z.B. Total Commander) um Verbindung zum Server aufzubauen und ändern Sie die Dateirechte der Datei \"config.lib.php\" in dem Verzeichnis config mittels CHMOD 666. Wenn Sie nicht wissen, wie Sie diese Dateirechte ändern oder falls Sie die Dateirechte nicht ändern möchten, füllen Sie bitte das Formular unten aus und klicken auf \"".L_BTN1."\".");
define("L_P2_HINT3", "Hinweis: Wenn Sie die Dateirechte geändert haben, klicken Sie bitte auf \"".L_BTN4."\", damit das Installations-Script dieses merkt!");
define("L_P2_HINT4", "Die Datei \"config/config.lib.php\" hat Schreibrechte. Füllen Sie bitte das Formular unten aus, die Daten werden dann direkt in die Datei geschrieben.");
define("L_P3_HINT1", "Gehen Sie auf die vorherige Seite und ändern Sie die Werte. Falls die Installation die Datenbank nicht anlegen konnte, legen Sie diese bitte manuell an.");
define("L_P3_HINT2", "Hier sind die Konfigurations-Einstellungen, die in die Datei \"config/config.lib.php\" geschrieben werden müssen. Markieren Sie bitte den kompletten Text und fügen Sie die Konfiguration manuell ein.");
define("L_P3_HINT3", "Danach müssen Sie einen Administrator - Account anlegen, damit Sie Zugriff auf die Administrations - Oberfläche von phpMyChat haben.");
define("L_P3_HINT4", "Ihre \"config/config.lib.php\" - Datei:");
define("L_P3_HINT5", "Konnte die Datei \"config/config.lib.php\" nicht zum schreiben öffnen!");
define("L_P3_HINT6", "Gehen Sie zurück zur vorherigen Seite und ändern Sie die Werte. Die Datei ist nicht beschreibbar.");
define("L_P3_HINT7", "Nun müssen Sie den Administrator - Account anlegen, damit Sie Zugriff auf die Administrations - Oberfläche von phpMyChat haben.");
define("L_P3_HINT8", "Ihr Änderungen wurden gespeichert.");
define("L_P3_HINT9", "Hinweis: Dieser Account hat alle Rechte, sowohl in der Administration als auch im Chat!");
define("L_P3_BTN1", "Alles auswählen");
define("L_P4_HINT1", "Ihr Administrator - Account wurde angelegt.");
define("L_P4_HINT2", "Nun können Sie sich im Administrations - Bereich von phpMyChat anmelden und die Einstellungen Ihres Chat - Servers ändern. Sie finden dort auch eine Menge weiterer Optionen, um die Chat-Räume, die Mitglieder, die Nachrichten und einiges weiteres einzustellen. Nutzen Sie die sichtbaren Administrations - Links um Zugriff zu bekommen und Ihre Einstellungen jederzeit vornehmen zu können.");
define("L_P4_HINT3", "Die Installation ist abgeschlossen. Klicken Sie auf \"".L_BTN5."\", um zum Chat-Index zu gehen oder schließen Sie dieses Fenster, um den Installer zu beenden.");
define("L_P4_HINT4", "Diese Installation hat bereits die Dateirechte der benötigten Dateien geändert. Stellen Sie bitte sicher, das die Datei \"install/install.php\" von Ihrem Server gelöscht wurde. Falls dies nicht der Fall ist, löschen Sie diese Datei bitte manuell.");
define("L_P1_OP01", "Neue Installation");
define("L_P1_OP02", "Upgrade von %s");
define("L_P1_OP03", "Keine Datenbank-Änderungen");
define("L_P0_FORM1", "FTP Host Adresse");
define("L_P0_FORM2", "FTP Username");
define("L_P0_FORM3", "FTP Passwort");
define("L_P0_FORM4", "FTP Stamm-Verzeichnis (relativ)");
define("L_P2_FORM01", "Datenbank-Host für phpMyChat"); //rev.8
define("L_P2_FORM02", "Datenbank-Username für phpMyChat");
define("L_P2_FORM03", "Datenbank-Passwort für phpMyChat");
define("L_P2_FORM04", "Datenbank-Name für phpMyChat");
define("L_P2_FORM05", "Typ der Datenbank");
define("L_P2_FORM06", "Tabelle für Nachrichten");
define("L_P2_FORM07", "Tabelle für Mitglieder im Chat");
define("L_P2_FORM08", "Tabelle für registrierte Mitglieder");
define("L_P2_FORM09", "Tabelle für gebannte Mitglieder");
define("L_P2_FORM10", "Tabelle für die KOnfiguration");
define("L_P2_FORM11", "Tabelle für Beobachter");
define("L_P2_FORM12", "Bennen Sie Ihr Admin-Logs-Verzeichnis um");
define("L_P2_FORM13", "Wenn Sie phpMyChat als einen integrierten Chat in PHPNuke oder PHPBB nutzen möchten, muss die Konfigurations-Tabelle \"c_config\" und die Tabelle der registrierten Mitglieder \"c_reg_users\" heißen!");
define("L_P2_FORM14", "Wählen Sie einen Namen, der nicht leicht erraten werden kann!");
define("L_P2_FORM15", "Name Ihres Chat-Servers");
define("L_P2_FORM16", "Tabelle für Statistiken");
define("L_P2_FORM17", "Datenbank-Port für phpMyChat (optional)"); //rev.8
define("L_P2_FORM18", "PDO-Datenbanktreiber (optional)"); //rev.9
define("L_P2_FORM19", "Präfix für Datenbanktabellen (optional)"); //rev.10
define("L_P3_FORM1", "Name des Administrators");
define("L_P3_FORM2", "Passwort des Administrators");
define("L_P3_FORM3", "Passwort erneut eingeben");
define("L_P3_FORM4", "Realer Name für den Kontakt per eMail");
define("L_P3_FORM5", "eMail-Adresse für den Kontakt");
define("L_P3_FORM6", "Chat-URL für die eMails");
define("L_P4_FORM1", "Administrations-Oberfläche öffnen");
define("L_P4_FORM2", "Optional können Sie einen Bot (einen Robot, ein virtuelles Miglied) für Ihren Chat installieren, dies kann einige spassige Elemente in Ihrem Chat integrieren. Sie können dies auch später machen, aber jetzt wäre der perfekte Zeitpunkt. Wenn Sie auf den Link unten klicken, stoppen Sie die Ausführung des Scripts auf keinen Fall, auch wenn sich ein neues Fenster öffnet!");
define("L_P4_FORM3", "Bot installieren");
?>