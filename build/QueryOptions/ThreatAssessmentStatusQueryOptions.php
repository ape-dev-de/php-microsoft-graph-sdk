<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ThreatAssessmentStatus resources
 *
 * Available select fields:
 */
class ThreatAssessmentStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ThreatAssessmentStatus
     */

    /**
     * Select specific ThreatAssessmentStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
