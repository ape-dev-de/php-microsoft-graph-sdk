<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentitySecurityDefaultsEnforcementPolicy resources
 *
 * Available select fields:
 */
class IdentitySecurityDefaultsEnforcementPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentitySecurityDefaultsEnforcementPolicy
     */

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
