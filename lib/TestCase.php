<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * TestClass.php
 *
 * LICENSE: This source file is created by the company around M. Pretzlaw
 * located in Germany also known as rmp-up. All its contents are proprietary
 * and under german copyright law. Consider this file as closed source and/or
 * without the permission to reuse or modify its contents.
 * This license is available through the world-wide-web at the following URI:
 * https://rmp-up.de/license-generic.txt . If you did not receive a copy
 * of the license and are unable to obtain it through the web, please send a
 * note to mail@rmp-up.de so we can mail you a copy.
 *
 * @package   phpunit-compat
 * @copyright 2021 Pretzlaw
 * @license   https://rmp-up.de/license-generic.txt
 */

declare(strict_types=1);

namespace RmpUp\PHPUnitCompat;

use DomainException;
use RmpUp\PHPUnitCompat\Compat\v6\TestCase as TestCaseV6;
use RmpUp\PHPUnitCompat\Compat\v7\TestCase as TestCaseV7;
use RmpUp\PHPUnitCompat\Compat\v8\TestCase as TestCaseV8;
use RmpUp\PHPUnitCompat\Compat\v9\TestCase as TestCaseV9;

switch (Versions::getPhpUnitVersion()) {
    case 6:
        class_alias(TestCaseV6::class, TestCase::class);
        break;
    case 7:
        class_alias(TestCaseV7::class, TestCase::class);
        break;
    case 8:
        class_alias(TestCaseV8::class, TestCase::class);
        break;
    case 9:
        class_alias(TestCaseV9::class, TestCase::class);
        break;

    default:
        throw new DomainException('Unsupported PHPUnit-Version');
}
