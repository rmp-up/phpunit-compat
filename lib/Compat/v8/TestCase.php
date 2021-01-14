<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * TestCase.php
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

namespace RmpUp\PHPUnitCompat\Compat\v8;

use PHPUnit\Util\InvalidArgumentHelper;
use RmpUp\PHPUnitCompat\Compat\TestCaseTrait;
use RmpUp\PHPUnitCompat\Compat\v7\Assert\MatchesRegularExpression;
use RmpUp\PHPUnitCompat\Compat\v8\Assert\ArraySubset;

/**
 * TestCase
 */
class TestCase extends \PHPUnit\Framework\TestCase
{
    use TestCaseTrait;

	/**
	 * Backward-compatibility
	 *
	 * Note: This may become heavily opinionated some day
	 * and very old methods may be dropped.
	 * Fingers crossed that we can keep BC up for all of them.
	 */
    use ArraySubset;

	/**
	 * Forward-compatibility
	 */
    use MatchesRegularExpression;

	/**
	 * @deprecated Please use ::compatSetUp() instead
	 */
    protected function setUp(): void
    {
        $this->compatSetUp();
    }

	/**
	 * @deprecated Please use ::compatSetUpBeforeClass() instead.
	 */
    public static function setUpBeforeClass(): void
    {
        static::compatSetUpBeforeClass();
    }

	/**
	 * @deprecated Please use ::compatTearDown() instead.
	 */
    protected function tearDown(): void
    {
        $this->compatTearDown();
    }

	/**
	 * @deprecated Please use compatTearDownAfterClass() instead.
	 */
    public static function tearDownAfterClass(): void
    {
        static::compatTearDownAfterClass();
    }
}
