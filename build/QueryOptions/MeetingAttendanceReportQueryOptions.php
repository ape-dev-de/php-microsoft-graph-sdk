<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MeetingAttendanceReport resources
 *
 * Available select fields:
 * - externalEventInformation
 * - meetingEndDateTime
 * - meetingStartDateTime
 * - totalParticipantCount
 * - attendanceRecords
 */
class MeetingAttendanceReportQueryOptions extends QueryOptions
{
    /**
     * Available select fields for MeetingAttendanceReport
     */
    public const FIELD_EXTERNAL_EVENT_INFORMATION = 'externalEventInformation';
    public const FIELD_MEETING_END_DATE_TIME = 'meetingEndDateTime';
    public const FIELD_MEETING_START_DATE_TIME = 'meetingStartDateTime';
    public const FIELD_TOTAL_PARTICIPANT_COUNT = 'totalParticipantCount';
    public const FIELD_ATTENDANCE_RECORDS = 'attendanceRecords';

    /**
     * Select specific MeetingAttendanceReport properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
