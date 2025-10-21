<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrintMargin
 */
class PrintMargin
{
    public function __construct(
        /** The margin in microns from the bottom edge. */
        public ?float $bottom = null,
        /** The margin in microns from the left edge. */
        public ?float $left = null,
        /** The margin in microns from the right edge. */
        public ?float $right = null,
        /** The margin in microns from the top edge. */
        public ?string $top = null
    ) {}
}
