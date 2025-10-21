<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceConfigurationUserStatus resources
 *
 * Available select fields:
 */
class DeviceConfigurationUserStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceConfigurationUserStatus
     */

    /**
     * Select specific DeviceConfigurationUserStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
