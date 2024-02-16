<?php

declare(strict_types=1);
define('PULEENO_CMS_START', microtime(true));

use Jackal\Bootstrap;

require __DIR__ . '/../app/bootstrap.php';
$bootstrap = Bootstrap::getInstance();
$bootstrap->boot();
