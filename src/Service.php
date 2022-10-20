<?php

namespace iit\IMAP\Client;

/**
 * @author      Björn Heyser <info@bjoernheyser.de>
 */
class Service
{
    /**
     * @return Filesystem\Client
     */
    public function filesystem()
    {
        return new Connection($this->server);
    }
}