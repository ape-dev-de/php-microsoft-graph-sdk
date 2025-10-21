<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ThreatAssessmentResult resources
 *
 * Available select fields:
 */
class ThreatAssessmentResultQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ThreatAssessmentResult
     */

    /**
     * Select specific ThreatAssessmentResult properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
