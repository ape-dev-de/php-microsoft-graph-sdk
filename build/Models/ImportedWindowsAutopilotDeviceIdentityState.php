<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ImportedWindowsAutopilotDeviceIdentityState
 */
class ImportedWindowsAutopilotDeviceIdentityState
{
    public function __construct(
        /** Device error code reported by Device Directory Service(DDS). */
        public ?float $deviceErrorCode = null,
        /** Device error name reported by Device Directory Service(DDS). */
        public ?string $deviceErrorName = null,
        /**  */
        public ?ImportedWindowsAutopilotDeviceIdentityImportStatus $deviceImportStatus = null,
        /** Device Registration ID for successfully added device reported by Device Directory Service(DDS). */
        public ?string $deviceRegistrationId = null
    ) {}
}
