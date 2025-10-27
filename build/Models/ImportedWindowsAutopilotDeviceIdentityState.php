<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ImportedWindowsAutopilotDeviceIdentityState
 */
class ImportedWindowsAutopilotDeviceIdentityState
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['deviceErrorCode'])) {
            $this->deviceErrorCode = $data['deviceErrorCode'];
        }
        if (isset($data['deviceErrorName'])) {
            $this->deviceErrorName = $data['deviceErrorName'];
        }
        if (isset($data['deviceImportStatus'])) {
            $this->deviceImportStatus = is_array($data['deviceImportStatus']) ? new ImportedWindowsAutopilotDeviceIdentityImportStatus($data['deviceImportStatus']) : $data['deviceImportStatus'];
        }
        if (isset($data['deviceRegistrationId'])) {
            $this->deviceRegistrationId = $data['deviceRegistrationId'];
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
