<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EnumeratedDeviceRegistrationMembership resources
 *
 * Available select fields:
 * - groups
 * - users
 */
class EnumeratedDeviceRegistrationMembershipQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EnumeratedDeviceRegistrationMembership
     */
    public const FIELD_GROUPS = 'groups';
    public const FIELD_USERS = 'users';

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
