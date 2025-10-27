<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessDevices
 */
class ConditionalAccessDevices
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Filter that defines the dynamic-device-syntax rule to include/exclude devices. A filter can use device properties (such as extension attributes) to include/exclude them.
     * @var ConditionalAccessFilter|\stdClass|null
     */
    public mixed $deviceFilter = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['deviceFilter'])) {
            $this->deviceFilter = is_array($data['deviceFilter']) ? new ConditionalAccessFilter($data['deviceFilter']) : $data['deviceFilter'];
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
