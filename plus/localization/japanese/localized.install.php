<?php
// File : japanese/localized.install.php - plus version (05.11.2017 - rev.10)
// Original translation by Dendeke <konchakka211@yahoo.co.jp>
// Corrections by Ciprian Murariu <ciprianmp@yahoo.com>
// Do not use ' but use ’ instead (utf-8 edit bug)

define("L_BTN1", "次");
define("L_BTN2", "取消");
define("L_BTN3", "戻る");
define("L_BTN4", "リロード");
define("L_BTN5", "完了");
define("L_BTN6", "スキップ");
define("L_CONN_ERROR", "FTPホストのアドレスが違います！<br />戻って確認してください。");
define("L_LOGIN_ERROR", "ログイン認証に失敗しました！<br />戻ってユーザ名とパスワードを確認してください。");
define("L_FTP_NAME", "FTPユーザ名が空白です！");
define("L_FTP_PASS", "FTPパスワードが空白です！");
define("L_DB_NOCONNECT", "データベースに接続できません！");
define("L_DB_HINT1", "データベース%sは存在しません。作成することもできません！");
define("L_PASS_ERROR1", "管理者名が空白です。<br />戻って管理者アカウント用に名前を選択してください！");
define("L_PASS_ERROR2", "パスワードフィールドの入力は必須です。<br />戻って同じパスワードを２回入力してください！");
define("L_PASS_ERROR3", "パスワードが確認用のものと一子しません。<br />戻って再入力してください！");
define("L_FILE_ERROR1", "ファイル属性が変更できませんでした");
define("L_FILE_ERROR2", "");
define("L_FOLD_ERROR1", "フォルダ属性が変更できませんでした");
define("L_FOLD_ERROR2", "");
define("L_INST_FOR", "%s用インストーラ");
define("L_INST_VER", "バージョン：");
define("L_INST_SETUP", "セットアップ");
define("L_INST_PAG_OF", "%s／%sページ");
define("L_P0_HINT1", " %s用インストーラへようこそ。");
define("L_P0_HINT2", "FTPのログインデータを以下に入力してください。");
define("L_P1_HINT1", "このセットアップを通じて簡単にインストールできます。<br />次の中からインストールのタイプを選択してください。");
define("L_P1_HINT2", "インストールのタイプを選択してください：");
define("L_P1_HINT3", "FTPデータが間違っています。セットアップを続行できません。戻ってエラーを修正してください。判明したエラー：");
define("L_P2_HINT1", "phpMyChatの設定をチェックします。サーバにあるファイル（「config/config.lib.php」）は変更されていなければなりません。");
define("L_P2_HINT2", "設定ファイルが書き込み不能です。書き込み可能にするには、FTPソフトを使ってサーバへ接続し、configフォルダにある「config.lib.php」の属性を666に変更します。やり方がわからない場合やファイル属性を変更したくない場合は、以下の書式を埋めてから「".L_BTN1."」をクリックしてください。");
define("L_P2_HINT3", "注意：ファイル属性を変更したら、「".L_BTN4."」ボタンをクリックしてください。そうすることで、セットアップはファイルが書き込み可能になったことを認識します！");
define("L_P2_HINT4", "「config/config.lib.php」ファイルは書き込み可能です。この書式を埋めてください。値は直接ファイルに保存されます。");
define("L_P3_HINT1", "前のページに戻って値を変更してください。セットアップがデータベースを作成できない時は、手動で作成してください。");
define("L_P3_HINT2", "「config/config.lib.php」ファイルとして保存される設定内容は次のとおりです。下のメッセージボックスにある全てのテキストを選択し、ノートパッドなどのエディタにコピー＆ペーストしてください。ファイルをconfig.lib.phpという名前で保存（ファイルの種類はテキスト文書ではなくすべてのファイルにします）し、FTPサーバ内の「config」ディレクトリにアップしてください。");
define("L_P3_HINT3", "次に管理者アカウントを作成します。これにより、phpMyChatの管理パネルにアクセスできるようになります。");
define("L_P3_HINT4", "あなたの「config/config.lib.php」－ファイル：");
define("L_P3_HINT5", "「config/config.lib.php」を開いて書き込むことができません！");
define("L_P3_HINT6", "前のページに戻って値を変更してください。ファイルは書き込み不能です。");
define("L_P3_HINT7", "管理者アカウントを作成して、phpMyChatの管理パネルにアクセスできるようにします。");
define("L_P3_HINT8", "変更を保存しました。");
define("L_P3_HINT9", "注意：このユーザには、管理パネルと全てのチャットルームに対する全権限が与えられています！");
define("L_P3_BTN1", "全てを選択");
define("L_P4_HINT1", "メインとなる管理者アカウントを作成しました。");
define("L_P4_HINT2", "これから管理パネルにログインし、phpMyChatサーバの設定を変更することができます。その他にも、チャットルームやユーザ、メッセージ等々さまざまな項目を操作できるオプションがいくつかあります。管理リンクを使えば、いつでも好きな時に管理パネルにアクセスできます。");
define("L_P4_HINT3", "インストールが完了しました。「".L_BTN5."」をクリックしてチャットのログインページへ移動するか、このウィンドウを閉じてインストーラを終了させてください。");
define("L_P4_HINT4", "必要なファイルの属性を既に変更し、セットアップスクリプトも削除しました。「install/install.php」が削除されていることを確認してください。万一、削除できていなかった場合は、手動で削除してください。");
define("L_P1_OP01", "新規インストール");
define("L_P1_OP02", "%sからのアップグレード");
define("L_P1_OP03", "データベースの変更なし");
define("L_P0_FORM1", "FTPホストアドレス");
define("L_P0_FORM2", "FTPユーザ名");
define("L_P0_FORM3", "FTPパスワード");
define("L_P0_FORM4", "FTPルートパス（相対）");
define("L_P2_FORM01", "phpMyChat用データベースのホスト"); //rev.8
define("L_P2_FORM02", "phpMyChat用データベースのユーザ名");
define("L_P2_FORM03", "phpMyChat用データベースのパスワード");
define("L_P2_FORM04", "phpMyChat用データベースの名前");
define("L_P2_FORM05", "データベースの種類");
define("L_P2_FORM06", "メッセージ用テーブル");
define("L_P2_FORM07", "チャットユーザ用テーブル");
define("L_P2_FORM08", "登録ユーザ用テーブル");
define("L_P2_FORM09", "接続禁止ユーザ用テーブル");
define("L_P2_FORM10", "設定用テーブル");
define("L_P2_FORM11", "ROMユーザ用テーブル");
define("L_P2_FORM12", "管理ログフォルダ名の変更");
define("L_P2_FORM13", "phpMyChatをphpNukeやphpBBの統合モジュールとして使用するときは、設定用テーブルは「c_config」、登録ユーザ用テーブルは「c_reg_users」でなければなりません！");
define("L_P2_FORM14", "推測しづらい名前にしてください！");
define("L_P2_FORM15", "チャットサーバの名前");
define("L_P2_FORM16", "統計用テーブル");
define("L_P2_FORM17", "phpMyChatのデータベースポート（オプション）"); //rev.8
define("L_P2_FORM18", "PDOデータベースドライバ（オプション）"); //rev.9
define("L_P2_FORM19", "データベーステーブルの接頭辞（オプション）"); //rev.10
define("L_P3_FORM1", "管理者アカウントの名前");
define("L_P3_FORM2", "管理者アカウントのパスワード");
define("L_P3_FORM3", "確認用パスワード");
define("L_P3_FORM4", "連絡用メールに表示する名前");
define("L_P3_FORM5", "連絡用メールアドレス");
define("L_P3_FORM6", "メールに添付するチャットのURL");
define("L_P4_FORM1", "管理パネルを開く！");
define("L_P4_FORM2", "オプションで、ロボット（バーチャルユーザ）をインストールしてチャットを楽しむことができます。後からインストールすることもできますが、ここでのインストールをお勧めします。以下のリンクをクリックしたら、ポップアップウィンドウで実行されるスクリプトを停止しないでください！");
define("L_P4_FORM3", "ロボットのインストール");
?>