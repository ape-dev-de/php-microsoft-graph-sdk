<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementPartnerTenantState resources
 *
 * Available select fields:
 */
class DeviceManagementPartnerTenantStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceManagementPartnerTenantState
     */

    /**
     * Select specific DeviceManagementPartnerTenantState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
