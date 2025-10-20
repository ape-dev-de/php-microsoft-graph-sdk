<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsWindows10DevicesSummary resources
 *
 * Available select fields:
 * - unsupportedOSversionDeviceCount
 */
class UserExperienceAnalyticsWindows10DevicesSummaryQueryOptions extends QueryOptions
{
    public const FIELD_UNSUPPORTED_OSVERSION_DEVICE_COUNT = 'unsupportedOSversionDeviceCount';

    /**
     * Select specific UserExperienceAnalyticsWindows10DevicesSummary properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsWindows10DevicesSummaryQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
