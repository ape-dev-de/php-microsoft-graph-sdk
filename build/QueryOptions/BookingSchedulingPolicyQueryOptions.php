<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BookingSchedulingPolicy resources
 *
 * Available select fields:
 * - allowStaffSelection
 * - customAvailabilities
 * - generalAvailability
 * - isMeetingInviteToCustomersEnabled
 * - maximumAdvance
 * - minimumLeadTime
 * - sendConfirmationsToOwner
 * - timeSlotInterval
 */
class BookingSchedulingPolicyQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BookingSchedulingPolicy
     */
    public const FIELD_ALLOW_STAFF_SELECTION = 'allowStaffSelection';
    public const FIELD_CUSTOM_AVAILABILITIES = 'customAvailabilities';
    public const FIELD_GENERAL_AVAILABILITY = 'generalAvailability';
    public const FIELD_IS_MEETING_INVITE_TO_CUSTOMERS_ENABLED = 'isMeetingInviteToCustomersEnabled';
    public const FIELD_MAXIMUM_ADVANCE = 'maximumAdvance';
    public const FIELD_MINIMUM_LEAD_TIME = 'minimumLeadTime';
    public const FIELD_SEND_CONFIRMATIONS_TO_OWNER = 'sendConfirmationsToOwner';
    public const FIELD_TIME_SLOT_INTERVAL = 'timeSlotInterval';

    /**
     * Select specific BookingSchedulingPolicy properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
