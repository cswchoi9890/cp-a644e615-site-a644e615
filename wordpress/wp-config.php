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
define( 'AUTH_KEY',         'tpyjbusimbp2elsz8ky0nm6mtj5sp3kt480b7y9cmih2cltmsvio3uqg32gl12cj' );
define( 'SECURE_AUTH_KEY',  'uqm04obbka6xc2d7kvgxn1ra39qgxb6s7qmofcwrgmf43vul856d4ucd3ssijlfi' );
define( 'LOGGED_IN_KEY',    'q8feh9bt1v7gicuo6putv9aq5jejuiktp9m1uv3nucsbpk2jtd8w93vjd4dvazrl' );
define( 'NONCE_KEY',        'ig56v2xkxzdvl8rpjf6b6xk6j7adotb9uaydsrb35v2wwmjqhaqb09scy27wyjl0' );
define( 'AUTH_SALT',        'tjebhuycm42cyb11jhn7vfg55fvhupgunp0ayhfd8mo8scwt24cztopo54h07v3t' );
define( 'SECURE_AUTH_SALT', 'th7uh22wipqzxi2tdm6flhnrojvfruh948t6uhfb3k6uaqpdd866u3yh959zkv7p' );
define( 'LOGGED_IN_SALT',   'r0a7y18pqw68y4cxnppldmq7xmctfudqee70huddf8x3j5pwx1md07atwhxxxnnt' );
define( 'NONCE_SALT',       'mch3401ck709crnii32yihjdjkbeqzxeo6se9cv790dfpu7qjttrn7o68n5lfonu' );

// ── URL 설정 ──
define( 'WP_HOME',    'https://cp-a644e615-wp.choichoi3227.workers.dev' );
define( 'WP_SITEURL', 'https://cp-a644e615-wp.choichoi3227.workers.dev' );

// ── 기타 ──
define( 'WP_DEBUG',        false );
define( 'WP_CACHE',        true  );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'DISALLOW_FILE_EDIT',  false );

if ( ! defined( 'ABSPATH' ) ) {
  define( 'ABSPATH', __DIR__ . '/' );
}
require_once ABSPATH . 'wp-settings.php';
