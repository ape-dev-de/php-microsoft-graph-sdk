<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * VppLicensingType
 */
class VppLicensingType
{
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
        if (isset($data['supportsDeviceLicensing'])) {
            $this->supportsDeviceLicensing = $data['supportsDeviceLicensing'];
        }
        if (isset($data['supportsUserLicensing'])) {
            $this->supportsUserLicensing = $data['supportsUserLicensing'];
        }
    }
}
