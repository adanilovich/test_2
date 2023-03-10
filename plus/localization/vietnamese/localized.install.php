<?php
// File : vietnamese/localized.install.php - plus version (05.11.2017 - rev.10)
// Translation by Marshall <hellomarshall_lookatme@yahoo.com.vn>
// Do not use ' ; use ’ istead (utf-8 edit bug)

define("L_BTN1", "Tiếp");
define("L_BTN2", "Ngừng");
define("L_BTN3", "Quay lại ");
define("L_BTN4", "Làm mới");
define("L_BTN5", "Thành công");
define("L_BTN6", "Bỏ qua");
define("L_CONN_ERROR", "Địa chỉ FTP - host sai!<br />Xin quay lại vài kiểm tra địa chĩ FTP.");
define("L_LOGIN_ERROR", "Đăng nhập không thành công!<br />Làm ơn quay lại và kiểm tra tên đăng nhập cũng như mật khẩu.");
define("L_FTP_NAME", "Tên đăng nhậ[p FTP còn để trống!");
define("L_FTP_PASS", "Mật khẩu đăng nhập FTP còn để trống!");
define("L_DB_NOCONNECT", "Đã không thể nối tới cơ sở dữ liệu (DB)!");
define("L_DB_HINT1", "Cơ sỡ dữ liệu %s không tồn tại và không thể tạo!");
define("L_PASS_ERROR1", "Bạn đã không điền vào tên Admin.<br />Quay trở lại và chọn tên đăng nhập admin!");
define("L_PASS_ERROR2", "Bạn phải điền vào mật khẩu.<br />Xin quay trở lại và điền mật khẩu 2 lần!");
define("L_PASS_ERROR3", "Mật khẩu xác nhận không phù hợp.<br />Xin quay trở lại và xác nhận mật khẩu!");
define("L_FILE_ERROR1", "Không thể CHMOD hồ sơ");
define("L_FILE_ERROR2", "");
define("L_FOLD_ERROR1", "Không thể CHMOD Folderr");
define("L_FOLD_ERROR2", "");
define("L_INST_FOR", "Cài đặt cho %s");
define("L_INST_VER", "Phien bản:");
define("L_INST_SETUP", "Cài đặt -");
define("L_INST_PAG_OF", "Trang %s của %s");
define("L_P0_HINT1", "Chào mừng bạn cài đặt cho %s.");
define("L_P0_HINT2", "Làm ơn đánh vào FTP đăng nhập.");
define("L_P1_HINT1", "Cài đặt này sẽ hướng dẫn bạn thông qua quá trình cài đặt.<br />Xin lựa chọn điều mà kiểu (của) sự cài đặt là điều này:");
define("L_P1_HINT2", "Xin lựa chọn kiểu cài đặt bên dưới.");
define("L_P1_HINT3", "Cái FTP - Dữ liệu bạn cung cấp có vẻ sai. Cài dặt không thể tiếp túc. Mời trở về và sửa chữa những lỗi. Đây là những lỗi:");
define("L_P2_HINT1", "Bây giờ chúng tôi kiểm tra cấu hình của phpMyChat. Bạn cần thay đổi file (\"config/config.lib.php\") trên server.");
define("L_P2_HINT2", "Hồ sơ config Không Viết. Để làm nó viết, Chọn FTP-Chuong trình (e.g. Total Commander , leapFTP) để nối tới người phục vụ của các bạn và CHMOD 666 tới \"config.lib.php\" hồ sơ trong folder config). Nếu bạn không biết làm sao để làm điều này hay Nếu bạn không thích thay đổi những sự cho phép (của) hồ sơ này, xin điền vào mẫu trống và nhấn \"".L_BTN1."\".");
define("L_P2_HINT3", "Ghi chú: Phải chăng bạn thay đổi những sự cho phép (của) hồ sơ này, làm ăn click \"".L_BTN4."\" nút sau khi thao tác chmod, để để cho cài đặt biết hồ sơ kia viết!");
define("L_P2_HINT4", "Cài file \"config/config.lib.php\" viết. Xin điền vào mẫu (dạng) này và những giá trị trực tiếp sẽ được cất giữ trong hồ sơ.");
define("L_P3_HINT1", "Đi quay trở lại trang trước đây và thay đổi những giá trị. Phải chăng cài đặt đã không thể tạo ra cơ sở dữ liệu, xin tạo ra nó bởi chính bạn.");
define("L_P3_HINT2", "Ở đây là những kết quả cấu hình (của) các bạn sẽ được dán Vào trong \"config/config.lib.php\" file. Xin lựa chọn tất cả văn bản từ hộp thông báo, Sao chép nó vào một chương trình lưu trữ (e.g. Notepad++). Lưu file tới config.lib.php (chắc chắn rằng kiểu là tất cả các kiểu không phải là tài liệu Văn bản) và đặt hồ sơ lên trên trên ftp- người phục vụ các bạn trong \"config\" Thư mục.");
define("L_P3_HINT3", "Rồi bạn phải tạo ra một tài khoản Người quản trị, để có khả năng để truy nhập Bảng Admin (của) phpMyChat.");
define("L_P3_HINT4", "Bạn \"config/config.lib.php\" - file:");
define("L_P3_HINT5", "Không thể mở \"config/config.lib.php\" để viết!");
define("L_P3_HINT6", "Đi quay trở lại trang trước đây và thay đổi những giá trị. Hồ sơ Không Viết.");
define("L_P3_HINT7", "Bây giờ bạn phải tạo ra một tài khoản Người quản trị, để có khả năng để truy nhập Bảng Admin (của) phpMyChat.");
define("L_P3_HINT8", "Những sự thay đổi (của) Các bạn đã được cất giữ.");
define("L_P3_HINT9", "Ghi chú: Tài khoản người sử dụng này có tất cả quyền lợi và những sức mạnh trong Bảng Admin và chatrooms!");
define("L_P3_BTN1", "Chọn tất cả");
define("L_P4_HINT1", "Tài khoản Người quản trị chính (của) Các bạn đã được tạo ra.");
define("L_P4_HINT2", "Bạn sẵn sàng để đăng nhập trong Bảng Admin và sự thay đổi những sự thiết đặt của phpMyChat của các bạn tách ra. ở đó vài tùy chọn khác mà giúp đỡ bạn quản lý chuyện gẫu cũng là những phòng, những người sử dụng, những thông báo và v.v. Sử dụng những mối liên kết Quản trị sẵn có để truy nhập Bảng Admin tại thời gian.");
define("L_P4_HINT3", "Quá trình Cài đặt có được hoàn thành. Chọn \"".L_BTN5."\" để nhảy tới trang đăng nhập chuyện gẫu hay đóng cửa sổ này để rời bỏ người lắp đặt này.");
define("L_P4_HINT4", "Nguyên bản cài đặt đã chmoded kẻ được cần sắp xếp cho bạn và cũng xóa Nguyên bản cài đặt này. Xin làm chắc chắn Hồ sơ \"install/install.php\" đã bị xóa từ người phục vụ mạng của các bạn! Nếu Không phải, xin xóa chính nó.");
define("L_P1_OP01", "Cài đặt mới");
define("L_P1_OP02", "Nâng cấp từ %s");
define("L_P1_OP03", "Không cơ sở dữ liệu thay đổi");
define("L_P0_FORM1", "FTP Địa chỉ host");
define("L_P0_FORM2", "FTP tên đăng nhập");
define("L_P0_FORM3", "FTP mật khẩu");
define("L_P0_FORM4", "FTP Đường dẫn gốc (Tương đối)");
define("L_P2_FORM01", "Database-Host cho phpMyChat"); //rev.8
define("L_P2_FORM02", "Database-Username cho phpMyChat");
define("L_P2_FORM03", "Database-Password cho phpMyChat");
define("L_P2_FORM04", "Database-Name cho phpMyChat");
define("L_P2_FORM05", "Kiểu database");
define("L_P2_FORM06", "Bảng cho thông báo");
define("L_P2_FORM07", "Bảng cho người sử dụng trong chuyện gẫu");
define("L_P2_FORM08", "Bảng cho những người sử dụng được đăng ký");
define("L_P2_FORM09", "Bảng cho những người sử dụng được cấm chỉ");
define("L_P2_FORM10", "Bảng cho cấu hình");
define("L_P2_FORM11", "Bảng cho những người ẩn núp");
define("L_P2_FORM12", "Đổi tên những ngăn admin folder");
define("L_P2_FORM13", "Nếu bạn định sử dụng phpMyChat như một mô đun tổng hợp (cho) phpNuke hay phpBB, bảng cấu hình phải được gọi là \"c_config\" và bảng cho những người sử dụng được đăng ký phải được gọi là \"c_reg_users\"!");
define("L_P2_FORM14", "Chọn một để khó khăn đoán tên!");
define("L_P2_FORM15", "Tên Người Phục Vụ");
define("L_P2_FORM16", "Bảng cho thống kê");
define("L_P2_FORM17", "Database-Port cho phpMyChat (không bắt buộc)"); //rev.8
define("L_P2_FORM18", "Cơ sở dữ liệu PDO driver (không bắt buộc)"); //rev.9
define("L_P2_FORM19", "Tiền tố cho bảng cơ sở dữ liệu (không bắt buộc)"); //rev.10
define("L_P3_FORM1", "Tên tài khoản Người quản trị");
define("L_P3_FORM2", "Mật khẩu tài khoản Người quản trị");
define("L_P3_FORM3", "Xác minh mật khẩu");
define("L_P3_FORM4", "Sự Tiếp xúc Thực sự bổ nhiệm những email");
define("L_P3_FORM5", "Địa chỉ email Tiếp xúc");
define("L_P3_FORM6", "Tán gẫu url (cho) những email");
define("L_P4_FORM1", "Bảng Admin Mở");
define("L_P4_FORM2", "Để chọn, bạn có thể cũng thiết đặt một bot (robot, virtual user) chuyện gẫu các bạn, vì thế nó có thể thêm sự vui đùa nào đó vào những phòng (của) các bạn. Bạn có thể làm điều này sau đó, nhưng đây là thời gian tốt nhất để làm nó. Nếu bạn kích vào tiếng rống mối liên kết, xin không ngăn chặn nguyên bản chạy trong cửa sổ popup mới!");
define("L_P4_FORM3", "Cài đặt Bot");
?>