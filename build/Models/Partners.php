<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Partners
 */
class Partners
{
    public function __construct(
        /** Represents billing details for billed and unbilled data. */
        public ?string $billing = null
    ) {}
}
