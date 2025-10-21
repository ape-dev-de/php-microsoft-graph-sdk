<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CustomAuthenticationExtension
 */
class CustomAuthenticationExtension
{
    public function __construct(
        /** The behaviour on error for the custom authentication extension. */
        public ?string $behaviorOnError = null
    ) {}
}
