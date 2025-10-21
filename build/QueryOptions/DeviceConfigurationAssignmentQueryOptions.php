<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceConfigurationAssignment resources
 *
 * Available select fields:
 */
class DeviceConfigurationAssignmentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceConfigurationAssignment
     */

    /**
     * Select specific DeviceConfigurationAssignment properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
