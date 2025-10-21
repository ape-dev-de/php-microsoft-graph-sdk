<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementPartnerAppType resources
 *
 * Available select fields:
 */
class DeviceManagementPartnerAppTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceManagementPartnerAppType
     */

    /**
     * Select specific DeviceManagementPartnerAppType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
