<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * TestCaseTrait.php
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

namespace RmpUp\PHPUnitCompat\Compat;

/**
 * TestCaseTrait
 *
 * @copyright 2021 Pretzlaw (https://rmp-up.de)
 */
trait TestCaseTrait
{
    protected $postTestValidations = [];

    protected function compatSetUp()
    {
        parent::setUp();
    }

    protected function compatTearDown()
    {
        parent::tearDown();
    }

    protected static function compatTearDownAfterClass()
    {
        parent::tearDownAfterClass();
    }

    protected static function compatSetUpBeforeClass()
    {
        parent::setUpBeforeClass();
    }
}