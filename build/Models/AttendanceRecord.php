<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttendanceRecord
 */
class AttendanceRecord
{
    public function __construct(
        /** List of time periods between joining and leaving a meeting. */
        public array $attendanceIntervals = [],
        /** Email address of the user associated with this attendance record. */
        public ?string $emailAddress = null,
        /** The external information for a virtualEventRegistration. */
        public ?string $externalRegistrationInformation = null,
        /** The identity of the user associated with this attendance record. The specific type is one of the following derived types of identity, depending on the user type: communicationsUserIdentity, azureCommunicationServicesUserIdentity. */
        public ?string $identity = null,
        /** Unique identifier of a virtualEventRegistration that is available to all participants registered for the virtualEventWebinar. */
        public ?string $registrationId = null,
        /** Role of the attendee. Possible values are: None, Attendee, Presenter, and Organizer. */
        public ?string $role = null,
        /** Total duration of the attendances in seconds. */
        public ?string $totalAttendanceInSeconds = null
    ) {}
}
