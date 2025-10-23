<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosDeviceType
 */
class IosDeviceType
{
    /** Whether the app should run on iPads. */
    public ?bool $iPad = null;

    /** Whether the app should run on iPhones and iPods. */
    public ?bool $iPhoneAndIPod = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['iPad'])) {
            $this->iPad = $data['iPad'];
        }
        if (isset($data['iPhoneAndIPod'])) {
            $this->iPhoneAndIPod = $data['iPhoneAndIPod'];
        }
    }
}
