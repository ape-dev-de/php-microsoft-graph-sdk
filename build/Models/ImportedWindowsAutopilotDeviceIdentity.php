<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ImportedWindowsAutopilotDeviceIdentity
 */
class ImportedWindowsAutopilotDeviceIdentity
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** UPN of the user the device will be assigned */
        public ?string $assignedUserPrincipalName = null,
        /** Group Tag of the Windows autopilot device. */
        public ?string $groupTag = null,
        /** Hardware Blob of the Windows autopilot device. */
        public ?string $hardwareIdentifier = null,
        /** The Import Id of the Windows autopilot device. */
        public ?string $importId = null,
        /** Product Key of the Windows autopilot device. */
        public ?string $productKey = null,
        /** Serial number of the Windows autopilot device. */
        public ?string $serialNumber = null,
        /** Current state of the imported device. */
        public ?ImportedWindowsAutopilotDeviceIdentityState $state = null
    ) {}
}
