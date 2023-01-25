<?php

declare(strict_types=1);

namespace Redrat\PhpClassVersioning;

if (PHP_VERSION_ID >= 90400) {
    require 'PatoNew.php';
} else {
    require 'PatoOld.php';
}