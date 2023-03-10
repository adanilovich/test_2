<?php
// File : brazilian_portuguese/localized.install.php - plus version (05.11.2017 - rev.10)
// Original translation by Marco Gelli Marchese<mvmcgm@gmail.com>
// Do not use ' but use ’ instead (utf-8 edit bug)

define("L_BTN1", "Próximo");
define("L_BTN2", "Cancelar");
define("L_BTN3", "Voltar");
define("L_BTN4", "Atualizar");
define("L_BTN5", "Acabar");
define("L_BTN6", "Pular");
define("L_CONN_ERROR", "endereço FTP-host está errado!<br /> Por favor volte e analise o seu endereço host ftp.");
define("L_LOGIN_ERROR", "Autentificação de login falhou!<br />Por favor volte e verifique o usuário e senha.");
define("L_FTP_NAME", "FTP usuário está em branco!");
define("L_FTP_PASS", "FTP senha está em branco!");
define("L_DB_NOCONNECT", "Não foi possível conectar a data-base!");
define("L_DB_HINT1", "Data-base %s não existe e não pode ser criada!");
define("L_PASS_ERROR1", "Você não preencheu o seu nome de administrador.<br />Por favor volte e escolha um nome para a sua conta de administrador!");
define("L_PASS_ERROR2", "Você precisa preencher o campo de senha.<br />Por favor volte e digite uma senha idêntica duas vezes!");
define("L_PASS_ERROR3", "A senha e a verificação de senha não estão iguais.<br />Por favor volte e reescreva a sua senha!");
define("L_FILE_ERROR1", "Não foi possível CHMOD o arquivo");
define("L_FILE_ERROR2", "");
define("L_FOLD_ERROR1", "Não foi possível CHMOD a pasta");
define("L_FOLD_ERROR2", "");
define("L_INST_FOR", "Instalador para %s");
define("L_INST_VER", "Versão:");
define("L_INST_SETUP", "Configuração");
define("L_INST_PAG_OF", "Página %s de %s");
define("L_P0_HINT1", "Bem vindo ao nosso instalador para %s.");
define("L_P0_HINT2", "Por favor digite os seus dados de login ftp abaixo.");
define("L_P1_HINT1", "Esta configuração irá te guiar através do processo de instalação.<br />Por favor escolha o tipo de instalação, abaixo.");
define("L_P1_HINT2", "Por favor escolha qual o tipo de instalação é esse:");
define("L_P1_HINT3", "Os dados FTP que você forneceu parecem estar errados. A configuração não conseguiu continuar. Por favor volte e corrija os erros. Estes são os erros:");
define("L_P2_HINT1", "Agora vamos verificar a configuração do phpMyChat. Um arquivo (\"config/config.lib.php\") deve ter sido alterado neste servidor.");
define("L_P2_HINT2", "O arquivo config não é gravável. Para torná-lo gravável, use qualquer programa FTP (ex: Total Commander) para se conectar ao seu servidor e aplique CHMOD 666 ao arquivo \"config.lib.php\" na pasta config). Se você não sabe como fazer isso ou se não gosta de alterar as permissões deste arquivo, por favor preencha o formulário abaixo e clique \"".L_BTN1."\".");
define("L_P2_HINT3", "Obs: Se você alterou as permissões para este arquivo, por favor clique no botão \"".L_BTN4."\" após a operação chmod, para permitir que a configuração saiba que o arquivo é gravável!");
define("L_P2_HINT4", "O arquivo \"config/config.lib.php\" é gravável. Por favor preencha este formulário e os valores serão gravados automaticamente neste arquivo.");
define("L_P3_HINT1", "Volte para a página anterior e altere os valores. Se a configuração não conseguir criar a data-base, por favor crie você mesmo.");
define("L_P3_HINT2", "Aqui estão os resultados de configuração a ser copiados dentro do arquivo \"config/config.lib.php\". Por favor selecione todo o texto da caixa de mensagem abaixo, copie e cole isto em seu editor de texto preferencial (ex: Notepad++). Salve este arquivo como config.lib.php (verifique se o tipo é “Todos os tipos de documento” e não “documento de texto”) e bote o arquivo em seu ftp-server no diretório \"config\".");
define("L_P3_HINT3", "Então você deve criar uma conta de Administrador, para ter acesso ao painel do Administrador do phpMyChat.");
define("L_P3_HINT4", "Seu arquivo \"config/config.lib.php\":");
define("L_P3_HINT5", "Não foi possível abrir \"config/config.lib.php\" para escrita!");
define("L_P3_HINT6", "Volte para a página anterior e altere os valores. O arquivo não é gravável.");
define("L_P3_HINT7", "Agora você precisa criar uma conta de Administrador, para por acessar o painel do Administrador do phpMyChat.");
define("L_P3_HINT8", "Suas alterações foram salvas.");
define("L_P3_HINT9", "Obs: Esta conta de usuário possui todos os direitos e poderes no painel de controle do Administrador e nas salas de chat!");
define("L_P3_BTN1", "Selecione todas");
define("L_P4_HINT1", "Sua conta principal de administrador foi criada.");
define("L_P4_HINT2", "Você está pronto para fazer o login no painel do Administrador e alterar as configurações do seu servidor. Existem algumas outras opções que podem te ajudar a administrar salas de chat, usuários, mensagens e muito mais. Use os links administrativos disponíveis para acessar o painel do administrador a qualquer hora.");
define("L_P4_HINT3", "Processo de instalação está completo. Clique \"".L_BTN5."\" para ir para a página de login do chat ou feche esta janela fara sair do instalador.");
define("L_P4_HINT4", "O script de instalação já chmod-ed os arquivos necessários para você e também já deletou este script de instalação. Por favor verifique você mesmo e tenha certeza que o arquivo \"install/install.php\" tenha sido deletado do seu servidor web! Em caso negativo, por favor o apague você mesmo.");
define("L_P1_OP01", "Nova instalação");
define("L_P1_OP02", "Atualização a partir de %s");
define("L_P1_OP03", "Nenhuma mudança de data-base");
define("L_P0_FORM1", "endereço FTP host ");
define("L_P0_FORM2", "usuário FTP");
define("L_P0_FORM3", "senha FTP");
define("L_P0_FORM4", "caminho da raiz (relativo) FTP");
define("L_P2_FORM01", "Host Data-base para phpMyChat"); //rev.8
define("L_P2_FORM02", "Usuário Data-base para phpMyChat");
define("L_P2_FORM03", "Senha Data-base para phpMyChat");
define("L_P2_FORM04", "Nome Data-base para phpMyChat");
define("L_P2_FORM05", "Tipo de data-base");
define("L_P2_FORM06", "Tabela para mensagens");
define("L_P2_FORM07", "Tabela para usuários no chat");
define("L_P2_FORM08", "Tabela para usuários registrados");
define("L_P2_FORM09", "Tabela para usuários banidos");
define("L_P2_FORM10", "Tabela para configuração");
define("L_P2_FORM11", "Tabela para seguidores");
define("L_P2_FORM12", "Renomeie a sua pasta de logs administrativos");
define("L_P2_FORM13", "Se você pretende usar o phpMyChat como um módulo integrado para phpNuke ou phpBB, a tabela de configuração deve se chamar \"c_config\" e a tabela de usuários registrados deve se chamar \"c_reg_users\"!");
define("L_P2_FORM14", "Escolha um nome que seja difícil de adivinhar!");
define("L_P2_FORM15", "Nome do seu servidor de Chat");
define("L_P2_FORM16", "Estatísticas de tabela");
define("L_P2_FORM17", "Port Data-base para phpMyChat (opcional)"); //rev.8
define("L_P2_FORM18", "Driver Data-base PDO (opcional)"); //rev.9
define("L_P2_FORM19", "Prefixo para tabelas Data-base (opcional)"); //rev.10
define("L_P3_FORM1", "Nome de conta do Administrador");
define("L_P3_FORM2", "Senha de conta do Administrador");
define("L_P3_FORM3", "Verifique a senha");
define("L_P3_FORM4", "Nome do contato real para e-mails");
define("L_P3_FORM5", "Endereço de e-mail do contato");
define("L_P3_FORM6", "Url do Chat para e-mails");
define("L_P4_FORM1", "Abrir painel do Administrador");
define("L_P4_FORM2", "Opcionalmente, você pode instalar um bot (robô, usuário virtual) para o seu Chat, para que ele adicione um pouco de diversão as salas. Você pode fazer isso depois, mas agora é a melhor hora para fazer isso. Se clicar no link abaixo, por favor não pare script de rodar na nova página pop-up!");
define("L_P4_FORM3", "Instalar Bot");
?>