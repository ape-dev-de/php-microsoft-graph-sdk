<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementPartner resources
 *
 * Available select fields:
 */
class DeviceManagementPartnerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceManagementPartner
     */

    /**
     * Select specific DeviceManagementPartner properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
