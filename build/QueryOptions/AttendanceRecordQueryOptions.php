<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AttendanceRecord resources
 *
 * Available select fields:
 * - attendanceIntervals
 * - emailAddress
 * - externalRegistrationInformation
 * - identity
 * - registrationId
 * - role
 * - totalAttendanceInSeconds
 */
class AttendanceRecordQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AttendanceRecord
     */
    public const FIELD_ATTENDANCE_INTERVALS = 'attendanceIntervals';
    public const FIELD_EMAIL_ADDRESS = 'emailAddress';
    public const FIELD_EXTERNAL_REGISTRATION_INFORMATION = 'externalRegistrationInformation';
    public const FIELD_IDENTITY = 'identity';
    public const FIELD_REGISTRATION_ID = 'registrationId';
    public const FIELD_ROLE = 'role';
    public const FIELD_TOTAL_ATTENDANCE_IN_SECONDS = 'totalAttendanceInSeconds';

    /**
     * Select specific AttendanceRecord properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
