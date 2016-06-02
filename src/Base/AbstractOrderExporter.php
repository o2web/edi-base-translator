<?php

namespace O2Web\BaseTranslator\Base;

/**
 * Order exporter
 */
class AbstractOrderExporter
{

    protected $model;
    protected $loadOrder;

    public function __construct(Mage_Core_Model_Abstract $model, callable $loadOrder)
    {
        $this->model = $model;
        $this->loadOrder = $loadOrder;
    }

    public function export()
    {

    }

}
