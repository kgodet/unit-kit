<?php

namespace Adagio\UnitKit;

interface QuantityInterface
{
    /**
     * Returns the name of the quantity
     *
     * @return string
     */
    public function getName();

    /**
     * Returns the dimension symbol for the quantity.
     *
     * The quantity can be dimensionless, like an angle. This should return false
     * in this case.
     *
     * @return string|false
     */
    public function getSymbol();

    /**
     * Returns the usual symbols used to refer to the quantity.
     *
     * The list may be empty, or contain many symbols.
     *
     * @return array
     */
    public function getAlternateSymbols();

    /**
     * Is the quantity one of the 7 base quantities defined in the IS?
     *
     * @return boolean
     */
    public function isBaseQuantity();

    /**
     * Returns the default unit used to express the amount of quantity.
     *
     * @return UnitInterface
     */
    public function getDefaultUnit();

    /**
     * Are they the same unit?
     *
     * @param QuantityInterface $quantity
     *
     * @return boolean
     */
    public function equals(QuantityInterface $quantity);
}
