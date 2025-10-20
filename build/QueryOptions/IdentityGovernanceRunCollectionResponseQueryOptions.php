<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceRunCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IdentityGovernanceRunCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IdentityGovernanceRunCollectionResponse properties
     * 
     * @param array<string> $select Use IdentityGovernanceRunCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
