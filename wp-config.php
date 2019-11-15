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
define( 'DB_NAME', 'Midterm2' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'usi*X2 3Gf3J=R|-9{zzEd{$)c1U>JSwW),]]:96F$<83DYJ,I9-!r,sk}<Ux_b%' );
define( 'SECURE_AUTH_KEY',  'FTdMC)iTz>gW!HJ&_d9-7Q^MG{xVv*|8aC^s+ZL_}2^*Vg2+*Y;;28<5>UheOKpt' );
define( 'LOGGED_IN_KEY',    'Ah^%FBlV&G{zGm.Revg[~W&^.V`Em(-vSP/@Zgl+<fH6p`H8]^!HF,KITx0my0&m' );
define( 'NONCE_KEY',        'j?9M)^-R`.xg|!Vo{dDAZcI5!3~-=+J:n7EOQ/;ahF@xPb~|sar 3jS: 8P{RgL:' );
define( 'AUTH_SALT',        '^4eC&=K1t)xiTYZfe=;uIIazpcW,>I=m}#G.Jat9g+<^f-_:|Fm:aEXC&&>3?15<' );
define( 'SECURE_AUTH_SALT', 'zL[eq]o.M&W(5.I3l/<aEBXL2&@*avHpegW<}Ew$q=5SFTE<oX_`oHbT)_jMx%Ui' );
define( 'LOGGED_IN_SALT',   '2z(_Vm%.SJcYH1g2{^JuM?wzu*8qVsOvxT^V?rTm?V1CFe{AG_JxLC8 nl?,7@A)' );
define( 'NONCE_SALT',       'i+EY`-PE(~JNqx74)goX:@UEp]}QBFU ?N5Q`#c1a1RIv<n{*uSP:qr]VzfQQkoT' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

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
