<?php
// File : english/localized.install.php - plus version (05.11.2017 - rev.10)
// Original file for Plus version by Thomas Pschernig <tpsde1970@aol.com> and Ciprian Murariu <ciprianmp@yahoo.com>
// Do not use ' ; use ’ istead (utf-8 edit bug)

define("L_BTN1", "Next");
define("L_BTN2", "Cancel");
define("L_BTN3", "Back");
define("L_BTN4", "Reload");
define("L_BTN5", "Finish");
define("L_BTN6", "Skip");
define("L_CONN_ERROR", "FTP-host address wrong!<br />Please go back and check your ftp host address.");
define("L_LOGIN_ERROR", "Login authentication failed!<br />Please go back and check your login username and password.");
define("L_FTP_NAME", "FTP username left blank!");
define("L_FTP_PASS", "FTP password left blank!");
define("L_DB_NOCONNECT", "Could not connect to database!");
define("L_DB_HINT1", "Database %s does not exist and I can not create it!");
define("L_PASS_ERROR1", "You didn’t fill in an admin name.<br />Please go back and choose a name for your Administrator account!");
define("L_PASS_ERROR2", "You have to fill out the password fields.<br />Please go back and type an identical password twice!");
define("L_PASS_ERROR3", "The password and the verifying password don’t match.<br />Please go back and re-type the passwords!");
define("L_FILE_ERROR1", "Could not CHMOD the file");
define("L_FILE_ERROR2", "");
define("L_FOLD_ERROR1", "Could not CHMOD the folder");
define("L_FOLD_ERROR2", "");
define("L_INST_FOR", "Installer for %s");
define("L_INST_VER", "Version:");
define("L_INST_SETUP", "Setup -");
define("L_INST_PAG_OF", "Page %s of %s");
define("L_P0_HINT1", "Welcome to our installer for %s.");
define("L_P0_HINT2", "Please enter your ftp login data below.");
define("L_P1_HINT1", "This setup will guide you through the installation process.<br />Please select your installation type below.");
define("L_P1_HINT2", "Please select what type of installation is this:");
define("L_P1_HINT3", "The FTP - data you provided seems to be wrong. The setup cannot continue. Please go back and correct the errors. These are the errors:");
define("L_P2_HINT1", "Now we check out the configuration of phpMyChat. There must be changed one file (\"config/config.lib.php\") on this server.");
define("L_P2_HINT2", "The config file is not writeable. To make it writeable, use any FTP-program (e.g. Total Commander) to connect to your server and apply CHMOD 666 to \"config.lib.php\" file in the config folder). If you don’t know how to do this or if you don’t like to change the permissions of this file, please fill out the form below and click \"".L_BTN1."\".");
define("L_P2_HINT3", "Note: If you changed the permissions of this file, please click \"".L_BTN4."\" button after chmod operation, in order to let the setup know that the file is writeable!");
define("L_P2_HINT4", "The file \"config/config.lib.php\" is writeable. Please fill out this form and the values will be stored directly in the file.");
define("L_P3_HINT1", "Go back to previous page and change the values. If the setup could not create the database, please create it by yourself.");
define("L_P3_HINT2", "Here are your configuration results to be pasted into the \"config/config.lib.php\" file. Please select all the text from the message-box below, copy it and paste it in your prefered text-editor (e.g. Notepad++). Save the file as config.lib.php (make sure the type is All types not Text document) and put the file up on your ftp-server in the \"config\" directory.");
define("L_P3_HINT3", "Then you have to create an Administrator account, to be able to access the Admin Panel of phpMyChat.");
define("L_P3_HINT4", "Your \"config/config.lib.php\" - file:");
define("L_P3_HINT5", "Could not open \"config/config.lib.php\" for writing!");
define("L_P3_HINT6", "Go back to previous page and change the values. The file is not writeable.");
define("L_P3_HINT7", "Now you have to create an Administrator account, to be able to access the Admin Panel of phpMyChat.");
define("L_P3_HINT8", "Your changes have been saved.");
define("L_P3_HINT9", "Note: This user account has all the rights and powers in Admin Panel and chatrooms!");
define("L_P3_BTN1", "Select all");
define("L_P4_HINT1", "Your main Administrator account has been created.");
define("L_P4_HINT2", "You’re ready to login in the Admin Panel and change the settings of your phpMyChat server. There are also several other options which help you manage chat rooms, users, messages and lots more. Use the available Administration links in order to access the Admin Panel at anytime.");
define("L_P4_HINT3", "Installation process has completed. Click \"".L_BTN5."\" to jump to the chat login page or close this window to leave this installer.");
define("L_P4_HINT4", "The setup script already chmoded the needed files for you and also deleted this setup script. Please make sure the file \"install/install.php\" has been deleted from your web server! If not, please delete it yourself.");
define("L_P1_OP01", "New installation");
define("L_P1_OP02", "Upgrade from %s");
define("L_P1_OP03", "No database changes");
define("L_P0_FORM1", "FTP host address");
define("L_P0_FORM2", "FTP username");
define("L_P0_FORM3", "FTP password");
define("L_P0_FORM4", "FTP root path (relative)");
define("L_P2_FORM01", "Database-Host for phpMyChat"); //rev.8
define("L_P2_FORM02", "Database-Username for phpMyChat");
define("L_P2_FORM03", "Database-Password for phpMyChat");
define("L_P2_FORM04", "Database-Name for phpMyChat");
define("L_P2_FORM05", "Type of database");
define("L_P2_FORM06", "Table for messages");
define("L_P2_FORM07", "Table for users in chat");
define("L_P2_FORM08", "Table for registered users");
define("L_P2_FORM09", "Table for banned users");
define("L_P2_FORM10", "Table for configuration");
define("L_P2_FORM11", "Table for lurkers");
define("L_P2_FORM12", "Rename your admin logs folder");
define("L_P2_FORM13", "If you intend to use phpMyChat as an integrated module for phpNuke or phpBB, the configuration table must be called \"c_config\" and the table for registered users must be called \"c_reg_users\"!");
define("L_P2_FORM14", "Choose a hard to guess name!");
define("L_P2_FORM15", "Name of your Chat server");
define("L_P2_FORM16", "Table for statistics");
define("L_P2_FORM17", "Database-Port for phpMyChat (optional)"); //rev.8
define("L_P2_FORM18", "PDO Database Driver (optional)"); //rev.9
define("L_P2_FORM19", "Prefix for database tables (optional)"); //rev.10
define("L_P3_FORM1", "Administrator account name");
define("L_P3_FORM2", "Administrator account password");
define("L_P3_FORM3", "Verify password");
define("L_P3_FORM4", "Contact Real name for emails");
define("L_P3_FORM5", "Contact email address");
define("L_P3_FORM6", "Chat url for emails");
define("L_P4_FORM1", "Open Admin Panel");
define("L_P4_FORM2", "Optionally, you can also install a bot (robot, virtual user) for your chat, so it can add some fun to your rooms. You can do this later, but this is the best time to do it. If you click on the link below, please do not stop the script from running in the new popup window!");
define("L_P4_FORM3", "Install Bot");
?>