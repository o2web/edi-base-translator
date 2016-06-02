<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace O2Web\BaseTranslator\Base;

/**
 * Description of InterfaceShipmentItemTranslator
 *
 * @author gloubier
 */
interface InterfaceShipmentItemTranslator extends InterfaceTranslator
{

    public function getProductId();

    public function getQtyOrdered();

    public function getQtyShipped();

    public function getStatus();

}
