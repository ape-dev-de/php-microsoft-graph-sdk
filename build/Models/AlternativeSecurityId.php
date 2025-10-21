<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AlternativeSecurityId
 */
class AlternativeSecurityId
{
    public function __construct(
        /** For internal use only. */
        public ?string $identityProvider = null,
        /** For internal use only. */
        public ?string $key = null,
        /** For internal use only. */
        public ?float $type = null
    ) {}
}
