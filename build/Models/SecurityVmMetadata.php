<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityVmMetadata
 */
class SecurityVmMetadata
{
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
}
