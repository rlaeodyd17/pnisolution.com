<?php if(!defined("__XE__")) exit();
$db_info = (object)array (
  'master_db' => 
  array (
    'db_type' => 'mysqli_innodb',
    'db_port' => '3306',
    'db_hostname' => '127.0.0.1',
    'db_userid' => 'root',
    'db_password' => '010@6473448',
    'db_database' => 'pni_xe',
    'db_table_prefix' => 'xe_',
  ),
  'slave_db' => 
  array (
    0 => 
    array (
      'db_type' => 'mysqli_innodb',
      'db_port' => '3306',
      'db_hostname' => '127.0.0.1',
      'db_userid' => 'root',
      'db_password' => '010@6473448',
      'db_database' => 'pni_xe',
      'db_table_prefix' => 'xe_',
    ),
  ),
  'default_url' => 'http://pnisolution.com/xe/',
  'use_mobile_view' => 'N',
  'use_rewrite' => 'N',
  'time_zone' => '+0900',
  'use_prepared_statements' => 'Y',
  'qmail_compatibility' => 'N',
  'use_db_session' => 'N',
  'use_ssl' => 'none',
  'sitelock_whitelist' => 
  array (
    0 => '127.0.0.1',
  ),
  'use_sso' => 'N',
  'use_html5' => 'N',
  'admin_ip_list' => NULL,
);