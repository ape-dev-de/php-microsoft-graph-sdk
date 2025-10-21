<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceConfigurationState resources
 *
 * Available select fields:
 */
class DeviceConfigurationStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceConfigurationState
     */

    /**
     * Select specific DeviceConfigurationState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
