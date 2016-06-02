<?php

namespace O2Web\BaseTranslator\Base;

    /**
     * Created by PhpStorm.
     * User: mderoy
     * Date: 15-11-03
     * Time: 14:18
     */

/**
 * Interface InterfaceConnector
 */
interface InterfaceConnector
{
    public function getConnector();

    public function setUrl($value);

    public function getUrl();

    public function setUser($value);

    public function getUser();

    public function setPassword($value);

    public function getPassword();
}