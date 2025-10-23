<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingSchedulingPolicy
 */
class BookingSchedulingPolicy
{
    /** True to allow customers to choose a specific person for the booking. */
    public ?bool $allowStaffSelection = null;

    /** 
     * Custom availability of the service in a given time frame.
     * @var BookingsAvailabilityWindow[]
     */
    public array $customAvailabilities = [];

    /** 
     * General availability of the service defined by the scheduling policy.
     * @var BookingsAvailability|\stdClass|null
     */
    public mixed $generalAvailability = null;

    /** Indicates whether the meeting invite is sent to the customers. The default value is false. */
    public ?bool $isMeetingInviteToCustomersEnabled = null;

    /** Maximum number of days in advance that a booking can be made. It follows the ISO 8601 format. */
    public ?string $maximumAdvance = null;

    /** The minimum amount of time before which bookings and cancellations must be made. It follows the ISO 8601 format. */
    public ?string $minimumLeadTime = null;

    /** True to notify the business via email when a booking is created or changed. Use the email address specified in the email property of the bookingBusiness entity for the business. */
    public ?bool $sendConfirmationsToOwner = null;

    /** Duration of each time slot, denoted in ISO 8601 format. */
    public ?string $timeSlotInterval = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['allowStaffSelection'])) {
            $this->allowStaffSelection = $data['allowStaffSelection'];
        }
        if (isset($data['customAvailabilities'])) {
            $this->customAvailabilities = $data['customAvailabilities'];
        }
        if (isset($data['generalAvailability'])) {
            $this->generalAvailability = $data['generalAvailability'];
        }
        if (isset($data['isMeetingInviteToCustomersEnabled'])) {
            $this->isMeetingInviteToCustomersEnabled = $data['isMeetingInviteToCustomersEnabled'];
        }
        if (isset($data['maximumAdvance'])) {
            $this->maximumAdvance = $data['maximumAdvance'];
        }
        if (isset($data['minimumLeadTime'])) {
            $this->minimumLeadTime = $data['minimumLeadTime'];
        }
        if (isset($data['sendConfirmationsToOwner'])) {
            $this->sendConfirmationsToOwner = $data['sendConfirmationsToOwner'];
        }
        if (isset($data['timeSlotInterval'])) {
            $this->timeSlotInterval = $data['timeSlotInterval'];
        }
    }
}
