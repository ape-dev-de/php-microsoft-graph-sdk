<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceRegistrationMembership resources
 *
 * Available select fields:
 */
class DeviceRegistrationMembershipQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceRegistrationMembership
     */

    /**
     * Select specific DeviceRegistrationMembership properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
