<?php

namespace O2Web\BaseTranslator;

/**
 * Class InventoryControl
 * @package InventoryControl
 */
class InventoryControl
{
    private $locations;

    public function getLocations()
    {
        if (!is_array($this->locations)) {
            throw new InvalidArgumentException("Locations must be set", 1);
        }

        return $this->locations;
    }

    /**
     *
     * Locations content localisation informations
     *
     **/
    public function setLocations(array $value)
    {
        if (!is_array($value)) {
            throw new InvalidArgumentException("Locations must be an array", 1);
        }

        $this->locations = $value;
        return $this;
    }

    /**
     *
     * Calculate real availability of a product
     *
     **/
    public function getAvailability()
    {
        if (empty($this->getLocations())) {
            return 0;
        }

        $qty = 0;
        foreach ($this->getLocations() as $location) {
            $qty += (float) $location->QTYOFFSET;
        }

        return $qty;
    }

}