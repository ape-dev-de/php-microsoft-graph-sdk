<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for GovernanceInsightCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class GovernanceInsightCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific GovernanceInsightCollectionResponse properties
     * 
     * @param array<string> $select Use GovernanceInsightCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
