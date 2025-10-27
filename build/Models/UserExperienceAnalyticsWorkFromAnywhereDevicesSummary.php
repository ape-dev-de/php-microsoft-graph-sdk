<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
 */
class UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * The user experience analytics work from anywhere Autopilot devices summary. Read-only.
     * @var UserExperienceAnalyticsAutopilotDevicesSummary|\stdClass|null
     */
    public UserExperienceAnalyticsAutopilotDevicesSummary|\stdClass|null $autopilotDevicesSummary = null;

    /** 
     * The user experience analytics work from anywhere Cloud Identity devices summary. Read-only.
     * @var UserExperienceAnalyticsCloudIdentityDevicesSummary|\stdClass|null
     */
    public UserExperienceAnalyticsCloudIdentityDevicesSummary|\stdClass|null $cloudIdentityDevicesSummary = null;

    /** 
     * The user experience analytics work from anywhere Cloud management devices summary. Read-only.
     * @var UserExperienceAnalyticsCloudManagementDevicesSummary|\stdClass|null
     */
    public UserExperienceAnalyticsCloudManagementDevicesSummary|\stdClass|null $cloudManagementDevicesSummary = null;

    /** Total number of co-managed devices. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $coManagedDevices = null;

    /** The count of intune devices that are not autopilot registerd. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $devicesNotAutopilotRegistered = null;

    /** The count of intune devices not autopilot profile assigned. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $devicesWithoutAutopilotProfileAssigned = null;

    /** The count of devices that are not cloud identity. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $devicesWithoutCloudIdentity = null;

    /** The count of intune devices that are not autopilot registerd. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $intuneDevices = null;

    /** Total count of tenant attach devices. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $tenantAttachDevices = null;

    /** The total count of devices. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $totalDevices = null;

    /** The count of Windows 10 devices that have unsupported OS versions. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $unsupportedOSversionDevices = null;

    /** The count of windows 10 devices. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $windows10Devices = null;

    /** 
     * The user experience analytics work from anywhere Windows 10 devices summary. Read-only.
     * @var UserExperienceAnalyticsWindows10DevicesSummary|\stdClass|null
     */
    public UserExperienceAnalyticsWindows10DevicesSummary|\stdClass|null $windows10DevicesSummary = null;

    /** The count of windows 10 devices that are Intune and co-managed. Read-only. Valid values -2147483648 to 2147483647 */
    public ?float $windows10DevicesWithoutTenantAttach = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['autopilotDevicesSummary'])) {
            $this->autopilotDevicesSummary = is_array($data['autopilotDevicesSummary']) ? new UserExperienceAnalyticsAutopilotDevicesSummary($data['autopilotDevicesSummary']) : $data['autopilotDevicesSummary'];
        }
        if (isset($data['cloudIdentityDevicesSummary'])) {
            $this->cloudIdentityDevicesSummary = is_array($data['cloudIdentityDevicesSummary']) ? new UserExperienceAnalyticsCloudIdentityDevicesSummary($data['cloudIdentityDevicesSummary']) : $data['cloudIdentityDevicesSummary'];
        }
        if (isset($data['cloudManagementDevicesSummary'])) {
            $this->cloudManagementDevicesSummary = is_array($data['cloudManagementDevicesSummary']) ? new UserExperienceAnalyticsCloudManagementDevicesSummary($data['cloudManagementDevicesSummary']) : $data['cloudManagementDevicesSummary'];
        }
        if (isset($data['coManagedDevices'])) {
            $this->coManagedDevices = is_numeric($data['coManagedDevices']) ? (float)$data['coManagedDevices'] : $data['coManagedDevices'];
        }
        if (isset($data['devicesNotAutopilotRegistered'])) {
            $this->devicesNotAutopilotRegistered = is_numeric($data['devicesNotAutopilotRegistered']) ? (float)$data['devicesNotAutopilotRegistered'] : $data['devicesNotAutopilotRegistered'];
        }
        if (isset($data['devicesWithoutAutopilotProfileAssigned'])) {
            $this->devicesWithoutAutopilotProfileAssigned = is_numeric($data['devicesWithoutAutopilotProfileAssigned']) ? (float)$data['devicesWithoutAutopilotProfileAssigned'] : $data['devicesWithoutAutopilotProfileAssigned'];
        }
        if (isset($data['devicesWithoutCloudIdentity'])) {
            $this->devicesWithoutCloudIdentity = is_numeric($data['devicesWithoutCloudIdentity']) ? (float)$data['devicesWithoutCloudIdentity'] : $data['devicesWithoutCloudIdentity'];
        }
        if (isset($data['intuneDevices'])) {
            $this->intuneDevices = is_numeric($data['intuneDevices']) ? (float)$data['intuneDevices'] : $data['intuneDevices'];
        }
        if (isset($data['tenantAttachDevices'])) {
            $this->tenantAttachDevices = is_numeric($data['tenantAttachDevices']) ? (float)$data['tenantAttachDevices'] : $data['tenantAttachDevices'];
        }
        if (isset($data['totalDevices'])) {
            $this->totalDevices = is_numeric($data['totalDevices']) ? (float)$data['totalDevices'] : $data['totalDevices'];
        }
        if (isset($data['unsupportedOSversionDevices'])) {
            $this->unsupportedOSversionDevices = is_numeric($data['unsupportedOSversionDevices']) ? (float)$data['unsupportedOSversionDevices'] : $data['unsupportedOSversionDevices'];
        }
        if (isset($data['windows10Devices'])) {
            $this->windows10Devices = is_numeric($data['windows10Devices']) ? (float)$data['windows10Devices'] : $data['windows10Devices'];
        }
        if (isset($data['windows10DevicesSummary'])) {
            $this->windows10DevicesSummary = is_array($data['windows10DevicesSummary']) ? new UserExperienceAnalyticsWindows10DevicesSummary($data['windows10DevicesSummary']) : $data['windows10DevicesSummary'];
        }
        if (isset($data['windows10DevicesWithoutTenantAttach'])) {
            $this->windows10DevicesWithoutTenantAttach = is_numeric($data['windows10DevicesWithoutTenantAttach']) ? (float)$data['windows10DevicesWithoutTenantAttach'] : $data['windows10DevicesWithoutTenantAttach'];
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
