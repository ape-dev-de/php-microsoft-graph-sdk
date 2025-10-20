<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * BookingSchedulingPolicy
 */
class BookingSchedulingPolicy
{
    /**
     * True to allow customers to choose a specific person for the booking.
     */
    private ?bool $allowStaffSelection;

    /**
     * Custom availability of the service in a given time frame.
     */
    private array $customAvailabilities = [];

    /**
     * General availability of the service defined by the scheduling policy.
     */
    private ?string $generalAvailability;

    /**
     * Indicates whether the meeting invite is sent to the customers. The default value is false.
     */
    private ?bool $isMeetingInviteToCustomersEnabled;

    /**
     * Maximum number of days in advance that a booking can be made. It follows the ISO 8601 format.
     */
    private ?string $maximumAdvance;

    /**
     * The minimum amount of time before which bookings and cancellations must be made. It follows the ISO 8601 format.
     */
    private ?string $minimumLeadTime;

    /**
     * True to notify the business via email when a booking is created or changed. Use the email address specified in the email property of the bookingBusiness entity for the business.
     */
    private ?bool $sendConfirmationsToOwner;

    /**
     * This type represents the set of policies that dictate how bookings can be created in a Booking Calendar.
     */
    private ?string $timeSlotInterval;

    public function getAllowStaffSelection(): ?bool
    {
        return $this->allowStaffSelection;
    }

    public function setAllowStaffSelection(?bool $allowStaffSelection): self
    {
        $this->allowStaffSelection = $allowStaffSelection;
        return $this;
    }

    public function getCustomAvailabilities(): array
    {
        return $this->customAvailabilities;
    }

    public function setCustomAvailabilities(array $customAvailabilities): self
    {
        $this->customAvailabilities = $customAvailabilities;
        return $this;
    }

    public function getGeneralAvailability(): ?string
    {
        return $this->generalAvailability;
    }

    public function setGeneralAvailability(?string $generalAvailability): self
    {
        $this->generalAvailability = $generalAvailability;
        return $this;
    }

    public function getIsMeetingInviteToCustomersEnabled(): ?bool
    {
        return $this->isMeetingInviteToCustomersEnabled;
    }

    public function setIsMeetingInviteToCustomersEnabled(?bool $isMeetingInviteToCustomersEnabled): self
    {
        $this->isMeetingInviteToCustomersEnabled = $isMeetingInviteToCustomersEnabled;
        return $this;
    }

    public function getMaximumAdvance(): ?string
    {
        return $this->maximumAdvance;
    }

    public function setMaximumAdvance(?string $maximumAdvance): self
    {
        $this->maximumAdvance = $maximumAdvance;
        return $this;
    }

    public function getMinimumLeadTime(): ?string
    {
        return $this->minimumLeadTime;
    }

    public function setMinimumLeadTime(?string $minimumLeadTime): self
    {
        $this->minimumLeadTime = $minimumLeadTime;
        return $this;
    }

    public function getSendConfirmationsToOwner(): ?bool
    {
        return $this->sendConfirmationsToOwner;
    }

    public function setSendConfirmationsToOwner(?bool $sendConfirmationsToOwner): self
    {
        $this->sendConfirmationsToOwner = $sendConfirmationsToOwner;
        return $this;
    }

    public function getTimeSlotInterval(): ?string
    {
        return $this->timeSlotInterval;
    }

    public function setTimeSlotInterval(?string $timeSlotInterval): self
    {
        $this->timeSlotInterval = $timeSlotInterval;
        return $this;
    }

}
