<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingStaffMember resources
 *
 * Available select fields:
 * - availabilityIsAffectedByPersonalCalendar
 * - createdDateTime
 * - displayName
 * - emailAddress
 * - isEmailNotificationEnabled
 * - lastUpdatedDateTime
 * - membershipStatus
 * - role
 * - timeZone
 * - useBusinessHours
 * - workingHours
 */
class BookingStaffMemberQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingStaffMember
     */
    public const FIELD_AVAILABILITY_IS_AFFECTED_BY_PERSONAL_CALENDAR = 'availabilityIsAffectedByPersonalCalendar';
    public const FIELD_CREATED_DATE_TIME = 'createdDateTime';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_EMAIL_ADDRESS = 'emailAddress';
    public const FIELD_IS_EMAIL_NOTIFICATION_ENABLED = 'isEmailNotificationEnabled';
    public const FIELD_LAST_UPDATED_DATE_TIME = 'lastUpdatedDateTime';
    public const FIELD_MEMBERSHIP_STATUS = 'membershipStatus';
    public const FIELD_ROLE = 'role';
    public const FIELD_TIME_ZONE = 'timeZone';
    public const FIELD_USE_BUSINESS_HOURS = 'useBusinessHours';
    public const FIELD_WORKING_HOURS = 'workingHours';

    /**
     * Select specific BookingStaffMember properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
