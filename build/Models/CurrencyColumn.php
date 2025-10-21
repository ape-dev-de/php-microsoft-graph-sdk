<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CurrencyColumn
 */
class CurrencyColumn
{
    public function __construct(
        /** Specifies the locale from which to infer the currency symbol. */
        public ?string $locale = null
    ) {}
}
