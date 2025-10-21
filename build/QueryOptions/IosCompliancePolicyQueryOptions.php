<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IosCompliancePolicy resources
 *
 * Available select fields:
 */
class IosCompliancePolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IosCompliancePolicy
     */

    /**
     * Select specific IosCompliancePolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
