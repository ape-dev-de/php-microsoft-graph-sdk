<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecureSignInSessionControl
 */
class SecureSignInSessionControl
{
    public function __construct(
        /** Specifies whether the session control is enabled. */
        public ?string $isEnabled = null
    ) {}
}
