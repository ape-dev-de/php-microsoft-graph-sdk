<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrivilegedAccessGroupEligibilityScheduleInstance resources
 *
 * Available select fields:
 * - accessId
 * - eligibilityScheduleId
 * - groupId
 * - memberType
 * - principalId
 * - group
 * - principal
 */
class PrivilegedAccessGroupEligibilityScheduleInstanceQueryOptions extends QueryOptions
{
    public const FIELD_ACCESS_ID = 'accessId';
    public const FIELD_ELIGIBILITY_SCHEDULE_ID = 'eligibilityScheduleId';
    public const FIELD_GROUP_ID = 'groupId';
    public const FIELD_MEMBER_TYPE = 'memberType';
    public const FIELD_PRINCIPAL_ID = 'principalId';
    public const FIELD_GROUP = 'group';
    public const FIELD_PRINCIPAL = 'principal';

    /**
     * Select specific PrivilegedAccessGroupEligibilityScheduleInstance properties
     * 
     * @param array<string> $select Use PrivilegedAccessGroupEligibilityScheduleInstanceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
