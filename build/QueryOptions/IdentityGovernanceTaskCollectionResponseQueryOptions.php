<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceTaskCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IdentityGovernanceTaskCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IdentityGovernanceTaskCollectionResponse properties
     * 
     * @param array<string> $select Use IdentityGovernanceTaskCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
