<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceDetail
 */
class DeviceDetail
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Indicates the browser information of the used in the sign-in. Populated for devices registered in Microsoft Entra. */
    public ?string $browser = null;

    /** Refers to the unique ID of the device used in the sign-in. Populated for devices registered in Microsoft Entra. */
    public ?string $deviceId = null;

    /** Refers to the name of the device used in the sign-in. Populated for devices registered in Microsoft Entra. */
    public ?string $displayName = null;

    /** Indicates whether the device is compliant or not. */
    public ?bool $isCompliant = null;

    /** Indicates if the device is managed or not. */
    public ?bool $isManaged = null;

    /** Indicates the OS name and version used in the sign-in. */
    public ?string $operatingSystem = null;

    /** Indicates information on whether the device used in the sign-in is workplace-joined, Microsoft Entra-joined, domain-joined. */
    public ?string $trustType = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['browser'])) {
            $this->browser = $data['browser'];
        }
        if (isset($data['deviceId'])) {
            $this->deviceId = $data['deviceId'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['isCompliant'])) {
            $this->isCompliant = $data['isCompliant'];
        }
        if (isset($data['isManaged'])) {
            $this->isManaged = $data['isManaged'];
        }
        if (isset($data['operatingSystem'])) {
            $this->operatingSystem = $data['operatingSystem'];
        }
        if (isset($data['trustType'])) {
            $this->trustType = $data['trustType'];
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
