<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Schedule
 */
class Schedule
{
    /**
     * Indicates whether the schedule is enabled for the team. Required.
     */
    private ?bool $enabled;

    /**
     * Indicates whether copied shifts include activities from the original shift.
     */
    private ?bool $isActivitiesIncludedWhenCopyingShiftsEnabled;

    /**
     * Indicates whether offer shift requests are enabled for the schedule.
     */
    private ?bool $offerShiftRequestsEnabled;

    /**
     * Indicates whether open shifts are enabled for the schedule.
     */
    private ?bool $openShiftsEnabled;

    /**
     * The status of the schedule provisioning. The possible values are notStarted, running, completed, failed.
     */
    private ?string $provisionStatus;

    /**
     * Additional information about why schedule provisioning failed.
     */
    private ?string $provisionStatusCode;

    /**
     * Indicates the start day of the week. The possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday.
     */
    private ?string $startDayOfWeek;

    /**
     * Indicates whether swap shifts requests are enabled for the schedule.
     */
    private ?bool $swapShiftsRequestsEnabled;

    /**
     * Indicates whether time clock is enabled for the schedule.
     */
    private ?bool $timeClockEnabled;

    /**
     * The time clock location settings for this schedule.
     */
    private ?string $timeClockSettings;

    /**
     * Indicates whether time off requests are enabled for the schedule.
     */
    private ?bool $timeOffRequestsEnabled;

    /**
     * Indicates the time zone of the schedule team using tz database format. Required.
     */
    private ?string $timeZone;

    /**
     * The IDs for the workforce integrations associated with this schedule.
     * @var string[]
     */
    private array $workforceIntegrationIds = [];

    /**
     * The day notes in the schedule.
     */
    private array $dayNotes = [];

    /**
     * The offer requests for shifts in the schedule.
     */
    private array $offerShiftRequests = [];

    /**
     * The open shift requests in the schedule.
     */
    private array $openShiftChangeRequests = [];

    /**
     * The set of open shifts in a scheduling group in the schedule.
     */
    private array $openShifts = [];

    /**
     * The logical grouping of users in the schedule (usually by role).
     */
    private array $schedulingGroups = [];

    /**
     * The shifts in the schedule.
     */
    private array $shifts = [];

    /**
     * The swap requests for shifts in the schedule.
     */
    private array $swapShiftsChangeRequests = [];

    /**
     * The time cards in the schedule.
     */
    private array $timeCards = [];

    /**
     * The set of reasons for a time off in the schedule.
     */
    private array $timeOffReasons = [];

    /**
     * The time off requests in the schedule.
     */
    private array $timeOffRequests = [];

