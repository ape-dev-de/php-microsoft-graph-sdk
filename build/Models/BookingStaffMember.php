<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingStaffMember
 */
class BookingStaffMember
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** True means that if the staff member is a Microsoft 365 user, the Bookings API would verify the staff member's availability in their personal calendar in Microsoft 365, before making a booking. */
    public ?bool $availabilityIsAffectedByPersonalCalendar = null;

    /** The date, time, and time zone when the staff member was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $createdDateTime = null;

    /** The name of the staff member, as displayed to customers. Required. */
    public ?string $displayName = null;

    /** The email address of the staff member. This email address can be in the same Microsoft 365 tenant as the business, or in a different email domain. This email address can be used if the sendConfirmationsToOwner property is set to true in the scheduling policy of the business. Required. */
    public ?string $emailAddress = null;

    /** Indicates that a staff member is notified via email when a booking assigned to them is created or changed. The default value is true. */
    public ?bool $isEmailNotificationEnabled = null;

    /** The date, time, and time zone when the staff member was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. */
    public ?\DateTimeInterface $lastUpdatedDateTime = null;

    /**  */
    public ?BookingStaffMembershipStatus $membershipStatus = null;

    /**  */
    public ?BookingStaffRole $role = null;

    /** The time zone of the staff member. For a list of possible values, see dateTimeTimeZone. */
    public ?string $timeZone = null;

    /** True means the staff member's availability is as specified in the businessHours property of the business. False means the availability is determined by the staff member's workingHours property setting. */
    public ?bool $useBusinessHours = null;

    /** 
     * The range of hours each day of the week that the staff member is available for booking. By default, they're initialized to be the same as the businessHours property of the business.
     * @var BookingWorkHours[]
     */
    public array $workingHours = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['availabilityIsAffectedByPersonalCalendar'])) {
            $this->availabilityIsAffectedByPersonalCalendar = is_bool($data['availabilityIsAffectedByPersonalCalendar']) ? $data['availabilityIsAffectedByPersonalCalendar'] : (bool)$data['availabilityIsAffectedByPersonalCalendar'];
        }
        if (isset($data['createdDateTime'])) {
            $this->createdDateTime = is_string($data['createdDateTime']) ? new \DateTimeImmutable($data['createdDateTime']) : $data['createdDateTime'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['emailAddress'])) {
            $this->emailAddress = $data['emailAddress'];
        }
        if (isset($data['isEmailNotificationEnabled'])) {
            $this->isEmailNotificationEnabled = is_bool($data['isEmailNotificationEnabled']) ? $data['isEmailNotificationEnabled'] : (bool)$data['isEmailNotificationEnabled'];
        }
        if (isset($data['lastUpdatedDateTime'])) {
            $this->lastUpdatedDateTime = is_string($data['lastUpdatedDateTime']) ? new \DateTimeImmutable($data['lastUpdatedDateTime']) : $data['lastUpdatedDateTime'];
        }
        if (isset($data['membershipStatus'])) {
            $this->membershipStatus = is_array($data['membershipStatus']) ? new BookingStaffMembershipStatus($data['membershipStatus']) : $data['membershipStatus'];
        }
        if (isset($data['role'])) {
            $this->role = is_array($data['role']) ? new BookingStaffRole($data['role']) : $data['role'];
        }
        if (isset($data['timeZone'])) {
            $this->timeZone = $data['timeZone'];
        }
        if (isset($data['useBusinessHours'])) {
            $this->useBusinessHours = is_bool($data['useBusinessHours']) ? $data['useBusinessHours'] : (bool)$data['useBusinessHours'];
        }
        if (isset($data['workingHours'])) {
            $this->workingHours = $data['workingHours'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
