<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Versions.php
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

/**
 * Versions
 *
 * @copyright 2021 Pretzlaw (https://rmp-up.de)
 */
class Versions
{
    public static function getPhpUnitVersion(): int
    {
        if (class_exists(\PHPUnit\Framework\BaseTestListener::class)) {
        	return 6;
		}

        if (class_exists(\PHPUnit\Util\TestDox\TestResult::class)) {
        	return 7;
		}

        if (class_exists(\PHPUnit\Util\Configuration::class)) {
        	return 8;
		}

        if (class_exists(\PHPUnit\Util\Blacklist::class)) {
        	return 9;
		}

        return 0;
    }
}
