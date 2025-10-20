<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ThreatAssessmentResultCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ThreatAssessmentResultCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ThreatAssessmentResultCollectionResponse properties
     * 
     * @param array<string> $select Use ThreatAssessmentResultCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
