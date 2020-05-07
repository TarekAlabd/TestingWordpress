<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'testwordpress_db' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'root' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );

/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|DC*kmQ*!wh#nnquhm?$UDh1L08<pmN`K ?e4o!tOBw=3`M7Fdo15E9F@8Q(Xyo]' );
define( 'SECURE_AUTH_KEY',  'xK^j,iE1%{G#=t6oM%Ssm7QG/v;72I;i)w{}*Dc$OIj~Js,1Mye:nR{|:Zjo+ yq' );
define( 'LOGGED_IN_KEY',    'eoK#~O,I;1<5U&S;i9BG!/@u+jv90nn4vFk>6N%U+^oLH]B[mBt`qQ.ce{a6Irt7' );
define( 'NONCE_KEY',        'X]W1u83VJ~Kp9^:FsqB?&j_@B-y*t[Mce{#KH}rl>|Cu6l,Y37OF2doy>?TLQu,?' );
define( 'AUTH_SALT',        '?M6=P )rhki+KW0.a)oonjoc,FclHHQ*hXj)w8?9pz4>Bzr:G4uMvafQE;9eIhl_' );
define( 'SECURE_AUTH_SALT', 'AH(;Yucf>>8>@{j-gXNqqyl:DP*~/{Hc~_aX!fZ{Tj!dxaoO-Vc(Qx%7 4xQ{rmz' );
define( 'LOGGED_IN_SALT',   'lfS9&s2$N[:L]/]r-HC<:m#I-*M#%u&1Zr!^tNl/1QE4cb=:dVFyHWqE|IaocbE%' );
define( 'NONCE_SALT',       'k*ue!,qORNOb_:<uN8A4gY|l1 [zlMkH;Y?JIhZ6&}Jc@KL_VSAm;4_uiB6h*K+Q' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once( ABSPATH . 'wp-settings.php' );
