<?php
// File : spanish/localized.install.php - plus version (05.11.2017 - rev.10)
// Translation by Shelly Noyes <shelly.noyes@gmail.com>
// Do not use ' ; use ’ istead (utf-8 edit bug)

define("L_BTN1", "Siguiente");
define("L_BTN2", "Cancelar");
define("L_BTN3", "Anterior");
define("L_BTN4", "Recargar");
define("L_BTN5", "Terminar");
define("L_BTN6", "Omitir");
define("L_CONN_ERROR", "¡FTP dirección del servidor equivocada! Por favor regrese y averigüe su dirección del FTP anfitrión.");
define("L_LOGIN_ERROR", "¡Autenticación del registro de usuario falló!<br />Por favor regrese y averigüe su nombre de usuario y contraseña.");
define("L_FTP_NAME", "¡FTP nombre de usuario en blanco!");
define("L_FTP_PASS", "¡FTP contraseña en blanco!");
define("L_DB_NOCONNECT", "¡No se pudo conectar a la base de datos!");
define("L_DB_HINT1", "¡Base de Datos %s no existe y no puede ser creada!");
define("L_PASS_ERROR1", "No escogió un nombre administrador.<br />¡Por favor regrese y escoge un nombre para la cuenta de administrador!");
define("L_PASS_ERROR2", "Hay que llenar los espacios de contraseñas.<br />¡Regrese y escriba una contraseña idéntica dos veces!");
define("L_PASS_ERROR3", "La contraseña y la contraseña de verificación no corresponden.<br />¡Regrese y reescriba las contraseñas!");
define("L_FILE_ERROR1", "No se pudo CHMOD el archivo");
define("L_FILE_ERROR2", "");
define("L_FOLD_ERROR1", "No se pudo CHMOD la carpeta");
define("L_FOLD_ERROR2", "");
define("L_INST_FOR", "Instalador para %s");
define("L_INST_VER", "Versión:");
define("L_INST_SETUP", "Página de Instalación");
define("L_INST_PAG_OF", "%s de %s");
define("L_P0_HINT1", "Bienvenido al instalador para %s.");
define("L_P0_HINT2", "Escriba los datos de información a la conexión FTP abajo.");
define("L_P1_HINT1", "Esta configuración le guiará en el proceso de instalación. <br />Escoja su tipo de instalación abajo.");
define("L_P1_HINT2", "Escoja el tipo de instalación:");
define("L_P1_HINT3", "Los datos FTP que proveyó parecen incorrectos. La configuración no puede seguir. Regrese y corrija los errores. Los errores son:");
define("L_P2_HINT1", "Now we check out the configuration of phpMyChat. There must be changed one file (\"config/config.lib.php\") on this server.");
define("L_P2_HINT2", "No se puede escribir el archivo de configuración. Para poder escribirlo, utilice cualquier programa de FTP (Ej. Total Commander) para conectar al servidor y aplicar CHMOD 666 al archivo de \”config.lib.php\” en la carpeta de configuración. Si no sabe como hacer esto o no le gusta cambiar las permisiones del archivo, por favor llene la forma abajo y haga clic\"".L_BTN1."\".");
define("L_P2_HINT3", "Nota: ¡Si usted cambió las permisiones del archivo, haga clic en el botón de \"".L_BTN4."\" después de CHMOD operación, para que la configuración sepa que el archivo se puede escribir!");
define("L_P2_HINT4", "El archivo \"config/config.lib.php\" se puede escribir. Por favor llene esta forma y los valores estarán guardados directamente en el archivo.");
define("L_P3_HINT1", "Regrese a la página atrás y cambie los valores. Si la configuración no pudo crear la base de datos, usted tendrá que crearla.");
define("L_P3_HINT2", "Aquí están los resultados de configuración para pegar in el archivo de \"config/config.lib.php\". Seleccione todo el texto del mensaje abajo para copiarlo y pegarlo en su editor de texto preferido (Ej. Notepad++). Guarde el archivo como config.lib.php (averigüe que el tipo es de todos tipos y no de un documento de texto) y ponga el archivo en el servidor de FTP en la directoria de \"config\". ");
define("L_P3_HINT3", "Entonces hay que crear una cuenta de administrador para poder acceder el tablero de administración de phpMyChat.");
define("L_P3_HINT4", "Su \"config/config.lib.php\" - archivo:");
define("L_P3_HINT5", "¡No se pudo abrir \"config/config.lib.php\" para escribir!");
define("L_P3_HINT6", "Regrese a la página anterior y cambie los valores. El archivo no se puede escribir.");
define("L_P3_HINT7", "Para tener acceso al panel de phpMyChat usted debe crear una cuenta del Administrador.");
define("L_P3_HINT8", "Los cambios han sido guardados.");
define("L_P3_HINT9", "Nota: ¡esta cuenta de usuario tiene todos los derechos y poderes en los tableros de administración y salones de chat!");
define("L_P3_BTN1", "Seleccionar todo");
define("L_P4_HINT1", "La cuenta principal de administración ha sido creada.");
define("L_P4_HINT2", "Esta listo para entrar en el tablero de administración y cambiar la configuración de servidor phpMyChat . Hay varias opciones que ayudan a administrar el salón de chat, usuarios, mensajes, y mucho más. Utilice los enlaces disponibles de administración para acceder el tablero de administración en cualquier momento.");
define("L_P4_HINT3", "El proceso de instalación terminó. Haga clic en \"".L_BTN5."\" para ir a la pagina de chat principal o cerrar esta ventana para salir del instalador.");
define("L_P4_HINT4", "La escritura de configuración ya CHMOD los archivos necesarios para usted y también borró la escritura de configuración. Averigüe que se ha borrado el archivo \"install/install.php\" del servidor de la red. Si no, bórrelo usted.");
define("L_P1_OP01", "Nueva Instalación");
define("L_P1_OP02", "Modernizar de %s");
define("L_P1_OP03", "Sin cambios en la base de datos");
define("L_P0_FORM1", "FTP anfitrión direccion");
define("L_P0_FORM2", "FTP nombre de usuario");
define("L_P0_FORM3", "FTP contraseña");
define("L_P0_FORM4", "FTP ruta (relativa)");
define("L_P2_FORM01", "Base de datos-Anfitrión para phpMyChat"); //rev.8
define("L_P2_FORM02", "Base de datos-Nombre de usuarios para phpMyChat");
define("L_P2_FORM03", "Base de datos-Contraseña para phpMyChat");
define("L_P2_FORM04", "Base de datos-Nombre para phpMyChat");
define("L_P2_FORM05", "Tipo de base de datos");
define("L_P2_FORM06", "Tabla para mensajes");
define("L_P2_FORM07", "Tabla para usuarios en chat");
define("L_P2_FORM08", "Tabla para registrado usuarios");
define("L_P2_FORM09", "Tabla para prohibido usuarios");
define("L_P2_FORM10", "Tabla para configuración");
define("L_P2_FORM11", "Tabla para observadores"); 
define("L_P2_FORM12", "Renombre sus carpetas de administración");
define("L_P2_FORM13", "¡Si piensa utilizar phpMyChat como un módulo integrado para phpNuke o phpBB, tiene que llamar la tabla de configuración \"c_config\" y tiene que llamar la tabla para usuarios registrados \"c_reg_users\"!");
define("L_P2_FORM14", "¡Escoja un nombre que sea difícil de adivinar!");
define("L_P2_FORM15", "Nombre de su servidor de chat");
define("L_P2_FORM16", "Tabla para estadísticas");
define("L_P2_FORM17", "Base de datos-Puerto para phpMyChat (opcional)"); //rev.8
define("L_P2_FORM18", "Controlador de base de datos PDO (opcional)"); //rev.9
define("L_P2_FORM19", "Prefijo para tablas de base de datos (opcional)"); //rev.10
define("L_P3_FORM1", "Administrador cuenta nombre");
define("L_P3_FORM2", "Administrador cuenta contraseña");
define("L_P3_FORM3", "Reintroduzca contraseña");
define("L_P3_FORM4", "Nombre de contacto verdadero por correo electrónico");
define("L_P3_FORM5", "Correo electrónico de contacto ");
define("L_P3_FORM6", "Chat url por correo");
define("L_P4_FORM1", "Abrir Administrador Panel");
define("L_P4_FORM2", "Opcionalmente, se puede instalar un “bot” de chat para su salón de chat para que sea más divertido en el salón. Puede hacerlo mas tarde, pero ahora es el mejor momento. ¡Si haga clic en el enlace abajo, por favor no detenga la escritura en las ventanas nuevas que emergen!");
define("L_P4_FORM3", "Instalar Bot de chat");
?>