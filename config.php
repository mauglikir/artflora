<?php
// HTTP
define('HTTP_SERVER', 'http://178.62.191.143:3003/');

// HTTPS
define('HTTPS_SERVER', 'http://178.62.191.143:3003/');

// DIR
define('DIR_APPLICATION', '/opt/artflora-php/artflora/catalog/');
define('DIR_SYSTEM', '/opt/artflora-php/artflora/system/');
define('DIR_IMAGE', '/opt/artflora-php/artflora/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'artfloraphp');
define('DB_PASSWORD', 'password');
define('DB_DATABASE', 'artfloraphpp');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');