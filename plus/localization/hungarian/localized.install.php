<?php
// File : hungarian/localized.install.php - plus version (05.11.2017 - rev.10)
// Original translation by Jácint Zsuzsanna <jacint.zsuzsanna@yahoo.com>
// Do not use ' but use ’ instead (utf-8 edit bug)

define("L_BTN1", "Következő");
define("L_BTN2", "Mégse");
define("L_BTN3", "Vissza");
define("L_BTN4", "Újratöltés");
define("L_BTN5", "Befejezés");
define("L_BTN6", "Átugorja");
define("L_CONN_ERROR", "FTP-host cím hibás.<br />Menj vissza és ellenőrizd az ftp host címét!");
define("L_LOGIN_ERROR", "A belépési hitelesítés nem sikerült.<br />Menj vissza és ellenőrizd a belépési nevet és jelszót!");
define("L_FTP_NAME", "Üresen hagytad az FTP felhsználói nevet!");
define("L_FTP_PASS", "Üresen hagytad az FTP jelszót!");
define("L_DB_NOCONNECT", "Nem lehet az adatbázissal kapcsolatot létrehozni!");
define("L_DB_HINT1", "%s nevű adatbázis nem létezik és nem hozható létre.");
define("L_PASS_ERROR1", "Nem írtál be admin nevet.<br />Menj vissza és válassz egy nevet az Adminisztrátor felhasználói fiókodhoz!");
define("L_PASS_ERROR2", "Ki kell töltened a jelszó mezőket.<br />Menj vissza és írj be egy saját jelszót kétszer!");
define("L_PASS_ERROR3", "The password and the verifying password don’t match.<br />Please go back and retype the passwords!");
define("L_FILE_ERROR1", "Nem lehet CHMOD-olni a fájlt.");
define("L_FILE_ERROR2", "");
define("L_FOLD_ERROR1", "Nem lehet CHMOD-olni a mappát.");
define("L_FOLD_ERROR2", "");
define("L_INST_FOR", "%s telepítő");
define("L_INST_VER", "Verzó:");
define("L_INST_SETUP", "Beállítás -");
define("L_INST_PAG_OF", "%s / %s oldal");
define("L_P0_HINT1", "Üdvözlünk a %s telepítőjében.");
define("L_P0_HINT2", "Add meg az ftp belépési adataidat!");
define("L_P1_HINT1", "Ez az alkalmazás végigvezet a telepítési folyamaton.<br />Válaszd ki a telepítés típusát!");
define("L_P1_HINT2", "Válaszd ki milyen a telepítési forma:");
define("L_P1_HINT3", " Az FTP-adat, amit megadtál hibásnak tűnik. A telepítés nem folytatódhat. Menj vissza és javítsd ki a hibákat! Ezek a hibák:");
define("L_P2_HINT1", "Most ellenőrizzük a phpMyChat konfigurációját. A szerveren lévő (\"config/config.lib.php\") fájlnak kell változnia.");
define("L_P2_HINT2", "A config fájl nem írható. Hogy írhatóvá tedd, használj bármilyen FTP-programot (pl. Total Commander) hogy kapcsolódj a szerverhez és változtasd meg a \"config.lib.php\" CHMOD-ját 666-ra a config mappában). Ha nem tudod hogyan csináld vagy nem szeretnéd megtenni, töltsd ki az alábbi űrlapot és klikkelj ide \"".L_BTN1."\".");
define("L_P2_HINT3", "Figyelem: ha megváltoztattad ennek a fáljnak az engedélyeit, klikkelj a \"".L_BTN4."\" gombra a chmod változtatások után, hogy tudasd a programmal, hogy a fájl írható!");
define("L_P2_HINT4", "A \"config/config.lib.php\" fájl írható. Töltsd ki az űrlapot és az értékeket azonnal elmenti a fájlban.");
define("L_P3_HINT1", "Menj vissza az előző oldalra és változtasd meg az értékeket. Ha a telepítő nem hozta létre az adatbázist, neked kell lértehoznod");
define("L_P3_HINT2", "Itt vannak a konfigurációs eredményeid a \"config/config.lib.php\" fájlba másolva. Jelöld ki az egész szöveget az alábbi szövegdobozból, másold és illeszd be a kedvenc szövegszerkesztődbe, (pl. Notepad++). Mentsd el a fájlt config.lib.php néven (győződj meg róla, hogy a típusa Minden típus és nem Szöveges dokumentum) és töltsd fel a fájlt az ftp-szerveredre a \"config\" mappába.");
define("L_P3_HINT3", "Utána létre kell hoznod az Adminisztrátor felhasználói fiókját, hogy beléphess a phpMyChat Admin Panel-jébe.");
define("L_P3_HINT4", "A \"config/config.lib.php\" - fájlod:");
define("L_P3_HINT5", "A \"config/config.lib.php\" fájlt nem lehet megnyitni íráshoz.");
define("L_P3_HINT6", "Menj vissza az előző oldalra és változtasd meg az értékeket. Ez a fájl nem írható.");
define("L_P3_HINT7", "Most létre kell hoznod az Adminisztrátor felhasználói fiókját, hogy beléphess a phpMyChat Admin Panel-jébe.");
define("L_P3_HINT8", "A változtatásaid sikeresen elmentve.");
define("L_P3_HINT9", "Figyelem: Ez a felhasználói fiók rendelkezik minden joggal és hatalommal az in Admin Panelben és a chatszobákban!");
define("L_P3_BTN1", "Összes kiválasztása");
define("L_P4_HINT1", "A fő Adminisztrátor felhasználói fiók létrehozva.");
define("L_P4_HINT2", "Kész vagy, hogy bejelentkezz az Admin Panelbe és megváltoztasd a phpMyChat szerver beállításait. Találhatsz még néhány egyéb opciót, amik segítenek kezelni a chatszobákat, felhasználókat, üzeneteket és még sok mást. Használd az elérhető Adminisztráció linkeket, hogy bármikor beléphess az Admin Panelbe.");
define("L_P4_HINT3", "A telepítési folyamat befejeződött. Klikk \"".L_BTN5."\" hogy a chat kezdőoldalára ugorj, vagy zárd be azt az ablakot, hogy elhagyd a telepítőt");
define("L_P4_HINT4", "A telepítő script már chmod-olta a szökséges fájlokat, és törölte a telepítő script-et. Ellenőrizd, hogy az \"install/install.php\" fájl valóban törlődött a szerverről! Ha mégsem, töröld!");
define("L_P1_OP01", "Új telepítés");
define("L_P1_OP02", "Frissíteni a %s verziót");
define("L_P1_OP03", "Nincsenek változások azadatbázisban");
define("L_P0_FORM1", "FTP host cím");
define("L_P0_FORM2", "FTP felhasználói név");
define("L_P0_FORM3", "FTP jelszó");
define("L_P0_FORM4", "FTP elérési út (változó)");
define("L_P2_FORM01", "Adatbázis-Host a phpMyChat-hez"); //rev.8
define("L_P2_FORM02", "Adatbázis-Felhasználói név a phpMyChat-hez");
define("L_P2_FORM03", "Adatbázis-Jelszó a phpMyChat-hez");
define("L_P2_FORM04", "Adatbázis-Név a phpMyChat-hez");
define("L_P2_FORM05", "Adatbázis típusa");
define("L_P2_FORM06", "Tábla az üzeneteknek");
define("L_P2_FORM07", "Tábla a chat felhasználóknak");
define("L_P2_FORM08", "Tábla a regisztrált felhasználóknak");
define("L_P2_FORM09", "Tábla a tiltott felhasználóknak");
define("L_P2_FORM10", "Tábla a konfigurációhoz");
define("L_P2_FORM11", "Tábla a leskelődőknek");
define("L_P2_FORM12", "Nevezd át az admin logs mappát");
define("L_P2_FORM13", "Ha a phpMyChat-et beépített modulként használod a phpNuke vagy phpBB programokban, a konfigurációs táblának \"c_config\" a regisztrált felhasználók táblájának pedig a \"c_reg_users\" nevet kell adni!");
define("L_P2_FORM14", "Válassz egy nehezen kitalálható nevet!");
define("L_P2_FORM15", "A Chat szerver neve");
define("L_P2_FORM16", "Tábla a statisztikákhoz");
define("L_P2_FORM17", "Adatbázis-Post a phpMyChat-hez (tetszőleges)"); //rev.8
define("L_P2_FORM18", "PDO Adatbázis-Illesztőprogram (tetszőleges)"); //rev.9
define("L_P2_FORM19", "Előtag az adatbázis táblákhoz (tetszőleges)"); //rev.10
define("L_P3_FORM1", "Administrator felhasználói fiók név");
define("L_P3_FORM2", "Administrator felhasználói fiók jelszó");
define("L_P3_FORM3", "Jelszó megerősítés");
define("L_P3_FORM4", "Elérhetőséghez: valódi név az e-mailekhez");
define("L_P3_FORM5", "Elérhetőséghez: e-mail cím");
define("L_P3_FORM6", "Chat URL az e-mail-ekhez");
define("L_P4_FORM1", "Az Admin Panel megnyitása");
define("L_P4_FORM2", "Ha akarod, akkor egy bot-ot (robot, virtuális felhasználó) telepíthetsz a chat-hez, így színesebbé teheted a szobáidat. Megteheted később is, de ez a mostani a legjobb lehetőség. Ha az alábbi linkre kattintasz, ne állítsd meg a script futtatásás az új felugró ablakban!");
define("L_P4_FORM3", "Bot telepítés");
?>