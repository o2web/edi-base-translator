<?php
/**
 * Created by PhpStorm.
 * User: mderoy
 * Date: 15-11-09
 * Time: 11:33
 */

namespace O2Web\BaseTranslator\Base;

interface InterfaceTranslator
{
    public function setSrc($value);

    public function getSrc();

    public function translate();
}