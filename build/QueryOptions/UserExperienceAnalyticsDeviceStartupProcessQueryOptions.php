<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsDeviceStartupProcess resources
 *
 * Available select fields:
 * - managedDeviceId
 * - processName
 * - productName
 * - publisher
 * - startupImpactInMs
 */
class UserExperienceAnalyticsDeviceStartupProcessQueryOptions extends QueryOptions
{
    public const FIELD_MANAGED_DEVICE_ID = 'managedDeviceId';
    public const FIELD_PROCESS_NAME = 'processName';
    public const FIELD_PRODUCT_NAME = 'productName';
    public const FIELD_PUBLISHER = 'publisher';
    public const FIELD_STARTUP_IMPACT_IN_MS = 'startupImpactInMs';

    /**
     * Select specific UserExperienceAnalyticsDeviceStartupProcess properties
     * 
     * @param array<string> $select Use UserExperienceAnalyticsDeviceStartupProcessQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
