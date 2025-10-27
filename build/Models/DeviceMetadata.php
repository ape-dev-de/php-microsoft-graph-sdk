<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceMetadata
 */
class DeviceMetadata
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Optional. The general type of the device (for example, 'Managed', 'Unmanaged'). */
    public ?string $deviceType = null;

    /** The Internet Protocol (IP) address of the device. */
    public ?string $ipAddress = null;

    /** 
     * Details about the operating system platform and version.
     * @var OperatingSystemSpecifications|\stdClass|null
     */
    public mixed $operatingSystemSpecifications = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['deviceType'])) {
            $this->deviceType = $data['deviceType'];
        }
        if (isset($data['ipAddress'])) {
            $this->ipAddress = $data['ipAddress'];
        }
        if (isset($data['operatingSystemSpecifications'])) {
            $this->operatingSystemSpecifications = is_array($data['operatingSystemSpecifications']) ? new OperatingSystemSpecifications($data['operatingSystemSpecifications']) : $data['operatingSystemSpecifications'];
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
