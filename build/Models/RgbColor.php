<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RgbColor
 */
class RgbColor
{
    public function __construct(
        /** Blue value */
        public ?float $b = null,
        /** Green value */
        public ?float $g = null,
        /** Color in RGB. */
        public ?string $r = null
    ) {}
}
