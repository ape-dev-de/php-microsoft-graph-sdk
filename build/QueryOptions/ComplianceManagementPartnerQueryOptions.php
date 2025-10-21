<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ComplianceManagementPartner resources
 *
 * Available select fields:
 */
class ComplianceManagementPartnerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ComplianceManagementPartner
     */

    /**
     * Select specific ComplianceManagementPartner properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
