<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceConfiguration resources
 *
 * Available select fields:
 */
class DeviceConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceConfiguration
     */

    /**
     * Select specific DeviceConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
