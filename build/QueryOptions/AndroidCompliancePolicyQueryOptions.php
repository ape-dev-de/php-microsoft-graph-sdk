<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidCompliancePolicy resources
 *
 * Available select fields:
 */
class AndroidCompliancePolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AndroidCompliancePolicy
     */

    /**
     * Select specific AndroidCompliancePolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
