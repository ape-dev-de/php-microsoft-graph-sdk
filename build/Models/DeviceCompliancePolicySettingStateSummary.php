<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceCompliancePolicySettingStateSummary
 */
class DeviceCompliancePolicySettingStateSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Number of compliant devices */
    public ?float $compliantDeviceCount = null;

    /** Number of conflict devices */
    public ?float $conflictDeviceCount = null;

    /** Number of error devices */
    public ?float $errorDeviceCount = null;

    /** Number of NonCompliant devices */
    public ?float $nonCompliantDeviceCount = null;

    /** Number of not applicable devices */
    public ?float $notApplicableDeviceCount = null;

    /**  */
    public ?PolicyPlatformType $platformType = null;

    /** Number of remediated devices */
    public ?float $remediatedDeviceCount = null;

    /** The setting class name and property name. */
    public ?string $setting = null;

    /** Name of the setting. */
    public ?string $settingName = null;

    /** Number of unknown devices */
    public ?float $unknownDeviceCount = null;

    /** 
     * Not yet documented
     * @var DeviceComplianceSettingState[]
     */
    public array $deviceComplianceSettingStates = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['compliantDeviceCount'])) {
            $this->compliantDeviceCount = $data['compliantDeviceCount'];
        }
        if (isset($data['conflictDeviceCount'])) {
            $this->conflictDeviceCount = $data['conflictDeviceCount'];
        }
        if (isset($data['errorDeviceCount'])) {
            $this->errorDeviceCount = $data['errorDeviceCount'];
        }
        if (isset($data['nonCompliantDeviceCount'])) {
            $this->nonCompliantDeviceCount = $data['nonCompliantDeviceCount'];
        }
        if (isset($data['notApplicableDeviceCount'])) {
            $this->notApplicableDeviceCount = $data['notApplicableDeviceCount'];
        }
        if (isset($data['platformType'])) {
            $this->platformType = is_array($data['platformType']) ? new PolicyPlatformType($data['platformType']) : $data['platformType'];
        }
        if (isset($data['remediatedDeviceCount'])) {
            $this->remediatedDeviceCount = $data['remediatedDeviceCount'];
        }
        if (isset($data['setting'])) {
            $this->setting = $data['setting'];
        }
        if (isset($data['settingName'])) {
            $this->settingName = $data['settingName'];
        }
        if (isset($data['unknownDeviceCount'])) {
            $this->unknownDeviceCount = $data['unknownDeviceCount'];
        }
        if (isset($data['deviceComplianceSettingStates'])) {
            $this->deviceComplianceSettingStates = $data['deviceComplianceSettingStates'];
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
