<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResultTemplate
 */
class ResultTemplate
{
    public function __construct(
        /** JSON schema of the result template. */
        public ?string $body = null,
        /** Name of the result template. */
        public ?string $displayName = null
    ) {}
}
