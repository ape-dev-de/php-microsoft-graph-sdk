<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosDeviceType
 */
class IosDeviceType
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

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
        $this->rawData = $data;
        if (isset($data['iPad'])) {
            $this->iPad = $data['iPad'];
        }
        if (isset($data['iPhoneAndIPod'])) {
            $this->iPhoneAndIPod = $data['iPhoneAndIPod'];
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
