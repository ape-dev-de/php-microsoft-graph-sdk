<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttendanceRecord
 */
class AttendanceRecord
{
    /**
     * List of time periods between joining and leaving a meeting.
     */
    private array $attendanceIntervals = [];

    /**
     * Email address of the user associated with this attendance record.
     */
    private ?string $emailAddress;

    /**
     * The external information for a virtualEventRegistration.
     */
    private ?string $externalRegistrationInformation;

    /**
     * The identity of the user associated with this attendance record. The specific type is one of the following derived types of identity, depending on the user type: communicationsUserIdentity, azureCommunicationServicesUserIdentity.
     */
    private ?string $identity;

    /**
     * Unique identifier of a virtualEventRegistration that is available to all participants registered for the virtualEventWebinar.
     */
    private ?string $registrationId;

    /**
     * Role of the attendee. Possible values are: None, Attendee, Presenter, and Organizer.
     */
    private ?string $role;

    /**
     * Total duration of the attendances in seconds.
     */
    private ?string $totalAttendanceInSeconds;


    public function getAttendanceIntervals(): array
    {
        return $this->attendanceIntervals;
    }

    public function setAttendanceIntervals(array $attendanceIntervals): self
    {
        $this->attendanceIntervals = $attendanceIntervals;
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

    public function getExternalRegistrationInformation(): ?string
    {
        return $this->externalRegistrationInformation;
    }

    public function setExternalRegistrationInformation(?string $externalRegistrationInformation): self
    {
        $this->externalRegistrationInformation = $externalRegistrationInformation;
        return $this;
    }

    public function getIdentity(): ?string
    {
        return $this->identity;
    }

    public function setIdentity(?string $identity): self
    {
        $this->identity = $identity;
        return $this;
    }

    public function getRegistrationId(): ?string
    {
        return $this->registrationId;
    }

    public function setRegistrationId(?string $registrationId): self
    {
        $this->registrationId = $registrationId;
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

    public function getTotalAttendanceInSeconds(): ?string
    {
        return $this->totalAttendanceInSeconds;
    }

    public function setTotalAttendanceInSeconds(?string $totalAttendanceInSeconds): self
    {
        $this->totalAttendanceInSeconds = $totalAttendanceInSeconds;
        return $this;
    }

}
