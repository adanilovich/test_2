<?php
// File : turkish/localized.install.php - plus version (07.06.2009 - rev.7)
//Translation by Volkan Övün <vovun@hotmail.com>
// Do not use ' ; use ’ istead (utf-8 edit bug)

define("L_BTN1", "Devam");
define("L_BTN2", "Vazgeç");
define("L_BTN3", "Geri");
define("L_BTN4", "Tekrar Yükle");
define("L_BTN5", "Bitir");
define("L_BTN6", "Dikkate alma");
define("L_CONN_ERROR", "FTP-sunucu adresi yanlış!<br />Lütfen geri dönüp FTP sunucu adresini kontrol ediniz.");
define("L_LOGIN_ERROR", "Girişe izin verilmedi!<br />Lütfen geri dönüp giriş kullanıcı adı ve şifrenizi kontrol ediniz.");
define("L_FTP_NAME", "FTP kullanıcı adını yazmadınız!");
define("L_FTP_PASS", "FTP şifrenizi yazmadınız!");
define("L_DB_NOCONNECT", "Veritabanına bağlanılamıyor!");
define("L_DB_HINT1", "%s adlı veritabanı mevcut değil ve oluşturulamıyor!");
define("L_PASS_ERROR1", "Yönetici adını boş bıraktınız.<br />Lütfen geri dönünüz ve Yönetici hesabınız için bir ad yazınız!");
define("L_PASS_ERROR2", "Şifre alanlarını doldurmak zorundasınız.<br />Lütfen geri dönün ve şifrenizi kutulara iki kez yazın!");
define("L_PASS_ERROR3", "Yazdığınız iki şifre birbiri ile uyuşmuyor.<br />Lütfen geri dönünüz ve şifrelerinizi tekrar yazınız!");
define("L_FILE_ERROR1", "Dosya CHMOD yapılamıyor");
define("L_FILE_ERROR2","");
define("L_FOLD_ERROR1", "Dizin CHMOD yapılamıyor");
define("L_FOLD_ERROR2","");
define("L_INST_FOR", "%s kurucusu");
define("L_INST_VER", "Sürüm:");
define("L_INST_SETUP", "Kurulum -");
define("L_INST_PAG_OF","%s sayfadan %s . si");
define("L_P0_HINT1", "%s kurucusuna hoşgeldiniz.");
define("L_P0_HINT2", "Lütfen aşağıya FTP giriş bilgilerinizi yazınız.");
define("L_P1_HINT1", "Bu kurulum rehberi, programı kurma esnasında sizi yönlendirecektir.<br />Lütfen kurulum tipini seçiniz:");
define("L_P1_HINT2", "Lütfen aşağıdan kurulum tipini seçiniz.");
define("L_P1_HINT3", "Belirttiğiniz FTP - verileri yanlış gibi görünüyor. Kurulum devam edemiyor. Lütfen geri dönüp hataları gideriniz. Hatalar şunlar:");
define("L_P2_HINT1", "Şimdi phpMyChat ayarlarını kontrol edelim... Sunucu üzerindeki (\"config/config.lib.php\") dosyasının değiştirilmiş olması gerklidir.");
define("L_P2_HINT2", "Ayar dosyasının üzerine yazılamıyor. Dosyayı yazılabilir yapmak için (mesela Total Comander) bir FTP-programı kullanıp sunucunuza bağlanın ve config dizinini içindeki \"config.lib.php\" dosyasının CHMOD yapısını 666 olarak değiştirin. Eğer nasıl yapılacağını bilmiyorsanız veya ayar dosyasının izinlerini değiştirmek istemiyorsanız, lütfen aşağıdaki formu doldurun sonra da \"".L_BTN1."\" ’a tıklayın.");
define("L_P2_HINT3", "Not: Eğer ayar dosyasının izinlerini değiştirirseniz, kuruluma dosyanın yazılabilir olduğunu bildirmek için \"".L_BTN4."\" butonuna tıklayın!");
define("L_P2_HINT4","\"config/config.lib.php\" dosyasının üzerine yazılabiliyor. Lütfen bu formu doldurunuz. Değerler doğrudan dosyaya yazılacaktır.");
define("L_P3_HINT1", "Önceki sayfaya geri dönüp değerleri değiştirin. Eğer kurulum veritabanını oluşturamazsa lütfen kendiniz oluşturun.");
define("L_P3_HINT2","\"config/config.lib.php\" dosyasına yazılması gereken ayarlarınız aşağıda belirtilmiştir. Aşağıdaki mesaj kutusu içerisindeki metnin tamamını kopyaladıktan sonra tercih ettiğiniz bir metin işleyicisi kullanarak (mesela Notepad++) boş bir sayfaya yapıştırınız. Dosyayı config.lib.php adıyla kaydediniz (dosya tipinin .txt olmamasına dikkat ediniz) ve FTP sunucunuzda \"config\" dizininin içine yükleyiniz..");
define("L_P3_HINT3", "Daha sonra, phpMyChat’ın Yönetim Paneline giriş yapabilmek için bir Yönetici hesabı oluşturmalısınız.");
define("L_P3_HINT4","\"config/config.lib.php\" - dosyanız:");
define("L_P3_HINT5","\"config/config.lib.php\" dosyası yazmak için açılamıyor!");
define("L_P3_HINT6", "Önceki sayfaya dönüp değerleri değiştiriniz. Dosyaya yazılamıyor.");
define("L_P3_HINT7", "Daha sonra, phpMyChat’ın Yönetim Paneline giriş yapabilmek için bir Yönetici hesabı oluşturmalısınız.");
define("L_P3_HINT8", "Yaptığınız değişiklikler kaydedildi.");
define("L_P3_HINT9", "Not: Bu kullanıcı hesabı Yönetim Paneli’nde ve sohbet odalarında bütün haklara ve yetkilere sahiptir!");
define("L_P3_BTN1", "Hepsini seç");
define("L_P4_HINT1", "Asıl Yönetici hesabınız oluşturuldu.");
define("L_P4_HINT2", "Yönetim Paneline girerek phpMyChat sunucusu ayarlarını değiştirmeye hazırsınız. Sohbet odalarını, kullanıcıları, mesajları ve daha pek çok şeyi yönetmeniz konusunda size yardımcı olacak birkaç  seçenek daha bulacaksınız. İstediğiniz zaman Yönetim Paneline girmek için Yönetim bağlantısına tıklayınız.");
define("L_P4_HINT3", "Kurulum işlemi tamamlandı. Sohbet giriş sayfasına gitmek için \"".L_BTN5."\" butonuna tıklayın veya bu kurucudan çıkmak için pencereyi kapatın.");
define("L_P4_HINT4", "Bu kurulum yazılımı gerekli olan tüm dosya oluşturma işlemlerini yapmış, ve kendi kendini de silmiştir. Lütfen \"install/install.php\" dosyasının Web sunucunuzdan silindiğinden emin olunuz! Eğer silinmemişse kendiniz siliniz.");
define("L_P1_OP01", "Yeni kurulum");
define("L_P1_OP02","%s ’dan yükseltme");
define("L_P1_OP03", "Veritabanı değişikliği yok");
define("L_P0_FORM1", "FTP sunucu adresi");
define("L_P0_FORM2", "FTP kullanıcı adı");
define("L_P0_FORM3", "FTP şifresi");
define("L_P0_FORM4", "FTP root yolu (relative)");
define("L_P2_FORM01", "phpMyChat yayımı için Veritabanı-Sunucusu");
define("L_P2_FORM02", "phpMyChat için Veritabanı-Kullanıcı adı");
define("L_P2_FORM03", "phpMyChat için Veritabanı-Şifresi");
define("L_P2_FORM04", "phpMyChat için Veritabanı-Adı");
define("L_P2_FORM05", "Veritabanı tipi");
define("L_P2_FORM06", "Mesajlar için tablo");
define("L_P2_FORM07", "Sohbetteki kullanıcılar için tablo");
define("L_P2_FORM08", "Kayıtlı kullanıcılar için tablo");
define("L_P2_FORM09", "Yasaklı kullanıcılar için tablo");
define("L_P2_FORM10", "Ayarlar için tablo");
define("L_P2_FORM11", "Gözlemleyiciler için tablo");
define("L_P2_FORM12", "logsadmin isimli dosyanın adını değiştirin");
define("L_P2_FORM13", "Eğer phpMyChat’ı phpNuke veya phpBB’nin entegre modülü olarak kullanacaksanız, ayar tablosunun adı \"c_config\" ve kayıtlı kullanıcılar tablosunun adı \"c_reg_users\" olmalıdır!");
define("L_P2_FORM14", "Tahmin edilmesi zor bir ad seçin!");
define("L_P2_FORM15", "Sohbet sunucunuzun adı");
define("L_P2_FORM16", "İstatistikler için tablo");
define("L_P2_FORM17", "phpMyChat için Veritabanı-Bağlantı Noktası (tercihe bağlı)"); //rev.8
define("L_P2_FORM18", "PDO Veritabanı Sürücüsü (tercihe bağlı)"); //rev.9
define("L_P2_FORM19", "Veritabanı tablolarında ön ek (tercihe bağlı)"); //rev.10
define("L_P3_FORM1", "Yönetici hesabı için kullanıcı adı");
define("L_P3_FORM2", "Yönetici hesabı için şifre");
define("L_P3_FORM3", "Şifre onayı");
define("L_P3_FORM4", "E-postalar için gerçek irtibat kurulacak kişi ismi");
define("L_P3_FORM5", "İrtibat e-posta adresi");
define("L_P3_FORM6", "E-postalar için Sohbet URL adresi");
define("L_P4_FORM1", "Yönetim Panelini Aç");
define("L_P4_FORM2", "Tercihe bağlı olarak bir Robot, (sanal kullanıcı) kurabilir, böylece odalarınıza değişik bir eğlence katabilirsiniz. Robotu sonra da kurabilirsiniz, fakat kurmayı tercih ederseniz, şimdi, kurmak için en iyi zamandır.");
define("L_P4_FORM3", "Robot’u kur");
?>