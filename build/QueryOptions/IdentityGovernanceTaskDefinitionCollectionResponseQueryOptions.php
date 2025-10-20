<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceTaskDefinitionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IdentityGovernanceTaskDefinitionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IdentityGovernanceTaskDefinitionCollectionResponse properties
     * 
     * @param array<string> $select Use IdentityGovernanceTaskDefinitionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
