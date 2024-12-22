<?php

if(PHP_MAJOR_VERSION < 8) {
    die('Не то пальто!');
}

require_once dirname(__DIR__) . '/config/init.php';
echo 'Test';