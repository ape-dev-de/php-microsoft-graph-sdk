<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ScheduleInformation
 */
class ScheduleInformation
{
    /**
     * Represents a merged view of availability of all the items in scheduleItems. The view consists of time slots. Availability during each time slot is indicated with: 0= free or working elswhere, 1= tentative, 2= busy, 3= out of office.Note: Working elsewhere is set to 0 instead of 4 for backward compatibility. For details, see the Q&A and Exchange 2007 and Exchange 2010 do not use the WorkingElsewhere value.
     */
    private ?string $availabilityView;

    /**
     * Error information from attempting to get the availability of the user, distribution list, or resource.
     */
    private ?string $error;

    /**
     * An SMTP address of the user, distribution list, or resource, identifying an instance of scheduleInformation.
     */
    private ?string $scheduleId;

    /**
     * Contains the items that describe the availability of the user or resource.
     */
    private array $scheduleItems = [];

    /**
     * The days of the week and hours in a specific time zone that the user works. These are set as part of the user's mailboxSettings.
     */
    private ?string $workingHours;

    public function getAvailabilityView(): ?string
    {
        return $this->availabilityView;
    }

    public function setAvailabilityView(?string $availabilityView): self
    {
        $this->availabilityView = $availabilityView;
        return $this;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->error = $error;
        return $this;
    }

    public function getScheduleId(): ?string
    {
        return $this->scheduleId;
    }

    public function setScheduleId(?string $scheduleId): self
    {
        $this->scheduleId = $scheduleId;
        return $this;
    }

    public function getScheduleItems(): array
    {
        return $this->scheduleItems;
    }

    public function setScheduleItems(array $scheduleItems): self
    {
        $this->scheduleItems = $scheduleItems;
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
