<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ThreatExpectedAssessment resources
 *
 * Available select fields:
 */
class ThreatExpectedAssessmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ThreatExpectedAssessment
     */

    /**
     * Select specific ThreatExpectedAssessment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
