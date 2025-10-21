<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityIndicator
 */
class SecurityIndicator
{
    public function __construct(
        /**  */
        public ?string $source = null,
        /**  */
        public ?string $artifact = null
    ) {}
}
