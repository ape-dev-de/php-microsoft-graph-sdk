<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceCompliancePolicySettingStateSummary
 */
class DeviceCompliancePolicySettingStateSummary
{
    public function __construct(
        /** Number of compliant devices */
        public ?float $compliantDeviceCount = null,
        /** Number of conflict devices */
        public ?float $conflictDeviceCount = null,
        /** Number of error devices */
        public ?float $errorDeviceCount = null,
        /** Number of NonCompliant devices */
        public ?float $nonCompliantDeviceCount = null,
        /** Number of not applicable devices */
        public ?float $notApplicableDeviceCount = null,
        /**  */
        public ?string $platformType = null,
        /** Number of remediated devices */
        public ?float $remediatedDeviceCount = null,
        /** The setting class name and property name. */
        public ?string $setting = null,
        /** Name of the setting. */
        public ?string $settingName = null,
        /** Number of unknown devices */
        public ?float $unknownDeviceCount = null,
        /** @var string[] Device Compilance Policy Setting State summary across the account. */
        public array $deviceComplianceSettingStates = []
    ) {}
}
