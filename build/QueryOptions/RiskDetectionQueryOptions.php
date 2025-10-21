<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RiskDetection resources
 *
 * Available select fields:
 */
class RiskDetectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RiskDetection
     */

    /**
     * Select specific RiskDetection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
