<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceEnrollmentPlatformRestriction resources
 *
 * Available select fields:
 * - osMaximumVersion
 * - osMinimumVersion
 * - personalDeviceEnrollmentBlocked
 * - platformBlocked
 */
class DeviceEnrollmentPlatformRestrictionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceEnrollmentPlatformRestriction
     */
    public const FIELD_OS_MAXIMUM_VERSION = 'osMaximumVersion';
    public const FIELD_OS_MINIMUM_VERSION = 'osMinimumVersion';
    public const FIELD_PERSONAL_DEVICE_ENROLLMENT_BLOCKED = 'personalDeviceEnrollmentBlocked';
    public const FIELD_PLATFORM_BLOCKED = 'platformBlocked';

    /**
     * Select specific DeviceEnrollmentPlatformRestriction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
