<?php
// File : hungarian/localized.cmds.php (04.11.2017 - rev.3)
// Translation by Jácint Zsuzsanna <jacint.zsuzsanna@yahoo.com>
// Do not use ' but use ’ instead (utf-8 edit bug)

// You can use more than one word (synonyms, abbreviations) as commands in your language. Multiple words must be separated by commas, without spaces! No need to add the existing English commands here.
# Example: define("L_CMD_AWAY", "plec,brb,revin");

define("L_CMD_ANNOUNCE", "bejelentes,bejelentés"); // announce (send a global announcement in all rooms)
define("L_CMD_AWAY", "pill"); // away (set as away from pc or back)
define("L_CMD_BAN", "tiltas,tiltás"); // ban (block an user from joining chat)
define("L_CMD_BOT", "robot"); // bot (start/stop the bot in a room)
define("L_CMD_BUZZ", ""); // buzz (play a buzz/sound alert in the room)
define("L_CMD_CLEAR", "torles,törlés"); // clear (clear the messages frame and show only the last 5 posts)
define("L_CMD_DEMOTE", "lefokoz"); // demote (demote an user to the lower power level - admin->mod->user)
define("L_CMD_DICE", "dob,kocka"); // dice (throw the dice)
define("L_CMD_HELP", "segitseg,segítség "); // ?,help (open the help popup page)
define("L_CMD_HIGH", "kiemel"); // high (highlight someone's posts)
define("L_CMD_IGNORE", "melloz,mellőz"); // ignore (ignore an user - hide his posts and show the list of ignored people)
define("L_CMD_IMG", "kep,kép"); // img (post an image in the chat)
define("L_CMD_INVITE", "meghivas,meghívás"); // invite (send an invitation to the user to follow you in your room)
define("L_CMD_JOIN", "csatl,csatlakozas,csatlakozás"); // join (join an existing room)
define("L_CMD_KICK", "kidob,kitilt"); // kick,boot (kick an user from a room)
define("L_CMD_LTR", ""); // ltr (post a left-to-right text)
define("L_CMD_MATH", ""); //math (post MathJax equations in chat) //rev. 3
define("L_CMD_ME", "én"); // me (tell the room what you are doing)
define("L_CMD_MR", ""); // mr (same as "me" but with the gender prefix)
define("L_CMD_MSG", "uzi,üzi"); // msg,to (send a private message)
define("L_CMD_NOTIFY", "ert,ért,ertesites,értesítés"); // notify (enable/disable notifications)
define("L_CMD_ORDER", "rendezes,rendezés"); // order (change the posts order to first-on-top or first-on-bottom - not available in IE and FF)
define("L_CMD_PROFILE", "profil"); // profile (open the personal profile page for editing)
define("L_CMD_PROMOTE", "eloleptet,előléptet"); // promote (promote an user to the next power level - user->mod->admin)
define("L_CMD_QUIT", "kilep,kilép"); // quit,bye,exit (quit a room)
define("L_CMD_RECALL", "elozo,előző"); // !,recall (recall last sent message in the message box)
define("L_CMD_REFRESH", "friss"); // refresh,reload (modify/reset the time between browser refreshes/reloads)
define("L_CMD_ROOM", "szoba"); // room (send an announcement/warning to the current room)
define("L_CMD_RTL", ""); // rtl (post a right-to-left text)
define("L_CMD_SAVE", "ment,kuld,küld"); // save,export (open the last N posts to be exported)
define("L_CMD_SHOW", "mutat,utolso,utolsó"); // show,last (reset the messages frame to show the last 5 / N posts only)
define("L_CMD_SIZE", "betu,betű"); // size (change/reset the size of the font in chat)
define("L_CMD_SORT", "lista"); // sort (sort - ascending the usernames in the lists, alphabetically or by the time they joined chat)
define("L_CMD_TIMESTAMP", "ido,idő"); // timestamp (show/hide the timestamp in posts and server/worldtime in the status bar)
define("L_CMD_TOPIC", "tema,téma"); // topic (set/change the topic)
define("L_CMD_UTUBE", ""); // tube,utube,youtube (post an youtube video) //rev. 2
define("L_CMD_VIDEO", ""); // vid,video,play (post a video) //rev. 2
define("L_CMD_WISP", "suttog"); //wisp,whisp (send a whisper / private message to an user in a different room)
define("L_CMD_WHOIS", "ki,kicsoda"); // whois,about (shows the profile page of an user) 
?>