<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'landkir');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', '');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Df0<]Mx!#uwLH,2_d)l<)NQpbIHjj+C#mAnk>)W]O9WA4;jCxPn&}3o?{.`gT(/B');
define('SECURE_AUTH_KEY',  'N:}Rmjh!Hx)4 `!&oAM~jV5n`K5,~w7jVUPAv}0ehq:(o0k0@$9!@Ckg`RH>GA[c');
define('LOGGED_IN_KEY',    'j:jw`qAWWM-O:9HC/MYZvge7~K0ZyoXgteg)*Q0p?lix|yS^@6m)A_wCK #`q^8P');
define('NONCE_KEY',        '9zdyocB~sI!Bt~[y>f$IxK&x&~83<.E9OqaM<>fp)h4I6RIoC|^ok,l7i+C|<<8-');
define('AUTH_SALT',        '=*IzssH?{F->R}A(UFYq]KnI[#eQ9JloMGH0PYZZ3Q}OMkm$Ay{ZJELM=5dY/*~R');
define('SECURE_AUTH_SALT', '3K!5zxk3ln|I(j3H3TSYR}3#]+(F`a0@CV>:ZAU@K=5^j6`-DX >eO?_IyTJRz`;');
define('LOGGED_IN_SALT',   'MQv!d7vB$9}j%g#A1y*Rr`^|[f-HZmH}l~bFuqHO//iRy@1;Exl>w>BWE:gzWu1.');
define('NONCE_SALT',       '4){1bclVn^ff1kk_/50R7C1I]]Ne-:@CyPj1}mjSAN-f.<-hF(/9*Xp}FQKa;c~$');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'mp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
