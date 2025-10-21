<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DeviceEnrollmentPlatformRestrictionsConfiguration resources
 *
 * Available select fields:
 * - androidRestriction
 * - iosRestriction
 * - macOSRestriction
 * - windowsMobileRestriction
 * - windowsRestriction
 */
class DeviceEnrollmentPlatformRestrictionsConfigurationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DeviceEnrollmentPlatformRestrictionsConfiguration
     */
    public const FIELD_ANDROID_RESTRICTION = 'androidRestriction';
    public const FIELD_IOS_RESTRICTION = 'iosRestriction';
    public const FIELD_MAC_OSRESTRICTION = 'macOSRestriction';
    public const FIELD_WINDOWS_MOBILE_RESTRICTION = 'windowsMobileRestriction';
    public const FIELD_WINDOWS_RESTRICTION = 'windowsRestriction';

    /**
     * Select specific DeviceEnrollmentPlatformRestrictionsConfiguration properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
