<?php

/**
 * Created by PhpStorm.
 * User: mderoy
 * Date: 15-11-03
 * Time: 14:19
 */

namespace Base;

use Exception;
use InvalidArgumentException;

/**
 * Class AbstractConnector
 */
class AbstractConnector implements InterfaceConnector
{

    public $connector;
    public $url;
    public $port = 22;
    public $user;
    public $password;

    /**
     * @return mixed
     * @throws Exception
     */
    public function getConnector()
    {
        if (empty($this->connector)) {
            throw new Exception('Connector must be set');
        }

        return $this->connector;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {

        if (empty($this->url)) {
            throw new InvalidArgumentException("Url must be set", 1);
        }

        return $this->url;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setUrl($value)
    {
        if (!is_string($value)) {
            throw new InvalidArgumentException("Url must be a string", 1);
        }

        $this->url = $value; //Set url
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param int $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    public function login()
    {
    }
}