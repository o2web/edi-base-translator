<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

use O2Web\BaseTranslator\Base\InterfaceProductTranslator;

interface InterfaceConfigurableProductTranslator extends InterfaceProductTranslator
{
    public function getSimpleSkus(); //array of simple product sku
}