<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RiskDetectionTimingType resources
 *
 * Available select fields:
 */
class RiskDetectionTimingTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RiskDetectionTimingType
     */

    /**
     * Select specific RiskDetectionTimingType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
