<?php

namespace O2Web\BaseTranslator;

/**
 * Class Calculator
 * @package Calculator
 */
class Calculator {

    private $unitPrice;
    private $conversion;
    private $percent;
    private $realPrice;
    private $roundTo;

    public function getUnitPrice() {
        return $this->unitPrice;
    }

    public function setUnitPrice($value) {
        if (!is_float($value)) {
            throw new InvalidArgumentException("Unit price must be a float", 1);
        }

        $this->unitPrice = $value;
        return $this;
    }

    public function getConversion() {
        return $this->conversion;
    }

    public function setConversion($value) {
        if (!is_int($value)) {
            throw new InvalidArgumentException("Conversion must be a float", 1);
        }

        $this->conversion = $value;
        return $this;
    }

    public function getPercent() {
        return $this->percent;
    }

    public function setPercent($value) {
        if (!is_float($value)) {
            throw new InvalidArgumentException("Percent must be a float", 1);
        }

        $this->percent = $value;
        return $this;
    }

    public function getRealPrice() {
        return $this->realPrice;
    }

    public function setRealPrice($value) {
        if (!is_float($value)) {
            throw new InvalidArgumentException("Real price must be a float", 1);
        }

        $this->realPrice = $value;
        return $this;
    }

    public function getRoundTo() {
        return $this->roundTo;
    }

    public function setRoundTo($value) {
        if (!is_float($value)) {
            throw new InvalidArgumentException("Round to must be numeric", 1);
        }

        $this->roundTo = $value;
        return $this;
    }

    /**
     *
     * Calculate the real price with the unit price of a product and its percent
     *
     * */
    public function calculate() {
        if (!is_float($this->getUnitPrice()) || !is_float($this->getPercent())) {
            throw new InvalidArgumentException("Unit price and percentage have to be set.", 1);
        }

        $p = ($this->getPercent() > 0) ? (100 + $this->getPercent()) / 100 : 1;

        $this->setRealPrice($this->getUnitPrice() * $p);

        return $this->getRealPrice();
    }

    /**
     *
     * Round up real price with round to specified
     *
     */
    public function round() {
        if (!is_float($this->getRoundTo()) || !is_float($this->getRealPrice())) {
            throw new InvalidArgumentException("Real price must be calculated and round to must be set", 1);
        }

        $rp = $this->getRealPrice();

        if ($rp > 0) {
            $r = $this->getRoundTo();

            if ($r > 0) {
                $pow = pow(10, strlen(substr(strrchr((string) $r, "."), 1)));
                $this->setRealPrice((ceil($pow * $rp) + ceil($pow * $rp - ceil($pow * $rp))) / $pow);
            }
        }

        return $this->getRealPrice();
    }

}
