<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceTaskProcessingResultCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IdentityGovernanceTaskProcessingResultCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IdentityGovernanceTaskProcessingResultCollectionResponse properties
     * 
     * @param array<string> $select Use IdentityGovernanceTaskProcessingResultCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
