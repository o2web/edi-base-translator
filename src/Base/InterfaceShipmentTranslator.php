<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace O2Web\BaseTranslator\Base;

/**
 * Description of InterfaceShipmentTranslator
 *
 * @author gloubier
 */
interface InterfaceShipmentTranslator extends InterfaceTranslator
{

    public function getShipmentNumber();

    public function getOrderTotal();

    public function getOrderNumber();

    public function getOrderDate();

    public function getCustomerId();

    public function getCompanyId();
}
