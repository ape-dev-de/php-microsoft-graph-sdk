<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessLocations
 */
class ConditionalAccessLocations
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Location IDs excluded from scope of policy.
     * @var string[]
     */
    public array $excludeLocations = [];

    /** 
     * Location IDs in scope of policy unless explicitly excluded, All, or AllTrusted.
     * @var string[]
     */
    public array $includeLocations = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['excludeLocations'])) {
            $this->excludeLocations = $data['excludeLocations'];
        }
        if (isset($data['includeLocations'])) {
            $this->includeLocations = $data['includeLocations'];
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
