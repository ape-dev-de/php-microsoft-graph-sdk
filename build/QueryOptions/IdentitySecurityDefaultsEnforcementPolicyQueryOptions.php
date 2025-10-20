<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentitySecurityDefaultsEnforcementPolicy resources
 *
 * Available select fields:
 * - isEnabled
 */
class IdentitySecurityDefaultsEnforcementPolicyQueryOptions extends QueryOptions
{
    public const FIELD_IS_ENABLED = 'isEnabled';

    /**
     * Select specific IdentitySecurityDefaultsEnforcementPolicy properties
     * 
     * @param array<string> $select Use IdentitySecurityDefaultsEnforcementPolicyQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
