<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentitySecurityDefaultsEnforcementPolicyCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IdentitySecurityDefaultsEnforcementPolicyCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IdentitySecurityDefaultsEnforcementPolicyCollectionResponse properties
     * 
     * @param array<string> $select Use IdentitySecurityDefaultsEnforcementPolicyCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
