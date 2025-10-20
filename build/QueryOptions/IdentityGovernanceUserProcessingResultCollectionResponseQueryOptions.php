<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernanceUserProcessingResultCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class IdentityGovernanceUserProcessingResultCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific IdentityGovernanceUserProcessingResultCollectionResponse properties
     * 
     * @param array<string> $select Use IdentityGovernanceUserProcessingResultCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
