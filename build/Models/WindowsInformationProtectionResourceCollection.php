<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionResourceCollection
 */
class WindowsInformationProtectionResourceCollection
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** Display name */
    public ?string $displayName = null;

    /** 
     * Collection of resources
     * @var string[]
     */
    public array $resources = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['resources'])) {
            $this->resources = $data['resources'];
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
