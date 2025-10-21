<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Schedule resources
 *
 * Available select fields:
 * - enabled
 * - isActivitiesIncludedWhenCopyingShiftsEnabled
 * - offerShiftRequestsEnabled
 * - openShiftsEnabled
 * - provisionStatus
 * - provisionStatusCode
 * - startDayOfWeek
 * - swapShiftsRequestsEnabled
 * - timeClockEnabled
 * - timeClockSettings
 * - timeOffRequestsEnabled
 * - timeZone
 * - workforceIntegrationIds
 * - dayNotes
 * - offerShiftRequests
 * - openShiftChangeRequests
 * - openShifts
 * - schedulingGroups
 * - shifts
 * - swapShiftsChangeRequests
 * - timeCards
 * - timeOffReasons
 * - timeOffRequests
 * - timesOff
 */
class ScheduleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Schedule
     */
    public const FIELD_ENABLED = 'enabled';
    public const FIELD_IS_ACTIVITIES_INCLUDED_WHEN_COPYING_SHIFTS_ENABLED = 'isActivitiesIncludedWhenCopyingShiftsEnabled';
    public const FIELD_OFFER_SHIFT_REQUESTS_ENABLED = 'offerShiftRequestsEnabled';
    public const FIELD_OPEN_SHIFTS_ENABLED = 'openShiftsEnabled';
    public const FIELD_PROVISION_STATUS = 'provisionStatus';
    public const FIELD_PROVISION_STATUS_CODE = 'provisionStatusCode';
    public const FIELD_START_DAY_OF_WEEK = 'startDayOfWeek';
    public const FIELD_SWAP_SHIFTS_REQUESTS_ENABLED = 'swapShiftsRequestsEnabled';
    public const FIELD_TIME_CLOCK_ENABLED = 'timeClockEnabled';
    public const FIELD_TIME_CLOCK_SETTINGS = 'timeClockSettings';
    public const FIELD_TIME_OFF_REQUESTS_ENABLED = 'timeOffRequestsEnabled';
    public const FIELD_TIME_ZONE = 'timeZone';
    public const FIELD_WORKFORCE_INTEGRATION_IDS = 'workforceIntegrationIds';
    public const FIELD_DAY_NOTES = 'dayNotes';
    public const FIELD_OFFER_SHIFT_REQUESTS = 'offerShiftRequests';
    public const FIELD_OPEN_SHIFT_CHANGE_REQUESTS = 'openShiftChangeRequests';
    public const FIELD_OPEN_SHIFTS = 'openShifts';
    public const FIELD_SCHEDULING_GROUPS = 'schedulingGroups';
    public const FIELD_SHIFTS = 'shifts';
    public const FIELD_SWAP_SHIFTS_CHANGE_REQUESTS = 'swapShiftsChangeRequests';
    public const FIELD_TIME_CARDS = 'timeCards';
    public const FIELD_TIME_OFF_REASONS = 'timeOffReasons';
    public const FIELD_TIME_OFF_REQUESTS = 'timeOffRequests';
    public const FIELD_TIMES_OFF = 'timesOff';

    /**
     * Select specific Schedule properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
