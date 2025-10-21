<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IPv4Range
 */
class IPv4Range
{
    public function __construct(
        /** Lower address. */
        public ?string $lowerAddress = null,
        /** Upper address. */
        public ?string $upperAddress = null
    ) {}
}
