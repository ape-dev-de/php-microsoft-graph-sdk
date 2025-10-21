<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SizeRange
 */
class SizeRange
{
    public function __construct(
        /** The maximum size (in kilobytes) that an incoming message must have in order for a condition or exception to apply. */
        public ?float $maximumSize = null,
        /** The minimum size (in kilobytes) that an incoming message must have in order for a condition or exception to apply. */
        public ?string $minimumSize = null
    ) {}
}
