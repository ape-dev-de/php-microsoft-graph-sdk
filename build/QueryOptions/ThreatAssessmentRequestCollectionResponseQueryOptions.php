<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ThreatAssessmentRequestCollectionResponse resources
 *
 * Available select fields:
 * - value
 */
class ThreatAssessmentRequestCollectionResponseQueryOptions extends QueryOptions
{
    public const FIELD_VALUE = 'value';

    /**
     * Select specific ThreatAssessmentRequestCollectionResponse properties
     * 
     * @param array<string> $select Use ThreatAssessmentRequestCollectionResponseQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
