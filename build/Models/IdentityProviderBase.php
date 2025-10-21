<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityProviderBase
 */
class IdentityProviderBase
{
    public function __construct(
        /** The display name of the identity provider. */
        public ?string $displayName = null
    ) {}
}
