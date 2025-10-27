<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Schedule
 */
class Schedule
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Indicates whether the schedule is enabled for the team. Required. */
    public ?bool $enabled = null;

    /** Indicates whether copied shifts include activities from the original shift. */
    public ?bool $isActivitiesIncludedWhenCopyingShiftsEnabled = null;

    /** Indicates whether offer shift requests are enabled for the schedule. */
    public ?bool $offerShiftRequestsEnabled = null;

    /** Indicates whether open shifts are enabled for the schedule. */
    public ?bool $openShiftsEnabled = null;

    /** 
     * The status of the schedule provisioning. The possible values are notStarted, running, completed, failed.
     * @var OperationStatus|\stdClass|null
     */
    public OperationStatus|\stdClass|null $provisionStatus = null;

    /** Additional information about why schedule provisioning failed. */
    public ?string $provisionStatusCode = null;

    /** 
     * Indicates the start day of the week. The possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday.
     * @var DayOfWeek|\stdClass|null
     */
    public DayOfWeek|\stdClass|null $startDayOfWeek = null;

    /** Indicates whether swap shifts requests are enabled for the schedule. */
    public ?bool $swapShiftsRequestsEnabled = null;

    /** Indicates whether time clock is enabled for the schedule. */
    public ?bool $timeClockEnabled = null;

    /** 
     * The time clock location settings for this schedule.
     * @var TimeClockSettings|\stdClass|null
     */
    public TimeClockSettings|\stdClass|null $timeClockSettings = null;

    /** Indicates whether time off requests are enabled for the schedule. */
    public ?bool $timeOffRequestsEnabled = null;

    /** Indicates the time zone of the schedule team using tz database format. Required. */
    public ?string $timeZone = null;

    /** 
     * The IDs for the workforce integrations associated with this schedule.
     * @var string[]
     */
    public array $workforceIntegrationIds = [];

    /** 
     * The day notes in the schedule.
     * @var DayNote[]
     */
    public array $dayNotes = [];

    /** 
     * The offer requests for shifts in the schedule.
     * @var OfferShiftRequest[]
     */
    public array $offerShiftRequests = [];

    /** 
     * The open shift requests in the schedule.
     * @var OpenShiftChangeRequest[]
     */
    public array $openShiftChangeRequests = [];

    /** 
     * The set of open shifts in a scheduling group in the schedule.
     * @var OpenShift[]
     */
    public array $openShifts = [];

    /** 
     * The logical grouping of users in the schedule (usually by role).
     * @var SchedulingGroup[]
     */
    public array $schedulingGroups = [];

    /** 
     * The shifts in the schedule.
     * @var Shift[]
     */
    public array $shifts = [];

    /** 
     * The swap requests for shifts in the schedule.
     * @var SwapShiftsChangeRequest[]
     */
    public array $swapShiftsChangeRequests = [];

    /** 
     * The time cards in the schedule.
     * @var TimeCard[]
     */
    public array $timeCards = [];

    /** 
     * The set of reasons for a time off in the schedule.
     * @var TimeOffReason[]
     */
    public array $timeOffReasons = [];

    /** 
     * The time off requests in the schedule.
     * @var TimeOffRequest[]
     */
    public array $timeOffRequests = [];

    /** 
     * The instances of times off in the schedule.
     * @var TimeOff[]
     */
    public array $timesOff = [];


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
        if (isset($data['enabled'])) {
            $this->enabled = is_bool($data['enabled']) ? $data['enabled'] : (bool)$data['enabled'];
        }
        if (isset($data['isActivitiesIncludedWhenCopyingShiftsEnabled'])) {
            $this->isActivitiesIncludedWhenCopyingShiftsEnabled = is_bool($data['isActivitiesIncludedWhenCopyingShiftsEnabled']) ? $data['isActivitiesIncludedWhenCopyingShiftsEnabled'] : (bool)$data['isActivitiesIncludedWhenCopyingShiftsEnabled'];
        }
        if (isset($data['offerShiftRequestsEnabled'])) {
            $this->offerShiftRequestsEnabled = is_bool($data['offerShiftRequestsEnabled']) ? $data['offerShiftRequestsEnabled'] : (bool)$data['offerShiftRequestsEnabled'];
        }
        if (isset($data['openShiftsEnabled'])) {
            $this->openShiftsEnabled = is_bool($data['openShiftsEnabled']) ? $data['openShiftsEnabled'] : (bool)$data['openShiftsEnabled'];
        }
        if (isset($data['provisionStatus'])) {
            $this->provisionStatus = is_array($data['provisionStatus']) ? new OperationStatus($data['provisionStatus']) : $data['provisionStatus'];
        }
        if (isset($data['provisionStatusCode'])) {
            $this->provisionStatusCode = $data['provisionStatusCode'];
        }
        if (isset($data['startDayOfWeek'])) {
            $this->startDayOfWeek = is_array($data['startDayOfWeek']) ? new DayOfWeek($data['startDayOfWeek']) : $data['startDayOfWeek'];
        }
        if (isset($data['swapShiftsRequestsEnabled'])) {
            $this->swapShiftsRequestsEnabled = is_bool($data['swapShiftsRequestsEnabled']) ? $data['swapShiftsRequestsEnabled'] : (bool)$data['swapShiftsRequestsEnabled'];
        }
        if (isset($data['timeClockEnabled'])) {
            $this->timeClockEnabled = is_bool($data['timeClockEnabled']) ? $data['timeClockEnabled'] : (bool)$data['timeClockEnabled'];
        }
        if (isset($data['timeClockSettings'])) {
            $this->timeClockSettings = is_array($data['timeClockSettings']) ? new TimeClockSettings($data['timeClockSettings']) : $data['timeClockSettings'];
        }
        if (isset($data['timeOffRequestsEnabled'])) {
            $this->timeOffRequestsEnabled = is_bool($data['timeOffRequestsEnabled']) ? $data['timeOffRequestsEnabled'] : (bool)$data['timeOffRequestsEnabled'];
        }
        if (isset($data['timeZone'])) {
            $this->timeZone = $data['timeZone'];
        }
        if (isset($data['workforceIntegrationIds'])) {
            $this->workforceIntegrationIds = $data['workforceIntegrationIds'];
        }
        if (isset($data['dayNotes'])) {
            $this->dayNotes = $data['dayNotes'];
        }
        if (isset($data['offerShiftRequests'])) {
            $this->offerShiftRequests = $data['offerShiftRequests'];
        }
        if (isset($data['openShiftChangeRequests'])) {
            $this->openShiftChangeRequests = $data['openShiftChangeRequests'];
        }
        if (isset($data['openShifts'])) {
            $this->openShifts = $data['openShifts'];
        }
        if (isset($data['schedulingGroups'])) {
            $this->schedulingGroups = $data['schedulingGroups'];
        }
        if (isset($data['shifts'])) {
            $this->shifts = $data['shifts'];
        }
        if (isset($data['swapShiftsChangeRequests'])) {
            $this->swapShiftsChangeRequests = $data['swapShiftsChangeRequests'];
        }
        if (isset($data['timeCards'])) {
            $this->timeCards = $data['timeCards'];
        }
        if (isset($data['timeOffReasons'])) {
            $this->timeOffReasons = $data['timeOffReasons'];
        }
        if (isset($data['timeOffRequests'])) {
            $this->timeOffRequests = $data['timeOffRequests'];
        }
        if (isset($data['timesOff'])) {
            $this->timesOff = $data['timesOff'];
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
