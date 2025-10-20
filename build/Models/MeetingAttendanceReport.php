<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MeetingAttendanceReport
 */
class MeetingAttendanceReport
{
    /**
     * The external information of a virtual event. Returned only for event organizers or coorganizers. Read-only.
     */
    private array $externalEventInformation = [];

    /**
     * UTC time when the meeting ended. Read-only.
     */
    private ?\DateTimeInterface $meetingEndDateTime;

    /**
     * UTC time when the meeting started. Read-only.
     */
    private ?\DateTimeInterface $meetingStartDateTime;

    /**
     * Total number of participants. Read-only.
     */
    private ?float $totalParticipantCount;

    /**
     * List of attendance records of an attendance report. Read-only.
     */
    private ?string $attendanceRecords;

    public function getExternalEventInformation(): array
    {
        return $this->externalEventInformation;
    }

    public function setExternalEventInformation(array $externalEventInformation): self
    {
        $this->externalEventInformation = $externalEventInformation;
        return $this;
    }

    public function getMeetingEndDateTime(): ?\DateTimeInterface
    {
        return $this->meetingEndDateTime;
    }

    public function setMeetingEndDateTime(?\DateTimeInterface $meetingEndDateTime): self
    {
        $this->meetingEndDateTime = $meetingEndDateTime;
        return $this;
    }

    public function getMeetingStartDateTime(): ?\DateTimeInterface
    {
        return $this->meetingStartDateTime;
    }

    public function setMeetingStartDateTime(?\DateTimeInterface $meetingStartDateTime): self
    {
        $this->meetingStartDateTime = $meetingStartDateTime;
        return $this;
    }

    public function getTotalParticipantCount(): ?float
    {
        return $this->totalParticipantCount;
    }

    public function setTotalParticipantCount(?float $totalParticipantCount): self
    {
        $this->totalParticipantCount = $totalParticipantCount;
        return $this;
    }

    public function getAttendanceRecords(): ?string
    {
        return $this->attendanceRecords;
    }

    public function setAttendanceRecords(?string $attendanceRecords): self
    {
        $this->attendanceRecords = $attendanceRecords;
        return $this;
    }

}
