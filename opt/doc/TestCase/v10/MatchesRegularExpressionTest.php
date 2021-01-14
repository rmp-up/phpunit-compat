<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

declare(strict_types=1);

namespace TestCase\v10;

use RmpUp\PHPUnitCompat\TestCase;

/**
 * MatchesRegularExpressionTest
 */
class MatchesRegularExpressionTest extends TestCase
{
	public function testAssertMatchesRegularExpression()
	{
		static::assertMatchesRegularExpression('/wysiwyg/', 'wysiwyg');
	}

	public function testAssertDoesNotMatchRegularExpression()
	{
		static::assertDoesNotMatchRegularExpression('/wysiwyg/', uniqid('b', true));
	}
}
