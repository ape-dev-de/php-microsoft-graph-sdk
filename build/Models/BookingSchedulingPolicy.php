<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingSchedulingPolicy
 */
class BookingSchedulingPolicy
{
    public function __construct(
        /** True to allow customers to choose a specific person for the booking. */
        public ?bool $allowStaffSelection = null,
        /** Custom availability of the service in a given time frame. */
        public array $customAvailabilities = [],
        /** General availability of the service defined by the scheduling policy. */
        public ?string $generalAvailability = null,
        /** Indicates whether the meeting invite is sent to the customers. The default value is false. */
        public ?bool $isMeetingInviteToCustomersEnabled = null,
        /** Maximum number of days in advance that a booking can be made. It follows the ISO 8601 format. */
        public ?string $maximumAdvance = null,
        /** The minimum amount of time before which bookings and cancellations must be made. It follows the ISO 8601 format. */
        public ?string $minimumLeadTime = null,
        /** True to notify the business via email when a booking is created or changed. Use the email address specified in the email property of the bookingBusiness entity for the business. */
        public ?bool $sendConfirmationsToOwner = null,
        /** Duration of each time slot, denoted in ISO 8601 format. */
        public ?string $timeSlotInterval = null
    ) {}
}
