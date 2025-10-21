<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MultiTenantOrganizationMemberProcessingStatus resources
 *
 * Available select fields:
 */
class MultiTenantOrganizationMemberProcessingStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MultiTenantOrganizationMemberProcessingStatus
     */

    /**
     * Select specific MultiTenantOrganizationMemberProcessingStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
