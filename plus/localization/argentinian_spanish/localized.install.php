<?php
// File : argentinian_spanish/localized.install.php - plus version (05.11.2017 - rev.10)
// Translation by Matias Olivera <matiolivera@yahoo.com>
// Do not use ' ; use ’ istead (utf-8 edit bug)

define("L_BTN1", "Siguiente");
define("L_BTN2", "Cancelar");
define("L_BTN3", "Atrás");
define("L_BTN4", "Recargar");
define("L_BTN5", "Terminar");
define("L_BTN6", "Omitir");
define("L_CONN_ERROR", "Dirección errónea de FTP-host!<br />Por favor retrocedé y verificá tu dirección ftp-host.");
define("L_LOGIN_ERROR", "Error de autenticación!<br />Por favor retrocedé y verificá tu usuario y clave.");
define("L_FTP_NAME", "Usuario FTP en blanco!");
define("L_FTP_PASS", "Clave FTP en blanco!");
define("L_DB_NOCONNECT", "No se pudo conectar a la base de datos!");
define("L_DB_HINT1", "La Base de datos %s no existe y no se puede crear!");
define("L_PASS_ERROR1", "No completaste un nombre de administrador.<br />Por favor retrocedé y elegí un nombre para tu cuenta de Administrador!");
define("L_PASS_ERROR2", "Debés completar el campo de clave.<br />Por favor retrocedé y completá dos veces con la misma clave!");
define("L_PASS_ERROR3", "La clave no coincide.<br />Por favor retrocedé y volvé a completar los campos de clave!");
define("L_FILE_ERROR1", "No se pudo hacer CHMOD del archivo");
define("L_FILE_ERROR2", "");
define("L_FOLD_ERROR1", "No se pudo hacer CHMOD de la carpeta");
define("L_FOLD_ERROR2", "");
define("L_INST_FOR", "Instalador para %s");
define("L_INST_VER", "Versión:");
define("L_INST_SETUP", "Página de configuración");
define("L_INST_PAG_OF", "%s de %s");
define("L_P0_HINT1", "Bienvenido a nuestro instalador para %s.");
define("L_P0_HINT2", "Por favor ingresá tu login información de logueo ftp.");
define("L_P1_HINT1", "Este programa te guiará en el proceso de instalación.<br />Por favor seleccioná qué tipo de instalación es:");
define("L_P1_HINT2", "Por favor seleccioná el tipo de instalación.");
define("L_P1_HINT3", "La información FTP que ingresaste parece ser erronea. No puede continuarse con la instalación. Por favor retrocedé y corregí los siguientes errores:");
define("L_P2_HINT1", "Ahora se verificará la configuración para phpMyChat. Deberá ser cambiada en el archivo (\"config/config.lib.php\") de este server.");
define("L_P2_HINT2", "El archivo de configuración es solo de lectura. Para permitir su escritura, use cualquier programa FTP (ej. Total Commander) para conectar su servidor y aplicar CHMOD 666 al archivo \"config.lib.php\" en la carpeta config). Si no sabés cómo hacerlo o si no querés cambiar los permisos de este archivo, por favor completá el siguiente form y presioná \"".L_BTN1."\".");
define("L_P2_HINT3", "Nota: Si cambiaste los permisos de este archivo, hacé click en \"".L_BTN4."\" luego de hacer el CHMOD para que la instalación sepa que ahora es de escritura!");
define("L_P2_HINT4", "El archivo \"config/config.lib.php\" es de escritura. Por favor completá el formulario y los valores serán guardados directamente en el archivo.");
define("L_P3_HINT1", "Retrocedé a la página anterior y modificá los valores. Si la instalación no pudo crear la base de datos, por favor creala vos mismo.");
define("L_P3_HINT2", "Aquí están los resultados de tu configuración para que los pegues en el archivo \"config/config.lib.php\". Por favor seleccioná todo el texto del cuadro de mensaje, copialo y pegalo mediante un editor de texto de tu predilección (ej. Notepad++). Salvá el archivo como config.lib.php (Asegurate de que el tipo es Todos los tipos y no Texto solamente) y subí el archivo a tu servidor en el directorio \"config\".");
define("L_P3_HINT3", "Luego, tenés que crear una cuenta de administración, para poder acceder al Panel de Administración de phpMyChat.");
define("L_P3_HINT4", "Tu archivo \"config/config.lib.php\" :");
define("L_P3_HINT5", "No se pudo abrir \"config/config.lib.php\" para escritura!");
define("L_P3_HINT6", "Volvé a la página anterior y cambiá los valores. El archivo no puede escribirse.");
define("L_P3_HINT7", "Ahora, tenés que crear una cuenta de administración, para poder acceder al Panel de Administración de phpMyChat.");
define("L_P3_HINT8", "Los cambios fueron salvados.");
define("L_P3_HINT9", "Nota: Este usuario tiene todos los derechos y poderes en el Panel de Administración y salones de chat!");
define("L_P3_BTN1", "Seleccioná todos");
define("L_P4_HINT1", "Tu cuenta principal de administración ha sido creada.");
define("L_P4_HINT2", "Ya podés loguearte en el Panel de Administración y cambiar la configuración de tu servidor phpMyChat. También hay muchas otras opciones que te van a a ayudar a manejar los salones de chat, usuarios, mensajes y mucho más. Usá los links de Administración disponibles para acceder al Panel de Administración en cualquier momento.");
define("L_P4_HINT3", "El proceso de instalación ha terminado. Hacé click \"".L_BTN5."\" para ir a la página de logueo, o cerrá esta página para finalizar con la instalación.");
define("L_P4_HINT4", "El instalador ya modificó por vos el modo de los archivos necesarios y borró este código de configuración. Por favor asegurate de que el archivo \"install/install.php\" fue borrado de tu servidor web! Si no lo fue, por favor borralo vos.");
define("L_P1_OP01", "Nueva instalación");
define("L_P1_OP02", "Actualizar desde %s");
define("L_P1_OP03", "Sin cambios en la base de datos");
define("L_P0_FORM1", "dirección FTP host");
define("L_P0_FORM2", "usuario FTP");
define("L_P0_FORM3", "clave FTP");
define("L_P0_FORM4", "FTP root path (relativo)");
define("L_P2_FORM01", "Host de la Base de datos para phpMyChat"); //rev.8
define("L_P2_FORM02", "Usuario de la Base de datos para phpMyChat");
define("L_P2_FORM03", "Clave de la Base de datos para phpMyChat");
define("L_P2_FORM04", "Nombre de la base de datos para phpMyChat");
define("L_P2_FORM05", "Tipo de base de datos");
define("L_P2_FORM06", "Tabla para mensajes");
define("L_P2_FORM07", "Tabla para usuarios en el chat");
define("L_P2_FORM08", "Tabla para usuarios registrados");
define("L_P2_FORM09", "Tabla para usuarios bloqueados");
define("L_P2_FORM10", "Tabla para configuración");
define("L_P2_FORM11", "Tabla para mirones");
define("L_P2_FORM12", "Renombrá la carpeta para tus logs de administración<br /><i>(elegí un nombre difícil de adivinar)</i>");
define("L_P2_FORM13", "Si tu intención es usar phpMyChat como un módulo integrado para phpNuke o phpBB, la tabla de configuración se deberá llamar \"c_config\" y la tabla para usuarios registrados deberá llamarse \"c_reg_users\"!");
define("L_P2_FORM14", "Elegí un nombre difícil de adivinar");
define("L_P2_FORM15", "Nombre de tu servidor de Chat");
define("L_P2_FORM16", "Tabla para estadísticas");
define("L_P2_FORM17", "Puerto de la Base de datos para phpMyChat (opcional)"); //rev.8
define("L_P2_FORM18", "Controlador de base de datos PDO (opcional)"); //rev.9
define("L_P2_FORM19", "Prefijo para tablas de base de datos (opcional)"); //rev.10
define("L_P3_FORM1", "Nombre del administrador de la cuenta");
define("L_P3_FORM2", "Clave del administrador de la cuenta");
define("L_P3_FORM3", "Verificar clave");
define("L_P3_FORM4", "Nombre de contacto real para los emails");
define("L_P3_FORM5", "Dirección de email para contacto");
define("L_P3_FORM6", "URL del chat para los emails");
define("L_P4_FORM1", "Abrir Panel de Adminstración");
define("L_P4_FORM2", "Opcionalmente, también podrás instalar un bot (usuario virtual, robot) a tu chat, así podrás agregar algo de diversión a tus salones de chat. Podés hacerlo después pero este es el mejor momento para hacerlo. Si hacés click en el link de abajo, NO detengas el script que se corre en la ventana nueva!");
define("L_P4_FORM3", "Instalar Bot");
?>