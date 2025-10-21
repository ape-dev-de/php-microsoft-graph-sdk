<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDeviceRiskScore resources
 *
 * Available select fields:
 */
class SecurityDeviceRiskScoreQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDeviceRiskScore
     */

    /**
     * Select specific SecurityDeviceRiskScore properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
