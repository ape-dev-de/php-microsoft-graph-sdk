<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceParameterCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IdentityGovernanceParameterCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IdentityGovernanceParameterCollectionResponse properties
     * 
     * @param array<string> $select Use IdentityGovernanceParameterCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
