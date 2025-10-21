<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ThreatAssessmentResultType resources
 *
 * Available select fields:
 */
class ThreatAssessmentResultTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ThreatAssessmentResultType
     */

    /**
     * Select specific ThreatAssessmentResultType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
