<?php
namespace SQLBuilder;

class RawValue
{
    public $value;

    public function __construct($rawValue)
    {
        $this->value = $rawValue;
    }

    public function __toString() {
        return $this->value;
    }
}