    /**
     * The instances of times off in the schedule.
     * @var string[]
     */
    private array $timesOff = [];


    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;
        return $this;
    }

    public function getIsActivitiesIncludedWhenCopyingShiftsEnabled(): ?bool
    {
        return $this->isActivitiesIncludedWhenCopyingShiftsEnabled;
    }

    public function setIsActivitiesIncludedWhenCopyingShiftsEnabled(?bool $isActivitiesIncludedWhenCopyingShiftsEnabled): self
    {
        $this->isActivitiesIncludedWhenCopyingShiftsEnabled = $isActivitiesIncludedWhenCopyingShiftsEnabled;
        return $this;
    }

    public function getOfferShiftRequestsEnabled(): ?bool
    {
        return $this->offerShiftRequestsEnabled;
    }

    public function setOfferShiftRequestsEnabled(?bool $offerShiftRequestsEnabled): self
    {
        $this->offerShiftRequestsEnabled = $offerShiftRequestsEnabled;
        return $this;
    }

    public function getOpenShiftsEnabled(): ?bool
    {
        return $this->openShiftsEnabled;
    }

    public function setOpenShiftsEnabled(?bool $openShiftsEnabled): self
    {
        $this->openShiftsEnabled = $openShiftsEnabled;
        return $this;
    }

    public function getProvisionStatus(): ?string
    {
        return $this->provisionStatus;
    }

    public function setProvisionStatus(?string $provisionStatus): self
    {
        $this->provisionStatus = $provisionStatus;
        return $this;
    }

    public function getProvisionStatusCode(): ?string
    {
        return $this->provisionStatusCode;
    }

    public function setProvisionStatusCode(?string $provisionStatusCode): self
    {
        $this->provisionStatusCode = $provisionStatusCode;
        return $this;
    }

    public function getStartDayOfWeek(): ?string
    {
        return $this->startDayOfWeek;
    }

    public function setStartDayOfWeek(?string $startDayOfWeek): self
    {
        $this->startDayOfWeek = $startDayOfWeek;
        return $this;
    }

    public function getSwapShiftsRequestsEnabled(): ?bool
    {
        return $this->swapShiftsRequestsEnabled;
    }

    public function setSwapShiftsRequestsEnabled(?bool $swapShiftsRequestsEnabled): self
    {
        $this->swapShiftsRequestsEnabled = $swapShiftsRequestsEnabled;
        return $this;
    }

    public function getTimeClockEnabled(): ?bool
    {
        return $this->timeClockEnabled;
    }

    public function setTimeClockEnabled(?bool $timeClockEnabled): self
    {
        $this->timeClockEnabled = $timeClockEnabled;
        return $this;
    }

    public function getTimeClockSettings(): ?string
    {
        return $this->timeClockSettings;
    }

    public function setTimeClockSettings(?string $timeClockSettings): self
    {
        $this->timeClockSettings = $timeClockSettings;
        return $this;
    }

    public function getTimeOffRequestsEnabled(): ?bool
    {
        return $this->timeOffRequestsEnabled;
    }

    public function setTimeOffRequestsEnabled(?bool $timeOffRequestsEnabled): self
    {
        $this->timeOffRequestsEnabled = $timeOffRequestsEnabled;
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

    /**
     * @return string[]
     */
    public function getWorkforceIntegrationIds(): array
    {
        return $this->workforceIntegrationIds;
    }

    /**
     * @param string[] $workforceIntegrationIds
     */
    public function setWorkforceIntegrationIds(array $workforceIntegrationIds): self
    {
        $this->workforceIntegrationIds = $workforceIntegrationIds;
        return $this;
    }

    public function getDayNotes(): array
    {
        return $this->dayNotes;
    }

    public function setDayNotes(array $dayNotes): self
    {
        $this->dayNotes = $dayNotes;
        return $this;
    }

    public function getOfferShiftRequests(): array
    {
        return $this->offerShiftRequests;
    }

    public function setOfferShiftRequests(array $offerShiftRequests): self
    {
        $this->offerShiftRequests = $offerShiftRequests;
        return $this;
    }

    public function getOpenShiftChangeRequests(): array
    {
        return $this->openShiftChangeRequests;
    }

    public function setOpenShiftChangeRequests(array $openShiftChangeRequests): self
    {
        $this->openShiftChangeRequests = $openShiftChangeRequests;
        return $this;
    }

    public function getOpenShifts(): array
    {
        return $this->openShifts;
    }

    public function setOpenShifts(array $openShifts): self
    {
        $this->openShifts = $openShifts;
        return $this;
    }

    public function getSchedulingGroups(): array
    {
        return $this->schedulingGroups;
    }

    public function setSchedulingGroups(array $schedulingGroups): self
    {
        $this->schedulingGroups = $schedulingGroups;
        return $this;
    }

    public function getShifts(): array
    {
        return $this->shifts;
    }

    public function setShifts(array $shifts): self
    {
        $this->shifts = $shifts;
        return $this;
    }

    public function getSwapShiftsChangeRequests(): array
    {
        return $this->swapShiftsChangeRequests;
    }

    public function setSwapShiftsChangeRequests(array $swapShiftsChangeRequests): self
    {
        $this->swapShiftsChangeRequests = $swapShiftsChangeRequests;
        return $this;
    }

    public function getTimeCards(): array
    {
        return $this->timeCards;
    }

    public function setTimeCards(array $timeCards): self
    {
        $this->timeCards = $timeCards;
        return $this;
    }

    public function getTimeOffReasons(): array
    {
        return $this->timeOffReasons;
    }

    public function setTimeOffReasons(array $timeOffReasons): self
    {
        $this->timeOffReasons = $timeOffReasons;
        return $this;
    }

    public function getTimeOffRequests(): array
    {
        return $this->timeOffRequests;
    }

    public function setTimeOffRequests(array $timeOffRequests): self
    {
        $this->timeOffRequests = $timeOffRequests;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getTimesOff(): array
    {
        return $this->timesOff;
    }

    /**
     * @param string[] $timesOff
     */
    public function setTimesOff(array $timesOff): self
    {
        $this->timesOff = $timesOff;
        return $this;
    }

}
