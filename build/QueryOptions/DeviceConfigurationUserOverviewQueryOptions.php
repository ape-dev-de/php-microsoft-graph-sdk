<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceConfigurationUserOverview resources
 *
 * Available select fields:
 */
class DeviceConfigurationUserOverviewQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceConfigurationUserOverview
     */

    /**
     * Select specific DeviceConfigurationUserOverview properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
