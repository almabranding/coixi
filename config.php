<?php
// Always provide a TRAILING SLASH (/) AFTER A PATH
define('LIBS', 'libs/');
define('TEMPDIR', '/');
define('URL', 'http://'.$_SERVER['HTTP_HOST'].TEMPDIR);
define('ROOT', $_SERVER['DOCUMENT_ROOT'].TEMPDIR);
define('CACHE', ROOT.'cache/');
define('UPLOAD', URL.'uploads/');
define('VIDEOS', UPLOAD.'videos/');
define('IMAGES', UPLOAD.'images/');

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'elmeucoixi');
define('DB_USER', 'root');
define('DB_PASS', 'root'); 

// The sitewide hashkey, do not change this because its used for passwords!
// This is for other hash keys... Not sure yet
define('HASH_GENERAL_KEY', 'MixitUp200');

// This is for database passwords only
define('HASH_PASSWORD_KEY', 'catsFLYhigh2000miles');

