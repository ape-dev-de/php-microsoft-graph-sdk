<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConfigurationManagerClientEnabledFeatures
 */
class ConfigurationManagerClientEnabledFeatures
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Whether compliance policy is managed by Intune */
    public ?bool $compliancePolicy = null;

    /** Whether device configuration is managed by Intune */
    public ?bool $deviceConfiguration = null;

    /** Whether inventory is managed by Intune */
    public ?bool $inventory = null;

    /** Whether modern application is managed by Intune */
    public ?bool $modernApps = null;

    /** Whether resource access is managed by Intune */
    public ?bool $resourceAccess = null;

    /** Whether Windows Update for Business is managed by Intune */
    public ?bool $windowsUpdateForBusiness = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['compliancePolicy'])) {
            $this->compliancePolicy = is_bool($data['compliancePolicy']) ? $data['compliancePolicy'] : (bool)$data['compliancePolicy'];
        }
        if (isset($data['deviceConfiguration'])) {
            $this->deviceConfiguration = is_bool($data['deviceConfiguration']) ? $data['deviceConfiguration'] : (bool)$data['deviceConfiguration'];
        }
        if (isset($data['inventory'])) {
            $this->inventory = is_bool($data['inventory']) ? $data['inventory'] : (bool)$data['inventory'];
        }
        if (isset($data['modernApps'])) {
            $this->modernApps = is_bool($data['modernApps']) ? $data['modernApps'] : (bool)$data['modernApps'];
        }
        if (isset($data['resourceAccess'])) {
            $this->resourceAccess = is_bool($data['resourceAccess']) ? $data['resourceAccess'] : (bool)$data['resourceAccess'];
        }
        if (isset($data['windowsUpdateForBusiness'])) {
            $this->windowsUpdateForBusiness = is_bool($data['windowsUpdateForBusiness']) ? $data['windowsUpdateForBusiness'] : (bool)$data['windowsUpdateForBusiness'];
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
