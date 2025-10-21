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
    /**
     * Available select fields for IdentitySecurityDefaultsEnforcementPolicy
     */
    public const FIELD_IS_ENABLED = 'isEnabled';

    /**
     * Select specific IdentitySecurityDefaultsEnforcementPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
