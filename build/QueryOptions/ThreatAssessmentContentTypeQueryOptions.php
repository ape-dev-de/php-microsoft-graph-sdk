<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ThreatAssessmentContentType resources
 *
 * Available select fields:
 */
class ThreatAssessmentContentTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ThreatAssessmentContentType
     */

    /**
     * Select specific ThreatAssessmentContentType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
