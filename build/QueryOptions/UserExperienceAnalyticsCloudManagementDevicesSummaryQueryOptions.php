<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserExperienceAnalyticsCloudManagementDevicesSummary resources
 *
 * Available select fields:
 * - coManagedDeviceCount
 * - intuneDeviceCount
 * - tenantAttachDeviceCount
 */
class UserExperienceAnalyticsCloudManagementDevicesSummaryQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserExperienceAnalyticsCloudManagementDevicesSummary
     */
    public const FIELD_CO_MANAGED_DEVICE_COUNT = 'coManagedDeviceCount';
    public const FIELD_INTUNE_DEVICE_COUNT = 'intuneDeviceCount';
    public const FIELD_TENANT_ATTACH_DEVICE_COUNT = 'tenantAttachDeviceCount';

    /**
     * Select specific UserExperienceAnalyticsCloudManagementDevicesSummary properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
