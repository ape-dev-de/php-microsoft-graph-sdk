<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ScopedRoleMembership resources
 *
 * Available select fields:
 * - administrativeUnitId
 * - roleId
 * - roleMemberInfo
 */
class ScopedRoleMembershipQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ScopedRoleMembership
     */
    public const FIELD_ADMINISTRATIVE_UNIT_ID = 'administrativeUnitId';
    public const FIELD_ROLE_ID = 'roleId';
    public const FIELD_ROLE_MEMBER_INFO = 'roleMemberInfo';

    /**
     * Select specific ScopedRoleMembership properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
