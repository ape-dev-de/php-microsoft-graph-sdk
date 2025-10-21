<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MacOSCompliancePolicy resources
 *
 * Available select fields:
 */
class MacOSCompliancePolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MacOSCompliancePolicy
     */

    /**
     * Select specific MacOSCompliancePolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
