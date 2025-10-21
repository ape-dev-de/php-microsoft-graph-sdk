<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceRegistrationPolicy resources
 *
 * Available select fields:
 */
class DeviceRegistrationPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceRegistrationPolicy
     */

    /**
     * Select specific DeviceRegistrationPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
