<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ImportedWindowsAutopilotDeviceIdentityState
 */
class ImportedWindowsAutopilotDeviceIdentityState
{
    /** Device error code reported by Device Directory Service(DDS). */
    public ?float $deviceErrorCode = null;

    /** Device error name reported by Device Directory Service(DDS). */
    public ?string $deviceErrorName = null;

    /**  */
    public ?ImportedWindowsAutopilotDeviceIdentityImportStatus $deviceImportStatus = null;

    /** Device Registration ID for successfully added device reported by Device Directory Service(DDS). */
    public ?string $deviceRegistrationId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['deviceErrorCode'])) {
            $this->deviceErrorCode = $data['deviceErrorCode'];
        }
        if (isset($data['deviceErrorName'])) {
            $this->deviceErrorName = $data['deviceErrorName'];
        }
        if (isset($data['deviceImportStatus'])) {
            $this->deviceImportStatus = $data['deviceImportStatus'];
        }
        if (isset($data['deviceRegistrationId'])) {
            $this->deviceRegistrationId = $data['deviceRegistrationId'];
        }
    }
}
