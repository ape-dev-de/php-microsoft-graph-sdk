<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceInstallState resources
 *
 * Available select fields:
 */
class DeviceInstallStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceInstallState
     */

    /**
     * Select specific DeviceInstallState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
