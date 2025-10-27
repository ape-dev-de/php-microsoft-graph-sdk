<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsCloudManagementDevicesSummary
 */
class UserExperienceAnalyticsCloudManagementDevicesSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['coManagedDeviceCount'])) {
            $this->coManagedDeviceCount = is_numeric($data['coManagedDeviceCount']) ? (float)$data['coManagedDeviceCount'] : $data['coManagedDeviceCount'];
        }
        if (isset($data['intuneDeviceCount'])) {
            $this->intuneDeviceCount = is_numeric($data['intuneDeviceCount']) ? (float)$data['intuneDeviceCount'] : $data['intuneDeviceCount'];
        }
        if (isset($data['tenantAttachDeviceCount'])) {
            $this->tenantAttachDeviceCount = is_numeric($data['tenantAttachDeviceCount']) ? (float)$data['tenantAttachDeviceCount'] : $data['tenantAttachDeviceCount'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
