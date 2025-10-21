<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
 */
class UserExperienceAnalyticsWorkFromAnywhereDevicesSummary
{
    public function __construct(
        /** The user experience analytics work from anywhere Autopilot devices summary. Read-only. */
        public ?string $autopilotDevicesSummary = null,
        /** The user experience analytics work from anywhere Cloud Identity devices summary. Read-only. */
        public ?string $cloudIdentityDevicesSummary = null,
        /** The user experience analytics work from anywhere Cloud management devices summary. Read-only. */
        public ?string $cloudManagementDevicesSummary = null,
        /** Total number of co-managed devices. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $coManagedDevices = null,
        /** The count of intune devices that are not autopilot registerd. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $devicesNotAutopilotRegistered = null,
        /** The count of intune devices not autopilot profile assigned. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $devicesWithoutAutopilotProfileAssigned = null,
        /** The count of devices that are not cloud identity. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $devicesWithoutCloudIdentity = null,
        /** The count of intune devices that are not autopilot registerd. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $intuneDevices = null,
        /** Total count of tenant attach devices. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $tenantAttachDevices = null,
        /** The total count of devices. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $totalDevices = null,
        /** The count of Windows 10 devices that have unsupported OS versions. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $unsupportedOSversionDevices = null,
        /** The count of windows 10 devices. Read-only. Valid values -2147483648 to 2147483647 */
        public ?float $windows10Devices = null,
        /** The user experience analytics work from anywhere Windows 10 devices summary. Read-only. */
        public ?string $windows10DevicesSummary = null,
        /** The user experience analytics Work From Anywhere metrics devices summary. */
        public ?string $windows10DevicesWithoutTenantAttach = null
    ) {}
}
