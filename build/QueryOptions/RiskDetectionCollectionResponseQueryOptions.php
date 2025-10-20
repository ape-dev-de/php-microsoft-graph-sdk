<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RiskDetectionCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class RiskDetectionCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific RiskDetectionCollectionResponse properties
     * 
     * @param array<string> $select Use RiskDetectionCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
