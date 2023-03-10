<?php
// File : Indonesian/localized.install.php - plus version (05.11.2017 - rev.10)
// Translation by Hendriyo <hendriyo@gmail.com>
// Do not use ' but use ’ instead (utf-8 edit bug)

define("L_BTN1", "Lanjutan");
define("L_BTN2", "Batal");
define("L_BTN3", "Kembali");
define("L_BTN4", "Mengulang");
define("L_BTN5", "Selesai");
define("L_BTN6", "Melewati");
define("L_CONN_ERROR", "Alamat FTPnya salah!<br />Mohon kembali dan cek lagi alamat FTPnya.");
define("L_LOGIN_ERROR", "Loginnya salah!<br />Mohon kembali dan cek lagi login pemakai dan kata sandinya.");
define("L_FTP_NAME", "Nama pengguna FTPnya kosong!");
define("L_FTP_PASS", "Kata sandi FTPnya kosong!");
define("L_DB_NOCONNECT", "Tidak bisa tersambung ke database!");
define("L_DB_HINT1", "Database %s tidak ditemukan dan tidak dapat dibuat!");
define("L_PASS_ERROR1", "Anda tidak mengisi nama adminnya.<br />Mohon kembali dan pilih nama untuk account administrasinya!");
define("L_PASS_ERROR2", "Anda harus mengisi tempat kata sandinya.<br />Mohon kembali dan ketik kata sandi yang sama  dua kali!");
define("L_PASS_ERROR3", "Kata sandi dan kata sandi yang diketik tidak sama.<br />Mohon kembali dan ketik ulang kata sandinya!");
define("L_FILE_ERROR1", "Tidak dapat CHMOD filenya");
define("L_FILE_ERROR2", "");
define("L_FOLD_ERROR1", "Tidak dapat CHMOD foldernya");
define("L_FOLD_ERROR2", "");
define("L_INST_FOR", "Installer untuk %s");
define("L_INST_VER", "Versi:");
define("L_INST_SETUP", "Setup");
define("L_INST_PAG_OF", "Halaman %s dari %s");
define("L_P0_HINT1", "Selamat datang ditempat installer kami untuk %s.");
define("L_P0_HINT2", "Mohon masukan login ftp dibawah.");
define("L_P1_HINT1", "Setup ini akan memandu Anda melalui tahapan pemasangan.<br />Mohon pilih tipe pemasangannya dibawah.");
define("L_P1_HINT2", "Mohon pilih tipe pemasangannya:");
define("L_P1_HINT3", "Data FTP yang Anda masukan tidak benar. Setup tidak dapat dilanjutkan. Mohon kembali dan perbaiki yang salah. Ini adalah beberapa yang salah :");
define("L_P2_HINT1", "Sekarang kita mencek konfigurasi dari phpMyChat. Suatu file harus diubah (\"config/config.lib.php\") diserver ini.");
define("L_P2_HINT2", "Susunan tidak dapat ditulis ulang. Untuk membuat bisa ditulis ulang, gunakan segala macam program FTP (misal : Total Commander) untuk mengkoneksikan keserver Anda dan coba masukan CHMOD 666 ke \"config.lib.php\" file di dalam folder config). Jika Anda tidak tahu bagaimana melakukan hal ini atau jika Anda tidak suka mengganti ijin dari file ini, mohon isi formulir dibawah dan click \"".L_BTN1."\".");
define("L_P2_HINT3", "Catatan : Jika Anda mengganti ijin dari file ini, mohon klik \"".L_BTN4."\" tombol setelah operasi chmod, untuk mengetahui bahwa file ini dapat ditulis ulang!");
define("L_P2_HINT4", "File \"config/config.lib.php\" dapat ditulis ulang. Mohon isi formulir dan nilainya akan disimpan secara langsung pada filenya.");
define("L_P3_HINT1", "Kembali ke halaman sebelumnya dan ganti nilainya. Jika setup tidak dapat membuat database, mohon buat sendiri ya.");
define("L_P3_HINT2", "Ini adalah konfigurasi yang dipaste kedalam file \"config/config.lib.php\" ini. Mohon pilih semua tulisan dari tempat pesan dibawah, salin dan cetak ini diteks editor favorite Anda (misal : Notepad++). Simpan file sebagai config.lib.php (pastikan yang diketik bukan sebagai dokumen teks) dan letakkan file tersebut di server FTP Anda di \"config\" directory.");
define("L_P3_HINT3", "Lalu Anda membuat account Administrasi, untuk dapat mengakses Panel Admin dari phpMyChat.");
define("L_P3_HINT4", "File \"config/config.lib.php\" - Anda:");
define("L_P3_HINT5", "Tidak dapat membuka file \"config/config.lib.php\" untuk ditulis!");
define("L_P3_HINT6", "Kembali ke halaman sebelumnya dan ganti nilainya. File ini tidak dapat ditulis.");
define("L_P3_HINT7", "Sekarang Anda harus membuat account administrasi, untuk dapat mengakses Admin Panel dari  phpMyChat.");
define("L_P3_HINT8", "Penggantian yang Anda lakukan sudah disimpan.");
define("L_P3_HINT9", "Catatan: Account pengguna ini mempunyai kebijakan dan hak di Admin Panel dan kamar ngobrol!");
define("L_P3_BTN1", "Pilih semua");
define("L_P4_HINT1", "Account Administrasi sudah dibuat.");
define("L_P4_HINT2", "Anda sudah dapat login di Admin Panel dan gantilah settingan di server phpMyChat tersebut. Ada beberapa pilihan untuk membantu Anda dalam mengatur kamar-kamar ngobrol, pengguna, pesan dan banyak lagi. Gunakan link Administrasi untuk mengakses Admin Panel disetiap waktu.");
define("L_P4_HINT3", "Proses pemasangan sudah selesai. Klik \"".L_BTN5."\" untuk masuk ke halaman login atau keluar dari window proses pemasangan ini.");
define("L_P4_HINT4", "The setup script sudah siap chmod-ed dan juga hapus script setup ini. Mohon cek diri sendiri dan pastikan file \"install/install.php\" sudah dihapus dari webserver Anda! Jika belum, mohon hapus sendiri ya.");
define("L_P1_OP01", "Pemasangan baru");
define("L_P1_OP02", "Diperbaharui dari %s");
define("L_P1_OP03", "Tidak ada database yang diganti");
define("L_P0_FORM1", "Alamat host FTP");
define("L_P0_FORM2", "Pengguna FTP");
define("L_P0_FORM3", "Kata sandi FTP");
define("L_P0_FORM4", "Letak root FTP (relatif)");
define("L_P2_FORM01", "Database-Host untuk phpMyChat"); //rev.8
define("L_P2_FORM02", "Database-Pengguna untuk phpMyChat");
define("L_P2_FORM03", "Database-Kata Sandi untuk phpMyChat");
define("L_P2_FORM04", "Database-Nama untuk phpMyChat");
define("L_P2_FORM05", "Tipe databasenya");
define("L_P2_FORM06", "Table untuk pesan");
define("L_P2_FORM07", "Table untuk pengguna ditempat obrol");
define("L_P2_FORM08", "Table untuk pengguna yang terdaftar");
define("L_P2_FORM09", "Table untuk pengguna yang dilarang");
define("L_P2_FORM10", "Table untuk konfigurasi");
define("L_P2_FORM11", "Table untuk pemantau");
define("L_P2_FORM12", "Mengganti nama folder catatan admin");
define("L_P2_FORM13", "Jika Anda berniat untuk menggunakan phpMyChat sebagai module yang terintegrasi dengan phpNuke atau phpBB, konfigurasi tablenya harus ditulis \"c_config\" dan table untuk pengguna yang terdaftar harus ditulis \"c_reg_users\"!");
define("L_P2_FORM14", "Tebak pilihan namanya!");
define("L_P2_FORM15", "Nama dari server ngobrol");
define("L_P2_FORM16", "Table untuk statistik");
define("L_P2_FORM17", "Database-Port untuk phpMyChat (opsional)"); //rev.8
define("L_P2_FORM18", "Driver Database PDO (opsional)"); //rev.9
define("L_P2_FORM19", "Awalan untuk tabel database (opsional)"); //rev.10
define("L_P3_FORM1", "Administrator account nama");
define("L_P3_FORM2", "Administrator account katasandi");
define("L_P3_FORM3", "Memeriksa katasandi");
define("L_P3_FORM4", "Kontak untuk nama asli untuk emailnya");
define("L_P3_FORM5", "Kontak untuk alamat emailnya");
define("L_P3_FORM6", "Obrol url untuk email-emailnya");
define("L_P4_FORM1", "Buka Admin Panel");
define("L_P4_FORM2", "Sebagai pilihannya, Anda dapat memasang Bot (robot, pengguna maya)untuk Anda ajak obrol, Jadi ini dapat memberi kesenangan dikamar Anda. Anda dapat lakukan ini nanti, tapi adalah waktu yang tepat untuk melakukannya. Jika Anda klik link dibawah ini, mohon jangan hentikan script yang sedang berjalan diwindow baru muncul!");
define("L_P4_FORM3", "Pasang Bot");
?>