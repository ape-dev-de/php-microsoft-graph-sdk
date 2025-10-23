<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConfigurationManagerClientEnabledFeatures
 */
class ConfigurationManagerClientEnabledFeatures
{
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
        if (isset($data['compliancePolicy'])) {
            $this->compliancePolicy = $data['compliancePolicy'];
        }
        if (isset($data['deviceConfiguration'])) {
            $this->deviceConfiguration = $data['deviceConfiguration'];
        }
        if (isset($data['inventory'])) {
            $this->inventory = $data['inventory'];
        }
        if (isset($data['modernApps'])) {
            $this->modernApps = $data['modernApps'];
        }
        if (isset($data['resourceAccess'])) {
            $this->resourceAccess = $data['resourceAccess'];
        }
        if (isset($data['windowsUpdateForBusiness'])) {
            $this->windowsUpdateForBusiness = $data['windowsUpdateForBusiness'];
        }
    }
}
