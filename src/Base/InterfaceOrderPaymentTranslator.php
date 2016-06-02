<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace O2Web\BaseTranslator\Base;

/**
 * Description of InterfaceOrderPaymentTranslator
 *
 * @author gloubier
 */
interface InterfaceOrderPaymentTranslator extends InterfaceTranslator
{
    public function getPaymentType();

    public function getPaymentNumber();

    public function getPaymentDate();

    public function getPaymentAmount();
}
