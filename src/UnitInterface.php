<?php

namespace Adagio\UnitKit;

interface UnitInterface
{
    /**
     *
     * @return QuantityInterface
     */
    public function getQuantity();

    /**
     * Has this unit been deprecated?
     *
     * @return boolean
     */
    public function isDeprecated();

    /**
     * Are they the same unit?
     *
     * @param UnitInterface $unit
     *
     * @return boolean
     */
    public function equals(UnitInterface $unit);

    /**
     * Default representation of the unit (ex.: ms for millisecond)
     *
     * @return string
     */
    public function __toString();
}
