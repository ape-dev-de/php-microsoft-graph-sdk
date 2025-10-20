<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AverageComparativeScoreCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class AverageComparativeScoreCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific AverageComparativeScoreCollectionResponse properties
     * 
     * @param array<string> $select Use AverageComparativeScoreCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
