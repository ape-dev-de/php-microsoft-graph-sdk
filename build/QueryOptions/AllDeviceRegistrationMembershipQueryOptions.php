<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AllDeviceRegistrationMembership resources
 *
 * Available select fields:
 */
class AllDeviceRegistrationMembershipQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AllDeviceRegistrationMembership
     */

    /**
     * Select specific AllDeviceRegistrationMembership properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
