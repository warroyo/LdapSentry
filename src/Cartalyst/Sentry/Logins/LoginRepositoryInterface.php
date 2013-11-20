<?php namespace Cartalyst\Sentry\Logins;
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

use Cartalyst\Sentry\Users\UserRepositoryInterface;

interface LoginRepositoryInterface {

	/**
	 * Checks to see if the given user is logged into a session.
	 *
	 * @param  \Cartalyst\Sentry\Users\UserRepositoryInterface  $user
	 * @return bool
	 */
	public function check(UserRepositoryInterface $user);

	/**
	 * Adds a new user login to the current session and attaches the user.
	 *
	 * @param  \Cartalyst\Sentry\Users\UserRepositoryInterface  $user
	 * @return bool
	 * @todo   IS this where we would throw exceptions? (Not Activated etc)
	 */
	public function add(UserRepositoryInterface $user);

	/**
	 * Adds a new user login, to remember.
	 *
	 * @param  \Cartalyst\Sentry\Users\UserRepositoryInterface  $user
	 * @return bool
	 * @todo   IS this where we would throw exceptions? (Not Activated etc)
	 */
	public function addAndRemember(UserRepositoryInterface $user);

	/**
	 * Removes the login bound to the current session.
	 *
	 * @param  \Cartalyst\Sentry\Users\UserRepositoryInterface  $user
	 * @return bool
	 * @todo   IS this where we would throw exceptions? (Not Activated etc)
	 */
	public function remove(UserRepositoryInterface $user);

	/**
	 * Flushes all logins for the given user.
	 *
	 * @param  \Cartalyst\Sentry\Users\UserRepositoryInterface  $user
	 * @return bool
	 * @todo   IS this where we would throw exceptions? (Not Activated etc)
	 */
	public function flush(UserRepositoryInterface $user);

}
