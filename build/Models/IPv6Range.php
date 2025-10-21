<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IPv6Range
 */
class IPv6Range
{
    public function __construct(
        /** Lower address. */
        public ?string $lowerAddress = null,
        /** Upper address. */
        public ?string $upperAddress = null
    ) {}
}
