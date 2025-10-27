<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ImportedWindowsAutopilotDeviceIdentity
 */
class ImportedWindowsAutopilotDeviceIdentity
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** UPN of the user the device will be assigned */
    public ?string $assignedUserPrincipalName = null;

    /** Group Tag of the Windows autopilot device. */
    public ?string $groupTag = null;

    /** Hardware Blob of the Windows autopilot device. */
    public ?string $hardwareIdentifier = null;

    /** The Import Id of the Windows autopilot device. */
    public ?string $importId = null;

    /** Product Key of the Windows autopilot device. */
    public ?string $productKey = null;

    /** Serial number of the Windows autopilot device. */
    public ?string $serialNumber = null;

    /** 
     * Current state of the imported device.
     * @var ImportedWindowsAutopilotDeviceIdentityState|\stdClass|null
     */
    public mixed $state = null;


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
        if (isset($data['assignedUserPrincipalName'])) {
            $this->assignedUserPrincipalName = $data['assignedUserPrincipalName'];
        }
        if (isset($data['groupTag'])) {
            $this->groupTag = $data['groupTag'];
        }
        if (isset($data['hardwareIdentifier'])) {
            $this->hardwareIdentifier = $data['hardwareIdentifier'];
        }
        if (isset($data['importId'])) {
            $this->importId = $data['importId'];
        }
        if (isset($data['productKey'])) {
            $this->productKey = $data['productKey'];
        }
        if (isset($data['serialNumber'])) {
            $this->serialNumber = $data['serialNumber'];
        }
        if (isset($data['state'])) {
            $this->state = is_array($data['state']) ? new ImportedWindowsAutopilotDeviceIdentityState($data['state']) : $data['state'];
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
