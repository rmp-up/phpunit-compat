<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

declare(strict_types=1);

namespace RmpUp\PHPUnitCompat\Compat\v6\Assert;

trait MatchesRegularExpression
{
	/**
	 * @param string $pattern
	 * @param string $string
	 * @param string $message
	 *
	 * @deprecated Removed in phpUnit 10. Please use ::assertMatchesRegularExpression() instead.
	 */
	public static function assertRegExp($pattern, $string, $message = '')
	{
		parent::assertRegExp($pattern, $string, $message);
	}

	/**
	 * @param string $pattern
	 * @param string $string
	 * @param string $message
	 *
	 * @deprecated Removed in phpUnit 10. Please use ::assertDoesNotMatchRegularExpression() instead.
	 */
	public static function assertNotRegExp($pattern, $string, $message = '')
	{
		parent::assertNotRegExp($pattern, $string, $message);
	}

	public static function assertMatchesRegularExpression($pattern, $string, string $message = '')
	{
		parent::assertRegExp($pattern, $string, $message);
	}

	public static function assertDoesNotMatchRegularExpression(string $pattern, string $string, string $message = '')
	{
		self::assertNotRegExp($pattern, $string, $message);
	}
}
