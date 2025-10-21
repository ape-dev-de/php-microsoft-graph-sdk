<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SoftwareOathAuthenticationMethod
 */
class SoftwareOathAuthenticationMethod
{
    public function __construct(
        /** The secret key of the method. Always returns null. */
        public ?string $secretKey = null
    ) {}
}
