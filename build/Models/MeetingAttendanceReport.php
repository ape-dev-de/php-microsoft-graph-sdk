<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MeetingAttendanceReport
 */
class MeetingAttendanceReport
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The external information of a virtual event. Returned only for event organizers or coorganizers. Read-only. */
        public array $externalEventInformation = [],
        /** UTC time when the meeting ended. Read-only. */
        public ?\DateTimeInterface $meetingEndDateTime = null,
        /** UTC time when the meeting started. Read-only. */
        public ?\DateTimeInterface $meetingStartDateTime = null,
        /** Total number of participants. Read-only. */
        public ?float $totalParticipantCount = null,
        /** @var string[] List of attendance records of an attendance report. Read-only. */
        public array $attendanceRecords = []
    ) {}
}
