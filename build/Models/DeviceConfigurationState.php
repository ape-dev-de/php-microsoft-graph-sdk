<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceConfigurationState
 */
class DeviceConfigurationState
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** The name of the policy for this policyBase */
    public ?string $displayName = null;

    /**  */
    public ?PolicyPlatformType $platformType = null;

    /** Count of how many setting a policy holds */
    public ?float $settingCount = null;

    /** 
     * 
     * @var DeviceConfigurationSettingState[]
     */
    public array $settingStates = [];

    /**  */
    public ?ComplianceStatus $state = null;

    /** The version of the policy */
    public ?float $version = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['platformType'])) {
            $this->platformType = is_array($data['platformType']) ? new PolicyPlatformType($data['platformType']) : $data['platformType'];
        }
        if (isset($data['settingCount'])) {
            $this->settingCount = $data['settingCount'];
        }
        if (isset($data['settingStates'])) {
            $this->settingStates = $data['settingStates'];
        }
        if (isset($data['state'])) {
            $this->state = is_array($data['state']) ? new ComplianceStatus($data['state']) : $data['state'];
        }
        if (isset($data['version'])) {
            $this->version = $data['version'];
        }
    }
}
