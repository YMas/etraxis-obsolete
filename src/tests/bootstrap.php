<?php

namespace Etraxis\Tests;

require_once '../engine/engine.php';

use Doctrine\Common\ClassLoader;

$testLoader = new ClassLoader("Etraxis\Tests", __DIR__);
$testLoader->register();
