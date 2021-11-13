<?php
const TPL_DIR = __DIR__ . '/../templates';
const INC_DIR = __DIR__ . '/../includes';

require_once INC_DIR . '/functions.php';

$PAGE = [
    'baseHref' => 'http://localhost/itc_skeleton/public',
    'siteTitle' => 'ITC Skeleton'
];

$CONFIG = [
    'database' => [
        'host' => 'localhost',
        'port' => 3307,
        'dbname' => 'itc_skeleton_app',
        'user' => 'itc_skeleton_app',
        'password' => 'asfd4lsidfud980fu4jlk3j59s8fjdsfalk'
    ]
];