<?php

namespace O2Web\BaseTranslator\Base;

use O2Web\BaseTranslator\Base\InterfaceTranslator;

/**
 * Interface of order translator
 */
interface InterfaceOrderTranslator extends InterfaceTranslator
{

    public function getOrderId();

    public function getOrderNumber();

    public function getCustomerNumber();

    public function getBillingName();

    public function getBillingAddress();

    public function getBillingCity();

    public function getBillingState();

    public function getBillingPostCode();

    public function getBillingCountry();

    public function getBillingPhone();

    public function getBillingFax();

    public function getBillingEmail();

    public function getShippingName();

    public function getShippingAddress();

    public function getShippingCity();

    public function getShippingState();

    public function getShippingPostCode();

    public function getShippingCountry();

    public function getShippingPhone();

    public function getShippingFax();

    public function getShippingEmail();

    public function getShippingMethod();

    public function getShippingDesc();

    public function getOrderDate();

    public function getShippingDate();
}
