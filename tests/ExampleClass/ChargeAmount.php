<?php

namespace Tests\ExampleClass;

use Majie\Converter\Converter;

class ChargeAmount extends Converter
{
    /** @var ?string currency */
    public ?string $currency = null;

    /** @var ?int amount */
    public ?int $amount = null;
}