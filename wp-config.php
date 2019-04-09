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
define( 'DB_NAME', 'api_rest' );

/** Username của database */
define( 'DB_USER', 'api_rest' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'api_rest' );

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
define( 'AUTH_KEY',         'DO+caKWoNT%@-HDeOmJ3G/6YcSh:xazu7dU$(Eobc3~`G%l[$;,g`+7S_s|Cy 9`' );
define( 'SECURE_AUTH_KEY',  'I+1D(DTD>wVyQ5h @mI3K, 7y!ofPwc|T2W]<T;{UcNvH?[|).e!@v{k^!.s1FG*' );
define( 'LOGGED_IN_KEY',    'c,Y?nEISmuCo@vG*BSL&#VpL0~A-[6^_&BH$NOPN^{P#|;F!x9 ts}fOdoBW|2:8' );
define( 'NONCE_KEY',        '$diIYOe)VH7B}:.t*|}z|]sDO3`N}p%z5./zK3kvxqG~nKCxxh0fwC9w*K1cO1GH' );
define( 'AUTH_SALT',        'jd@i*ON>Ic]S1R{KM<Oz+NdC,:G{vVrsnZ&:oDKh*:Gs`?q03FGvc!u8|&C#7wxe' );
define( 'SECURE_AUTH_SALT', 'aT>GUaAju]H^Pz<_I,2Z-CalI+$EI`A[ch`qq@lPd`@kGgCdFyFOs5;/~2Gi<8+=' );
define( 'LOGGED_IN_SALT',   'YA(hIBF6UKI5Qj,%M{ZF%3%yWE)g04-b>Gd;%ex&fLnb&]2j6/3 39CPQ0~3J.!G' );
define( 'NONCE_SALT',       'bPOhwmY~xSF<gyj*Rd70jdqc>KK3},hf-B.()I938X^rJ7{;EMN;nzNaOQ!n)Zcv' );

define('JWT_AUTH_SECRET_KEY', 'secret-key');
define('JWT_AUTH_CORS_ENABLE', true);

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

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
