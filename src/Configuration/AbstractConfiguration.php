<?php

namespace Hammock\LaravelERPNext\Configuration;

/**
 * Class AbstractConfiguration
 *
 * @package Hammock\LaravelERPNext\Configuration
 */
abstract class AbstractConfiguration implements ConfigurationInterface
{
    /**
     * @var string
     */
    protected $domain;

    /**
     * @var string
     */
    protected $user;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var string
     */
    protected $cfAccessId;

    /**
     * @var string
     */
    protected $cfAccessSecret;

    /**
     * @return string
     */
    public function getDomain(): string
    {
        return $this->domain;
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getCfAccessId(): string
    {
        return $this->cfAccessId;
    }

    /**
     * @return string
     */
    public function getCfAccessSecret(): string
    {
        return $this->cfAccessSecret;
    }
}
