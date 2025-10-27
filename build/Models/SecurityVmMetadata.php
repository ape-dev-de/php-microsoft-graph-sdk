<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityVmMetadata
 */
class SecurityVmMetadata
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /**  */
    public ?SecurityVmCloudProvider $cloudProvider = null;

    /** Unique identifier of the Azure resource. */
    public ?string $resourceId = null;

    /** Unique identifier of the Azure subscription the customer tenant belongs to. */
    public ?string $subscriptionId = null;

    /** Unique identifier of the virtual machine instance. */
    public ?string $vmId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['cloudProvider'])) {
            $this->cloudProvider = is_array($data['cloudProvider']) ? new SecurityVmCloudProvider($data['cloudProvider']) : $data['cloudProvider'];
        }
        if (isset($data['resourceId'])) {
            $this->resourceId = $data['resourceId'];
        }
        if (isset($data['subscriptionId'])) {
            $this->subscriptionId = $data['subscriptionId'];
        }
        if (isset($data['vmId'])) {
            $this->vmId = $data['vmId'];
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
