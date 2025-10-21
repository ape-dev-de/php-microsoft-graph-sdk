<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceRegistrationState resources
 *
 * Available select fields:
 */
class DeviceRegistrationStateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceRegistrationState
     */

    /**
     * Select specific DeviceRegistrationState properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
