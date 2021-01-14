<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

declare(strict_types=1);

namespace RmpUp\PHPUnitCompat\Compat\v7\Assert;

trait MatchesRegularExpression
{
	/**
	 * @param string $pattern
	 * @param string $string
	 * @param string $message
	 *
	 * @deprecated Removed in phpUnit 10. Please use ::assertMatchesRegularExpression() instead
	 */
	public static function assertRegExp(string $pattern, string $string, $message = ''): void
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
	public static function assertNotRegExp(string $pattern, string $string, $message = ''): void
	{
		parent::assertNotRegExp($pattern, $string, $message);
	}

	public static function assertMatchesRegularExpression(string $pattern, string $string, string $message = ''): void
	{
		parent::assertRegExp($pattern, $string, $message);
	}

	public static function assertDoesNotMatchRegularExpression(string $pattern, string $string, string $message = ''): void
	{
		self::assertNotRegExp($pattern, $string, $message);
	}
}
