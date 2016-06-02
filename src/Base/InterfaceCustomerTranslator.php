<?php
/**
 * Created by PhpStorm.
 * User: mderoy
 * Date: 15-11-11
 * Time: 17:03
 */

namespace O2Web\BaseTranslator\Base;


interface InterfaceCustomerTranslator extends InterfaceTranslator
{
    public function getName();

    public function getERPNumber();

    public function getCustomerGroupId();
}