<?php

namespace O2Web\BaseTranslator\Base;

use O2Web\BaseTranslator\Base\InterfaceTranslator;

/**
 * Interface of order translator
 */
interface InterfaceOrderItemTranslator extends InterfaceTranslator
{

    public function getOrderId();

    public function getLineType();

    public function getLineNumber();

    public function getItemNumber();

    public function getItemDesc();

    public function getItemCategory();

    public function getQtyOrdered();

    public function getUnitPrice();

    public function getDiscountPercent();

    public function getTotalWithDiscount();

    public function getShippingDate();
}
