<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosNetworkUsageRule
 */
class IosNetworkUsageRule
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** If set to true, corresponding managed apps will not be allowed to use cellular data at any time. */
    public ?bool $cellularDataBlocked = null;

    /** If set to true, corresponding managed apps will not be allowed to use cellular data when roaming. */
    public ?bool $cellularDataBlockWhenRoaming = null;

    /** 
     * Information about the managed apps that this rule is going to apply to. This collection can contain a maximum of 500 elements.
     * @var AppListItem[]
     */
    public array $managedApps = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['cellularDataBlocked'])) {
            $this->cellularDataBlocked = $data['cellularDataBlocked'];
        }
        if (isset($data['cellularDataBlockWhenRoaming'])) {
            $this->cellularDataBlockWhenRoaming = $data['cellularDataBlockWhenRoaming'];
        }
        if (isset($data['managedApps'])) {
            $this->managedApps = $data['managedApps'];
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
