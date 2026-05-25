<?php
/**
 * CloudPress WordPress 설정 (자동 생성)
 * DB: GitHub 레포 내 _db/wordpress.db (SQLite)
 */

// ── SQLite 연동 (sqlite-database-integration 플러그인) ──
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST',     'localhost' );
define( 'DB_CHARSET',  'utf8mb4' );
define( 'DB_COLLATE',  '' );
define( 'table_prefix', 'wp_' );

// SQLite 플러그인 설정 (DB_DIR/DB_FILE이 실제 사용되는 상수)
define( 'DB_DIR',  __DIR__ . '/../_db/' );
define( 'DB_FILE', 'wordpress.db' );

// ── 인증 키/솔트 ──
define( 'AUTH_KEY',         '70towsfkgxy3p7nf7put9w64y3i18yk3n45xkxb5auid74giyzbh4319ucbrfict' );
define( 'SECURE_AUTH_KEY',  '6n9h3pbcoonznikn0hjb0ycj7d2qnd4t84ukb70bc2gj4cjd4eva8hznncazx81c' );
define( 'LOGGED_IN_KEY',    'picy7qqz8lwsqziubahsfnunmn2ns7fk2ct0wsmyehstvg14oyhnv3fgpvmbu2q4' );
define( 'NONCE_KEY',        '3drzvp2icwgoinps1ituqvdq8mzf2i0scrgfz9byu3d4yucg5fsfo272xdkvhk9l' );
define( 'AUTH_SALT',        'vzf7vnsmpxro7zx4ntj8moewwnt4pph6ftsog31g1hdk4zbalp778itugmkintuk' );
define( 'SECURE_AUTH_SALT', '5gbvug5u1lhvc2kkj4cgd4784vveti1rxn78bjn9ibqrimp6k0jbqpdz0tezgzab' );
define( 'LOGGED_IN_SALT',   '6akvdfc4tiqcqi7734581usldyr53px5zgbhqgizuzmtgm0y4zqwo6ylsfb9n9gz' );
define( 'NONCE_SALT',       'g8sl08vfmbauli8iica4sqbzcclegrxqchu138sevig372qfj9y1nfp8xl954j0b' );

// ── URL 설정 ──
define( 'WP_HOME',    'https://cp-ac8451c3-wp.choichoi3227.workers.dev' );
define( 'WP_SITEURL', 'https://cp-ac8451c3-wp.choichoi3227.workers.dev' );

// ── 기타 ──
define( 'WP_DEBUG',        false );
define( 'WP_CACHE',        true  );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT',  false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
