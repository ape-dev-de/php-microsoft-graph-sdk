<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ServicePrincipalRiskDetection resources
 *
 * Available select fields:
 */
class ServicePrincipalRiskDetectionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ServicePrincipalRiskDetection
     */

    /**
     * Select specific ServicePrincipalRiskDetection properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
