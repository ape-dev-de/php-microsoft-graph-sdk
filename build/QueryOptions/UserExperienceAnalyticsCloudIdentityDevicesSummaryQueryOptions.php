<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsCloudIdentityDevicesSummary resources
 *
 * Available select fields:
 * - deviceWithoutCloudIdentityCount
 */
class UserExperienceAnalyticsCloudIdentityDevicesSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsCloudIdentityDevicesSummary
     */
    public const FIELD_DEVICE_WITHOUT_CLOUD_IDENTITY_COUNT = 'deviceWithoutCloudIdentityCount';

    /**
     * Select specific UserExperienceAnalyticsCloudIdentityDevicesSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
