<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MeetingAttendanceReport
 */
class MeetingAttendanceReport
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * The external information of a virtual event. Returned only for event organizers or coorganizers. Read-only.
     * @var VirtualEventExternalInformation[]
     */
    public array $externalEventInformation = [];

    /** UTC time when the meeting ended. Read-only. */
    public ?\DateTimeInterface $meetingEndDateTime = null;

    /** UTC time when the meeting started. Read-only. */
    public ?\DateTimeInterface $meetingStartDateTime = null;

    /** Total number of participants. Read-only. */
    public ?float $totalParticipantCount = null;

    /** 
     * List of attendance records of an attendance report. Read-only.
     * @var AttendanceRecord[]
     */
    public array $attendanceRecords = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['externalEventInformation'])) {
            $this->externalEventInformation = $data['externalEventInformation'];
        }
        if (isset($data['meetingEndDateTime'])) {
            $this->meetingEndDateTime = $data['meetingEndDateTime'];
        }
        if (isset($data['meetingStartDateTime'])) {
            $this->meetingStartDateTime = $data['meetingStartDateTime'];
        }
        if (isset($data['totalParticipantCount'])) {
            $this->totalParticipantCount = $data['totalParticipantCount'];
        }
        if (isset($data['attendanceRecords'])) {
            $this->attendanceRecords = $data['attendanceRecords'];
        }
    }
}
