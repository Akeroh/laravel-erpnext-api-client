<?php

namespace Hammock\LaravelERPNext\Configuration;

use Hammock\LaravelERPNext\Exception\InvalidCredentialsException;
use Illuminate\Support\Facades\Config;

/**
 * Class LaravelConfiguration
 *
 * @package Hammock\LaravelERPNext\Configuration
 */
class LaravelConfiguration extends AbstractConfiguration
{
    /**
     * @throws InvalidCredentialsException
     */
    public function __construct()
    {
        $domain = Config::get('erpnext.domain');
        $user = Config::get('erpnext.username');
        $password = Config::get('erpnext.password');
        $cfAccessId = Config::get('erpnext.cfAccessId');
        $cfAccessSecret = Config::get('erpnext.cfAccessSecret');

        if (!\is_string($domain)) {
            throw new InvalidCredentialsException('Domain address must be provided.');
        }

        if (!\is_string($user)) {
            throw new InvalidCredentialsException('Username must be provided.');
        }

        if (!\is_string($password)) {
            throw new InvalidCredentialsException('Password must be provided.');
        }

        if (!\is_string($cfAccessId)) {
            throw new InvalidCredentialsException('cfAccessId must be provided.');
        }

        if (!\is_string($cfAccessSecret)) {
            throw new InvalidCredentialsException('cfAccessSecret must be provided.');
        }

        $this->domain = $domain;
        $this->user = $user;
        $this->password = $password;
        $this->cfAccessId = $cfAccessId;
        $this->cfAccessSecret = $cfAccessSecret;
    }
}
