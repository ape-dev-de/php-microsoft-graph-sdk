<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ThreatAssessmentRequest resources
 *
 * Available select fields:
 */
class ThreatAssessmentRequestQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ThreatAssessmentRequest
     */

    /**
     * Select specific ThreatAssessmentRequest properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
