<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * CompatSwitchTest.php
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

namespace RmpUp\PHPUnitCompat\Test;

use RmpUp\PHPUnitCompat\TestCase;

/**
 * CompatSwitchTest
 *
 * @copyright  2021 Pretzlaw (https://rmp-up.de)
 */
class TearDownTest extends TestCase
{
    protected $testSubject;

    public static $tearDownAfterClass;

    public function testTearDownAfterClassWorked()
    {
        static::assertEquals(TearDownAfterClassTest::EXPECTED, static::$tearDownAfterClass);
    }

    /**
     * @dataProvider stubData
     */
    public function testCanTearDown($data)
    {
        static::assertNull($this->testSubject);

        $this->testSubject = $data;
    }

    protected function compatTearDown()
    {
        $this->testSubject = null;
    }

    /**
     * Just to make the test run twice
     * @return \int[][]
     */
    public function stubData()
    {
        return [[1], [2]];
    }
}