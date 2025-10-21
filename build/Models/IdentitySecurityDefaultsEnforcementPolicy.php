<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentitySecurityDefaultsEnforcementPolicy
 */
class IdentitySecurityDefaultsEnforcementPolicy
{
    public function __construct(
        /** If set to true, Microsoft Entra security defaults are enabled for the tenant. */
        public ?string $isEnabled = null
    ) {}
}
