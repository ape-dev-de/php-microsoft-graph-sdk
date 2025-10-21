<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for NoDeviceRegistrationMembership resources
 *
 * Available select fields:
 */
class NoDeviceRegistrationMembershipQueryOptions extends QueryOptions
{
    /**
     * Available select fields for NoDeviceRegistrationMembership
     */

    /**
     * Select specific NoDeviceRegistrationMembership properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
