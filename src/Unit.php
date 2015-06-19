<?php

namespace Adagio\UnitKit;

class Unit implements UnitInterface
{
    /**
     *
     * @var boolean
     */
    private $isDeprecated;

    /**
     *
     * @var string
     */
    private $defaultSymbol;

    /**
     *
     * @param string $defaultSymbol
     * @param boolean $isDeprecated
     */
    public function __construct($defaultSymbol, $isDeprecated = false)
    {
        $this->defaultSymbol = $defaultSymbol;
        $this->isDeprecated = $isDeprecated;
    }

    /**
     * Has this unit been deprecated?
     *
     * @return boolean
     */
    public function isDeprecated()
    {
        return $this->isDeprecated;
    }

    /**
     * Default symbol of the unit (ex.: ms for millisecond)
     *
     * @return string
     */
    public function __toString()
    {
        return $this->defaultSymbol;
    }
}
