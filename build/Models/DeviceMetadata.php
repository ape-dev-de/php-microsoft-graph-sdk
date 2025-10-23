<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceMetadata
 */
class DeviceMetadata
{
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
        if (isset($data['deviceType'])) {
            $this->deviceType = $data['deviceType'];
        }
        if (isset($data['ipAddress'])) {
            $this->ipAddress = $data['ipAddress'];
        }
        if (isset($data['operatingSystemSpecifications'])) {
            $this->operatingSystemSpecifications = $data['operatingSystemSpecifications'];
        }
    }
}
