<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SettingStateDeviceSummary
 */
class SettingStateDeviceSummary
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Device Compliant count for the setting */
        public ?float $compliantDeviceCount = null,
        /** Device conflict error count for the setting */
        public ?float $conflictDeviceCount = null,
        /** Device error count for the setting */
        public ?float $errorDeviceCount = null,
        /** Name of the InstancePath for the setting */
        public ?string $instancePath = null,
        /** Device NonCompliant count for the setting */
        public ?float $nonCompliantDeviceCount = null,
        /** Device Not Applicable count for the setting */
        public ?float $notApplicableDeviceCount = null,
        /** Device Compliant count for the setting */
        public ?float $remediatedDeviceCount = null,
        /** Name of the setting */
        public ?string $settingName = null,
        /** Device Compilance Policy and Configuration for a Setting State summary */
        public ?string $unknownDeviceCount = null
    ) {}
}
