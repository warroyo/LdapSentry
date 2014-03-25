# LdapSentry

This is a forked version of the sentry authentication package to allow for ldap authentication. This is beta and may have minor issues. it is also meant to work specifically using the sAMAAccountName as the user.

Sentry is a PHP 5.3+ fully-featured authentication & authorization system. It also provides additional features such as user groups and additional security features.

Sentry is a framework agnostic set of interfaces with default implementations, though you can substitute any implementations you see fit.

[![Build Status](https://travis-ci.org/cartalyst/sentry.png?branch=master)](https://travis-ci.org/cartalyst/sentry)

![Bitdeli](https://d2weczhvl823v0.cloudfront.net/cartalyst/sentry/trend.png)

### Features

It also provides additional features such as user groups and additional security features:
- Ldap login


- Configurable authentication (can use any type of authentication required, such as username or email)
- Authorization
- Activation of user *(optional)*
- Groups and group permissions
- "Remember me"
- User suspension
- Login throttling *(optional)*
- User banning
- Password resetting
- User data
- Interface driven - switch out your own implementations at will

### Installation

Installation of LdapSentry is very easy. Add:

    "repositories": [
    {
        "type":"git",
        "url":"https://github.com/warroyo/LdapSentry.git"
    }]

to your composer.json file then follow one of the following guides to get SentryLdap working with your favorite framework or on it's own:


1. Install in [Laravel 4](http://docs.cartalyst.com/sentry-2/installation/laravel-4)
2. Install in [FuelPHP 1](http://docs.cartalyst.com/sentry-2/installation/fuelphp-1)
3. Install in [CodeIgniter 3](http://docs.cartalyst.com/sentry-2/installation/codeigniter-3)
4. Use [natively (through composer)](http://docs.cartalyst.com/sentry-2/installation/composer)

### Using

This library is still beta for ldap functions. You have to change this lines in your config file.

	 'ldap' => array(
                'binduser'     =>  'user',
                'bindpass'     =>  'password',
                'server'        => 'ldap://your.ldap.server',
                'port'          => '',
                'searchdn'      =>  array('Guests' => ''),
        ),


After this settings you have to follow sentry orginal document file. You can use ldap login like this;

     $user = Sentry::authenticateWithLdap($credentials, false);
or

      Sentry::authenticateWithLdapAndRemember($credentials);

### Upgrading
this works with current version of sentry, I will work on updating.

### Support

We offer support through [our help forums](http://help.cartalyst.com), on [IRC at #cartalyst](http://webchat.freenode.net/?channels=cartalyst) and through GitHub issues (bugs only).

If you like Sentry, consider [subscribing](http://www.cartalyst.com/pricing) to our [Arsenal](http://www.cartalyst.com/arsenal). It allows us to keep creating awesome software and afford to eat at night. Subscribers also get **priority support** with all of our packages, both free and subscriber-only.

