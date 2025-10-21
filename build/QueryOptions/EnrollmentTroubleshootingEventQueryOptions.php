<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EnrollmentTroubleshootingEvent resources
 *
 * Available select fields:
 * - deviceId
 * - enrollmentType
 * - failureCategory
 * - failureReason
 * - managedDeviceIdentifier
 * - operatingSystem
 * - osVersion
 * - userId
 */
class EnrollmentTroubleshootingEventQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EnrollmentTroubleshootingEvent
     */
    public const FIELD_DEVICE_ID = 'deviceId';
    public const FIELD_ENROLLMENT_TYPE = 'enrollmentType';
    public const FIELD_FAILURE_CATEGORY = 'failureCategory';
    public const FIELD_FAILURE_REASON = 'failureReason';
    public const FIELD_MANAGED_DEVICE_IDENTIFIER = 'managedDeviceIdentifier';
    public const FIELD_OPERATING_SYSTEM = 'operatingSystem';
    public const FIELD_OS_VERSION = 'osVersion';
    public const FIELD_USER_ID = 'userId';

    /**
     * Select specific EnrollmentTroubleshootingEvent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
