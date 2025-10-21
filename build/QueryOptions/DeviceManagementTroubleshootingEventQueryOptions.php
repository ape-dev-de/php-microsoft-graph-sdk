<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceManagementTroubleshootingEvent resources
 *
 * Available select fields:
 */
class DeviceManagementTroubleshootingEventQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceManagementTroubleshootingEvent
     */

    /**
     * Select specific DeviceManagementTroubleshootingEvent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
