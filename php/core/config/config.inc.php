<?php
/**
 *.MODX Configuration file
 */
$database_type = 'mysql';
$database_server = $_ENV['OPENSHIFT_MYSQL_DB_HOST'].':'.$_ENV['OPENSHIFT_MYSQL_DB_PORT'];
$database_user = $_ENV['OPENSHIFT_MYSQL_DB_USERNAME'];
$database_password = $_ENV['OPENSHIFT_MYSQL_DB_PASSWORD'];
$database_connection_charset = 'utf8';
$dbase = $_ENV['OPENSHIFT_APP_NAME'];
$table_prefix = 'modx_';
$database_dsn = 'mysql:host='.$_ENV['OPENSHIFT_MYSQL_DB_HOST'].':'.$_ENV['OPENSHIFT_MYSQL_DB_PORT'].';dbname='.$_ENV['OPENSHIFT_APP_NAME'].';charset=utf8';
$config_options = array (
);
$driver_options = array (
);

$lastInstallTime = 1394476496;

$site_id = 'modx531e05d0b05326.54055649';
$site_sessionname = 'SN531e0552addb8';
$https_port = '443';
$uuid = '634f542c-2349-4bf5-a66a-7356666870b4';

if (!defined('MODX_CORE_PATH')) {
  $modx_core_path= $_ENV['OPENSHIFT_REPO_DIR'].'php/core/';
  define('MODX_CORE_PATH', $modx_core_path);
}
if (!defined('MODX_PROCESSORS_PATH')) {
  $modx_processors_path= $_ENV['OPENSHIFT_REPO_DIR'].'php/core/model/modx/processors/';
  define('MODX_PROCESSORS_PATH', $modx_processors_path);
}
if (!defined('MODX_CONNECTORS_PATH')) {
  $modx_connectors_path= $_ENV['OPENSHIFT_REPO_DIR'].'php/connectors/';
  $modx_connectors_url= '/connectors/';
  define('MODX_CONNECTORS_PATH', $modx_connectors_path);
  define('MODX_CONNECTORS_URL', $modx_connectors_url);
}
if (!defined('MODX_MANAGER_PATH')) {
  $modx_manager_path= $_ENV['OPENSHIFT_REPO_DIR'].'php/manager/';
  $modx_manager_url= '/manager/';
  define('MODX_MANAGER_PATH', $modx_manager_path);
  define('MODX_MANAGER_URL', $modx_manager_url);
}
if (!defined('MODX_BASE_PATH')) {
  $modx_base_path= $_ENV['OPENSHIFT_REPO_DIR'].'php/';
  $modx_base_url= '/';
  define('MODX_BASE_PATH', $modx_base_path);
  define('MODX_BASE_URL', $modx_base_url);
}
if(defined('PHP_SAPI') && (PHP_SAPI == "cli" || PHP_SAPI == "embed")) {
  $isSecureRequest = false;
} else {
  $isSecureRequest = ((isset ($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') || $_SERVER['SERVER_PORT'] == $https_port);
}
if (!defined('MODX_URL_SCHEME')) {
  $url_scheme=$isSecureRequest ? 'https://' : 'http://';
  define('MODX_URL_SCHEME', $url_scheme);
}
if (!defined('MODX_HTTP_HOST')) {
  if(defined('PHP_SAPI') && (PHP_SAPI == "cli" || PHP_SAPI == "embed")) {
    $http_host=$_ENV['OPENSHIFT_APP_DNS'];
    define('MODX_HTTP_HOST', $http_host);
  } else {
    $http_host= $_SERVER['HTTP_HOST'];
    if ($_SERVER['SERVER_PORT'] != 80) {
      $http_host= str_replace(':' . $_SERVER['SERVER_PORT'], '', $http_host); // remove port from HTTP_HOST
    }
    $http_host .= ($_SERVER['SERVER_PORT'] == 80 || $isSecureRequest) ? '' : ':' . $_SERVER['SERVER_PORT'];
    define('MODX_HTTP_HOST', $http_host);
  }
}
if (!defined('MODX_SITE_URL')) {
  $site_url= $url_scheme . $http_host . MODX_BASE_URL;
  define('MODX_SITE_URL', $site_url);
}
if (!defined('MODX_ASSETS_PATH')) {
  $modx_assets_path= $_ENV['OPENSHIFT_REPO_DIR'].'php/assets/';
  $modx_assets_url= '/assets/';
  define('MODX_ASSETS_PATH', $modx_assets_path);
  define('MODX_ASSETS_URL', $modx_assets_url);
}
if (!defined('MODX_LOG_LEVEL_FATAL')) {
  define('MODX_LOG_LEVEL_FATAL', 0);
  define('MODX_LOG_LEVEL_ERROR', 1);
  define('MODX_LOG_LEVEL_WARN', 2);
  define('MODX_LOG_LEVEL_INFO', 3);
  define('MODX_LOG_LEVEL_DEBUG', 4);
}
if (!defined('MODX_CACHE_DISABLED')) {
  $modx_cache_disabled= false;
  define('MODX_CACHE_DISABLED', $modx_cache_disabled);
}
