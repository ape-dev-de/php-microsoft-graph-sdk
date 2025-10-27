<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EmergencyCallerInfo
 */
class EmergencyCallerInfo
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?string $displayName = null;

    /** 
     * 
     * @var Location|\stdClass|null
     */
    public Location|\stdClass|null $location = null;

    /**  */
    public ?string $phoneNumber = null;

    /**  */
    public ?string $tenantId = null;

    /**  */
    public ?string $upn = null;


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
        if (isset($data['location'])) {
            $this->location = is_array($data['location']) ? new Location($data['location']) : $data['location'];
        }
        if (isset($data['phoneNumber'])) {
            $this->phoneNumber = $data['phoneNumber'];
        }
        if (isset($data['tenantId'])) {
            $this->tenantId = $data['tenantId'];
        }
        if (isset($data['upn'])) {
            $this->upn = $data['upn'];
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
