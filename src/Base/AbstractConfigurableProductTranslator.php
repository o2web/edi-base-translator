<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use O2Web\BaseTranslator\BaseAbstractProductTranslator;

abstract class AbstractConfigurableProductTranslator extends AbstractProductTranslator implements InterfaceConfigurableProductTranslator
{
    public function translate()
    {
        $array = parent::translate();
    }
}
