<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VppLicensingType
 */
class VppLicensingType
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Whether the program supports the device licensing type. */
    public ?bool $supportsDeviceLicensing = null;

    /** Whether the program supports the user licensing type. */
    public ?bool $supportsUserLicensing = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['supportsDeviceLicensing'])) {
            $this->supportsDeviceLicensing = $data['supportsDeviceLicensing'];
        }
        if (isset($data['supportsUserLicensing'])) {
            $this->supportsUserLicensing = $data['supportsUserLicensing'];
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
