<?php

namespace Adagio\UnitKit;

abstract class AbstractValue implements Value
{
    /**
     *
     * @var double
     */
    protected $amount;

    /**
     *
     * @var string
     */
    protected $unit;

    /**
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->unit;
    }

    public function toUnit($unit)
    {
        return new self();
    }

    /**
     *
     * @return string
     */
    public function __toString()
    {
        return $this->format();
    }

    /**
     *
     * @see https://wiki.php.net/rfc/comparable
     *
     * @param ValueInterface $value2
     *
     * @return int
     */
    public function compareTo(ValueInterface $value)
    {
        if (!$this->getUnit()->equals($value->getUnit())) {
            return $this->compareTo($value->toUnit($this->getUnit()));
        }

        if ($this->getAmount() == $value->getAmount()) {
            return 0;
        }

        if ($this->getAmount() < $value->getAmount()) {
            return -1;
        }

        return 1;
    }

    /**
     *
     * @param ValueInterface $value
     *
     * @return boolean
     */
    public function equals(ValueInterface $value)
    {
        return 0 === $this->compareTo($value);
    }
}
