<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsDeviceStartupProcessPerformance resources
 *
 * Available select fields:
 * - deviceCount
 * - medianImpactInMs
 * - processName
 * - productName
 * - publisher
 * - totalImpactInMs
 */
class UserExperienceAnalyticsDeviceStartupProcessPerformanceQueryOptions extends QueryOptions
{
    public const FIELD_DEVICE_COUNT = 'deviceCount';
    public const FIELD_MEDIAN_IMPACT_IN_MS = 'medianImpactInMs';
    public const FIELD_PROCESS_NAME = 'processName';
    public const FIELD_PRODUCT_NAME = 'productName';
    public const FIELD_PUBLISHER = 'publisher';
    public const FIELD_TOTAL_IMPACT_IN_MS = 'totalImpactInMs';

    /**
     * Select specific UserExperienceAnalyticsDeviceStartupProcessPerformance properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsDeviceStartupProcessPerformanceQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
