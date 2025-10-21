<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsWorkFromAnywhereModelPerformance resources
 *
 * Available select fields:
 * - cloudIdentityScore
 * - cloudManagementScore
 * - cloudProvisioningScore
 * - healthStatus
 * - manufacturer
 * - model
 * - modelDeviceCount
 * - windowsScore
 * - workFromAnywhereScore
 */
class UserExperienceAnalyticsWorkFromAnywhereModelPerformanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsWorkFromAnywhereModelPerformance
     */
    public const FIELD_CLOUD_IDENTITY_SCORE = 'cloudIdentityScore';
    public const FIELD_CLOUD_MANAGEMENT_SCORE = 'cloudManagementScore';
    public const FIELD_CLOUD_PROVISIONING_SCORE = 'cloudProvisioningScore';
    public const FIELD_HEALTH_STATUS = 'healthStatus';
    public const FIELD_MANUFACTURER = 'manufacturer';
    public const FIELD_MODEL = 'model';
    public const FIELD_MODEL_DEVICE_COUNT = 'modelDeviceCount';
    public const FIELD_WINDOWS_SCORE = 'windowsScore';
    public const FIELD_WORK_FROM_ANYWHERE_SCORE = 'workFromAnywhereScore';

    /**
     * Select specific UserExperienceAnalyticsWorkFromAnywhereModelPerformance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
