<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AlteredQueryToken
 */
class AlteredQueryToken
{
    public function __construct(
        /** Defines the length of a changed segment. */
        public ?float $length = null,
        /** Defines the offset of a changed segment. */
        public ?float $offset = null,
        /** Represents the corrected segment string. */
        public ?string $suggestion = null
    ) {}
}
