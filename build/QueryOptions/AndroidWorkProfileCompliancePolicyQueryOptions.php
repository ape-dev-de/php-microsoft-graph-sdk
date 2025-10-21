<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AndroidWorkProfileCompliancePolicy resources
 *
 * Available select fields:
 */
class AndroidWorkProfileCompliancePolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AndroidWorkProfileCompliancePolicy
     */

    /**
     * Select specific AndroidWorkProfileCompliancePolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
