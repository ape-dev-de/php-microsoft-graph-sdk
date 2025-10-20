<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingStaffMember
 */
class BookingStaffMember
{
    /**
     * True means that if the staff member is a Microsoft 365 user, the Bookings API would verify the staff member''s availability in their personal calendar in Microsoft 365, before making a booking.
     */
    private ?bool $availabilityIsAffectedByPersonalCalendar;

    /**
     * The date, time, and time zone when the staff member was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * The name of the staff member, as displayed to customers. Required.
     */
    private ?string $displayName;

    /**
     * The email address of the staff member. This email address can be in the same Microsoft 365 tenant as the business, or in a different email domain. This email address can be used if the sendConfirmationsToOwner property is set to true in the scheduling policy of the business. Required.
     */
    private ?string $emailAddress;

    /**
     * Indicates that a staff member is notified via email when a booking assigned to them is created or changed. The default value is true.
     */
    private ?bool $isEmailNotificationEnabled;

    /**
     * The date, time, and time zone when the staff member was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $lastUpdatedDateTime;

    /**
     */
    private ?string $membershipStatus;

    /**
     */
    private ?string $role;

    /**
     * The time zone of the staff member. For a list of possible values, see dateTimeTimeZone.
     */
    private ?string $timeZone;

    /**
     * True means the staff member's availability is as specified in the businessHours property of the business. False means the availability is determined by the staff member's workingHours property setting.
     */
    private ?bool $useBusinessHours;

    /**
     * Represents a staff member who provides services in a business.
     */
    private ?string $workingHours;

    public function getAvailabilityIsAffectedByPersonalCalendar(): ?bool
    {
        return $this->availabilityIsAffectedByPersonalCalendar;
    }

    public function setAvailabilityIsAffectedByPersonalCalendar(?bool $availabilityIsAffectedByPersonalCalendar): self
    {
        $this->availabilityIsAffectedByPersonalCalendar = $availabilityIsAffectedByPersonalCalendar;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    public function setEmailAddress(?string $emailAddress): self
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    public function getIsEmailNotificationEnabled(): ?bool
    {
        return $this->isEmailNotificationEnabled;
    }

    public function setIsEmailNotificationEnabled(?bool $isEmailNotificationEnabled): self
    {
        $this->isEmailNotificationEnabled = $isEmailNotificationEnabled;
        return $this;
    }

    public function getLastUpdatedDateTime(): ?\DateTimeInterface
    {
        return $this->lastUpdatedDateTime;
    }

    public function setLastUpdatedDateTime(?\DateTimeInterface $lastUpdatedDateTime): self
    {
        $this->lastUpdatedDateTime = $lastUpdatedDateTime;
        return $this;
    }

    public function getMembershipStatus(): ?string
    {
        return $this->membershipStatus;
    }

    public function setMembershipStatus(?string $membershipStatus): self
    {
        $this->membershipStatus = $membershipStatus;
        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): self
    {
        $this->role = $role;
        return $this;
    }

    public function getTimeZone(): ?string
    {
        return $this->timeZone;
    }

    public function setTimeZone(?string $timeZone): self
    {
        $this->timeZone = $timeZone;
        return $this;
    }

    public function getUseBusinessHours(): ?bool
    {
        return $this->useBusinessHours;
    }

    public function setUseBusinessHours(?bool $useBusinessHours): self
    {
        $this->useBusinessHours = $useBusinessHours;
        return $this;
    }

    public function getWorkingHours(): ?string
    {
        return $this->workingHours;
    }

    public function setWorkingHours(?string $workingHours): self
    {
        $this->workingHours = $workingHours;
        return $this;
    }

}
