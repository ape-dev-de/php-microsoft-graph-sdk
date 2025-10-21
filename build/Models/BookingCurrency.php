<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingCurrency
 */
class BookingCurrency
{
    public function __construct(
        /** The currency symbol. For example, the currency symbol for the US dollar and for the Australian dollar is $. */
        public ?string $symbol = null
    ) {}
}
