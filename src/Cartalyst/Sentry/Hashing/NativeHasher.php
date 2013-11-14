<?php namespace Cartalyst\Sentry\Hashing;
/**
 * Part of the Sentry package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.  It is also available at
 * the following URL: http://www.opensource.org/licenses/BSD-3-Clause
 *
 * @package    Sentry
 * @version    2.0.0
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011 - 2013, Cartalyst LLC
 * @link       http://cartalyst.com
 */

class NativeHasher implements HasherInterface {

	/**
	 * Hash string.
	 *
	 * @param  string $value
	 * @return string
	 * @throws \RuntimeException
	 */
	public function hash($value)
	{
		if (($hash = password_hash($value, PASSWORD_DEFAULT)) === false)
		{
			throw new \RuntimeException('Error hashing value. Check system compatibility with password_hash().');
		}

		return $hash;
	}

	/**
	 * Check string against hashed string.
	 *
	 * @param  string  $value
	 * @param  string  $hashedValue
	 * @return bool
	 */
	public function checkhash($value, $hashedValue)
	{
		return password_verify($value, $hashedValue);
	}

}
