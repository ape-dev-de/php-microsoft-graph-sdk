<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrivilegedAccessGroupEligibilitySchedule resources
 *
 * Available select fields:
 * - accessId
 * - groupId
 * - memberType
 * - principalId
 * - group
 * - principal
 */
class PrivilegedAccessGroupEligibilityScheduleQueryOptions extends QueryOptions
{
    public const FIELD_ACCESS_ID = 'accessId';
    public const FIELD_GROUP_ID = 'groupId';
    public const FIELD_MEMBER_TYPE = 'memberType';
    public const FIELD_PRINCIPAL_ID = 'principalId';
    public const FIELD_GROUP = 'group';
    public const FIELD_PRINCIPAL = 'principal';

    /**
     * Select specific PrivilegedAccessGroupEligibilitySchedule properties
     * 
     * @param array<string> $select Use PrivilegedAccessGroupEligibilityScheduleQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
