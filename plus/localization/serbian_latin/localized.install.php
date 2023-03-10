<?php
// File : serbian_latin/localized.install.php - plus version (05.11.2017 - rev.10)
// Original translation by Vedran Vučić <vedran.vucic@gnulinuxcentar.org>
// Do not use ' but use ’ instead (utf-8 edit bug)

define("L_BTN1", "Sledeći");
define("L_BTN2", "Poništi");
define("L_BTN3", "Nazad");
define("L_BTN4", "Ponovo učitaj");
define("L_BTN5", "Završi");
define("L_BTN6", "Preskoči");
define("L_CONN_ERROR", "Pogrešna adresa FTP-domaćina!<br />Molimo vas da odete nazad i proverite adresu vašeg ftp domaćina.");
define("L_LOGIN_ERROR", "Nuspešno prijavljivanje!<br />Molimo vas da se vratite i proverite vaše korisničko ime i lozinku.");
define("L_FTP_NAME", "FTP korisničko ime je ostavljeno prazno!");
define("L_FTP_PASS", "FTP lozinka je ostavljena prazna!");
define("L_DB_NOCONNECT", "Nismo mogli da se spojimo na bazu podataka!");
define("L_DB_HINT1", "Baza podataka %s ne postoji i nemože da se kreira!");
define("L_PASS_ERROR1", "Niste napisali admin ime.<br /> Molimo vas da se vratite nazad i odaberete vaš administratorski nalog!");
define("L_PASS_ERROR2", "Morate ispuniti polja za lozinku.<br />Molimo vas da se vratite i upišete identičnu lozinku dvaput!");
define("L_PASS_ERROR3", "Lozinka i lozinka za potvrdu nisu iste.<br />Molimo vas da se vratite i ponovo upišete lozinke!");
define("L_FILE_ERROR1", "Nemogu da CHMOD datoteku");
define("L_FILE_ERROR2", "");
define("L_FOLD_ERROR1", "Nemogu da CHMOD datoteku");
define("L_FOLD_ERROR2", "");
define("L_INST_FOR", "Instaler za %s");
define("L_INST_VER", "Verzija:");
define("L_INST_SETUP", "Setup -");
define("L_INST_PAG_OF", "Strana %s od %s");
define("L_P0_HINT1", "Dobro došli na naš instaler za %s.");
define("L_P0_HINT2", "Molimo vas da upišete vaše ftp login podatke.");
define("L_P1_HINT1", "Ovaj program će vas voditi kroz proces instalacije.<br />Odaberite tip instalacije.");
define("L_P1_HINT2", "Odaberite koji je ovo tip instalacije:");
define("L_P1_HINT3", "FTP - podaci koje ste uneli su pogrešni. Instalacija nemože da se nastavi. Molimo vas da se vratite i ispravite greške. Ovo su greške:");
define("L_P2_HINT1", "Sada proveravamo konfiguraciju za phpMyChat. Mora biti promenjea datoteka (\"config/config.lib.php\") na ovom serveru.");
define("L_P2_HINT2", "Nemože se upisivati u konfig datoteku. Da bi se u njega moglo upisivati uzmite neki FTP-program (npr. Filezilla) da se spojite na vaš server i primenite CHMOD 666 na \"config.lib.php\" datoteku u konfig folderu). Ako neznate kako da to uradite ili ako nevolite da promenite dozvole na ovoj datoteci ispunite obrazac i kliknite na \"".L_BTN1."\".");
define("L_P2_HINT3", "Napomena: Ako ste promenili dozvole na ovoj datoteci kliknite \"".L_BTN4."\" dugme nakon chmod operacije, da bi program za instalaciju znao da se može upisivati u datoteku!");
define("L_P2_HINT4", "U datoteku \"config/config.lib.php\" se može upisivati. Ispunite ovaj obrazac i vrednosti će biti upisane direktno u datoteku.");
define("L_P3_HINT1", "Otiđite na prethodnu stranu i promenite vrednosti. Ako ovaj program nije mogao da kreira bazu podataka kreirajte je vi sami.");
define("L_P3_HINT2", "Ovde su vaši konfiguracioni rezultati koje treba da zalepite u \"config/config.lib.php\" datoteku. Molimo vas da odaberete celi tekst iz poruke ispod i da ga kopirate i zalepite u vaš tekst uređivač (npr. Notepad++). Sačuvajte ovu datoteku kao config.lib.php (proverite da je tip datoteke All types a ne Text dokument) i nadodajte ovu datoteku na vaš ftp-server u \"config\" folder.");
define("L_P3_HINT3", "Treba da kreirate Administratorski nalog, da bi mogli da pristupite administratorskoj tabli za phpMyChat.");
define("L_P3_HINT4", "Vaša \"config/config.lib.php\" - datoteka:");
define("L_P3_HINT5", "Nemogu da otvorim \"config/config.lib.php\" za upisivanje!");
define("L_P3_HINT6", "Otiđite na prethodnu stranu i promenite vrednosti. Nemođe se upisivati u datoteku.");
define("L_P3_HINT7", "Sada treba da kreirate vaš administratorski nalog da bi mogli da pristupite admin tabli za phpMyChat.");
define("L_P3_HINT8", "Vaše promene su sačuvane.");
define("L_P3_HINT9", "Napomena: Ovaj korisnički nalog ima sva prava i moći u admin tabli i sobama za čet!");
define("L_P3_BTN1", "Odaberi sve");
define("L_P4_HINT1", "Vaš glavni administratorski nalog je kreiran.");
define("L_P4_HINT2", "Vi ste spremni da se prijavite u admin tablu i promenite podešavanja vašeg phpMyChat servera. Ovde ima nekoliko dodatnih opcija koje vam mogu pomoći da upravljate sobe za čet, korisnike, poruke i mnogo više ... Koristite administratorske veze da bi pristupili admin tabli u bilo koje vreme.");
define("L_P4_HINT3", "Instalacioni proces je završen. Kliknite na \"".L_BTN5."\" da bi otišli na čet login stranu ili zatvorite ovaj prozoro d abi napustili instaler.");
define("L_P4_HINT4", "Skripta za podešavanje je već promenila dozvole na potrebnim datotekama i izbrisala je ovu instalacionu skriptu. Molimo vas da sami proverite da li je datoteka \"install/install.php\" izbrisana sa vašeg web servera! Ako nije, molimo vas da je sami izbrišete.");
define("L_P1_OP01", "Nova instalacija");
define("L_P1_OP02", "Ažurirajte sa %s");
define("L_P1_OP03", "Nema promena baze podataka");
define("L_P0_FORM1", "FTP adresa domaćina");
define("L_P0_FORM2", "FTP korisničko ime");
define("L_P0_FORM3", "FTP lozinka");
define("L_P0_FORM4", "FTP korenska putanja (relativna)");
define("L_P2_FORM01", "Domaćin za bazu podataka za phpMyChat"); //rev.8
define("L_P2_FORM02", "Korisničko ime za bazu podataka za phpMyChat");
define("L_P2_FORM03", "Lozinka za bazu podataka za phpMyChat");
define("L_P2_FORM04", "Ime baze podataka za phpMyChat");
define("L_P2_FORM05", "Tip baze podataka");
define("L_P2_FORM06", "Tabela za poruke");
define("L_P2_FORM07", "Tabela za korisnike u četu");
define("L_P2_FORM08", "Tabela za registrovane korisnike");
define("L_P2_FORM09", "Tabela za zabranjene korisnike");
define("L_P2_FORM10", "Tabela za konfiguraciju");
define("L_P2_FORM11", "Tabela za posmatrače");
define("L_P2_FORM12", "Promenite ime za vaš admin log folder");
define("L_P2_FORM13", "Ako nameravate da koristite phpMyChat kao integrisani modul za phpNuke ili phpBB, konfiguraciona tabela mora da se nazove \"c_config\" a tabela za registrovane korisnike mora biti nazvana \"c_reg_users\"!");
define("L_P2_FORM14", "Odaberite teško za pogađanje imena!");
define("L_P2_FORM15", "Ime vašeg čet servera");
define("L_P2_FORM16", "Tabela za statistiku");
define("L_P2_FORM17", "Port baze podataka za phpMiChat (opciono)"); //rev.8
define("L_P2_FORM18", "PDO Database Driver (opciono)"); //rev.9
define("L_P2_FORM19", "Prefiks za Database tabele (opciono)"); //rev.10
define("L_P3_FORM1", "Ime administratorskog naloga");
define("L_P3_FORM2", "Lozinka administratorskog naloga");
define("L_P3_FORM3", "Potvrdite lozinku");
define("L_P3_FORM4", "Stvarno ime kontakta za emailove");
define("L_P3_FORM5", "Kontakt email adresa");
define("L_P3_FORM6", "Čet url za emailove");
define("L_P4_FORM1", "Otvori Admin tablu");
define("L_P4_FORM2", "Opciono, možete da instalirate bot (robot, virtualni korisnik) za vaš čet, koji može dodati malo zabave u vašim sobama. To možete da učinite kasnije, ali je ovo najbolje vreme da to učinite, ali je ovo najbolje vreme da učinite. Ako kliknite na donji link, molimo vas da ne zaustavljate skriptu u novom iskačućem prozoru!");
define("L_P4_FORM3", "Instalirajte Bot");
?>