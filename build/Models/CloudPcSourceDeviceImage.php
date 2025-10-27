<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcSourceDeviceImage
 */
class CloudPcSourceDeviceImage
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The display name for the source image. Read-only. */
    public ?string $displayName = null;

    /** The fully qualified unique identifier (ID) of the source image resource in Azure. The ID format is: '/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Compute/images/{imageName}'. Read-only. */
    public ?string $resourceId = null;

    /** The display name of the subscription that hosts the source image. Read-only. */
    public ?string $subscriptionDisplayName = null;

    /** The unique identifier (ID) of the subscription that hosts the source image. Read-only. */
    public ?string $subscriptionId = null;


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
        if (isset($data['resourceId'])) {
            $this->resourceId = $data['resourceId'];
        }
        if (isset($data['subscriptionDisplayName'])) {
            $this->subscriptionDisplayName = $data['subscriptionDisplayName'];
        }
        if (isset($data['subscriptionId'])) {
            $this->subscriptionId = $data['subscriptionId'];
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
