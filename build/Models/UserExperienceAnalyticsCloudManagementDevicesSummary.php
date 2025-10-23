<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsCloudManagementDevicesSummary
 */
class UserExperienceAnalyticsCloudManagementDevicesSummary
{
    /** Total number of  co-managed devices. Read-only. */
    public ?float $coManagedDeviceCount = null;

    /** The count of intune devices that are not autopilot registerd. Read-only. */
    public ?float $intuneDeviceCount = null;

    /** Total count of tenant attach devices. Read-only. */
    public ?float $tenantAttachDeviceCount = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['coManagedDeviceCount'])) {
            $this->coManagedDeviceCount = $data['coManagedDeviceCount'];
        }
        if (isset($data['intuneDeviceCount'])) {
            $this->intuneDeviceCount = $data['intuneDeviceCount'];
        }
        if (isset($data['tenantAttachDeviceCount'])) {
            $this->tenantAttachDeviceCount = $data['tenantAttachDeviceCount'];
        }
    }
}
