<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Windows10MobileCompliancePolicy resources
 *
 * Available select fields:
 */
class Windows10MobileCompliancePolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Windows10MobileCompliancePolicy
     */

    /**
     * Select specific Windows10MobileCompliancePolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
