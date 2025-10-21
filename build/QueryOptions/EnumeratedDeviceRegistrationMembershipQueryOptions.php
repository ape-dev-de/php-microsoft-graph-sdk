<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EnumeratedDeviceRegistrationMembership resources
 *
 * Available select fields:
 */
class EnumeratedDeviceRegistrationMembershipQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EnumeratedDeviceRegistrationMembership
     */

    /**
     * Select specific EnumeratedDeviceRegistrationMembership properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
