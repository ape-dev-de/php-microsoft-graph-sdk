<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttendanceRecord
 */
class AttendanceRecord
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * List of time periods between joining and leaving a meeting.
     * @var AttendanceInterval[]
     */
    public array $attendanceIntervals = [];

    /** Email address of the user associated with this attendance record. */
    public ?string $emailAddress = null;

    /** 
     * The external information for a virtualEventRegistration.
     * @var VirtualEventExternalRegistrationInformation|\stdClass|null
     */
    public mixed $externalRegistrationInformation = null;

    /** 
     * The identity of the user associated with this attendance record. The specific type is one of the following derived types of identity, depending on the user type: communicationsUserIdentity, azureCommunicationServicesUserIdentity.
     * @var Identity|\stdClass|null
     */
    public mixed $identity = null;

    /** Unique identifier of a virtualEventRegistration that is available to all participants registered for the virtualEventWebinar. */
    public ?string $registrationId = null;

    /** Role of the attendee. Possible values are: None, Attendee, Presenter, and Organizer. */
    public ?string $role = null;

    /** Total duration of the attendances in seconds. */
    public ?float $totalAttendanceInSeconds = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['attendanceIntervals'])) {
            $this->attendanceIntervals = $data['attendanceIntervals'];
        }
        if (isset($data['emailAddress'])) {
            $this->emailAddress = $data['emailAddress'];
        }
        if (isset($data['externalRegistrationInformation'])) {
            $this->externalRegistrationInformation = $data['externalRegistrationInformation'];
        }
        if (isset($data['identity'])) {
            $this->identity = $data['identity'];
        }
        if (isset($data['registrationId'])) {
            $this->registrationId = $data['registrationId'];
        }
        if (isset($data['role'])) {
            $this->role = $data['role'];
        }
        if (isset($data['totalAttendanceInSeconds'])) {
            $this->totalAttendanceInSeconds = $data['totalAttendanceInSeconds'];
        }
    }
}
