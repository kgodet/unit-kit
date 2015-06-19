<?php

namespace Adagio\UnitKit;

interface ValueInterface extends Comparable
{
    /**
     *
     * @return double
     */
    public function getAmount();

    /**
     *
     * @return string
     */
    public function getUnit();

    /**
     *
     * @param UnitInterface $unit
     */
    public function toUnit(UnitInterface $unit);

    /**
     *
     * @return string
     */
    public function __toString();

    /**
     *
     * @see https://wiki.php.net/rfc/comparable
     *
     * @param ValueInterface $value
     *
     * @return int
     */
    public function compareTo(ValueInterface $value);
}
