<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IntegerRange
 */
class IntegerRange
{
    public function __construct(
        /** The inclusive upper bound of the integer range. */
        public ?float $end = null,
        /** The inclusive lower bound of the integer range. */
        public ?string $start = null
    ) {}
}
