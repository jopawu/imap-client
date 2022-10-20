<?php

namespace iit\IMAP\Client;

/**
 * @author      Björn Heyser <info@bjoernheyser.de>
 */
class Credentials
{
    /**
     * @var string
     */
    protected $hostname;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $password;

    /**
     * @param string $hostname
     * @param string $username
     * @param string $password
     */
    public function __construct(string $hostname, string $username, string $password)
    {
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getHostname() : string
    {
        return $this->hostname;
    }

    /**
     * @return string
     */
    public function getUsername() : string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }
}