<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

namespace RmpUp\PHPUnitCompat\Compat\v8\Assert;

use ArrayAccess;
use InvalidArgumentException;
use PHPUnit\Framework\ExpectationFailedException;
use RmpUp\PHPUnitCompat\Compat\v8\Constraint\ArraySubset as ArraySubsetConstraint;

/**
 * ArraySubset
 */
trait ArraySubset
{
	/**
	 * Asserts that an array has a specified subset.
	 *
	 * @param array|ArrayAccess $subset
	 * @param array|ArrayAccess $array
	 *
	 * @throws ExpectationFailedException
	 * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
	 *
	 * @deprecated https://github.com/sebastianbergmann/phpunit/issues/3494
	 */
	public static function assertArraySubset($subset, $array, bool $checkForObjectIdentity = false, string $message = ''): void
	{
		if (!(\is_array($subset) || $subset instanceof ArrayAccess)) {
			throw new InvalidArgumentException(
				'array or ArrayAccess'
			);
		}

		if (!(\is_array($array) || $array instanceof ArrayAccess)) {
			throw new InvalidArgumentException(
				'array or ArrayAccess'
			);
		}

		$constraint = new ArraySubsetConstraint($subset, $checkForObjectIdentity);

		static::assertThat($array, $constraint, $message);
	}
}
