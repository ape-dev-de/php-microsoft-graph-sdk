<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudPcSourceDeviceImage
 */
class CloudPcSourceDeviceImage
{
    /**
     * The display name for the source image. Read-only.
     */
    private ?string $displayName;

    /**
     * The fully qualified unique identifier (ID) of the source image resource in Azure. The ID format is: ''/subscriptions/{subscription-id}/resourceGroups/{resourceGroupName}/providers/Microsoft.Compute/images/{imageName}''. Read-only.
     */
    private ?string $resourceId;

    /**
     * The display name of the subscription that hosts the source image. Read-only.
     */
    private ?string $subscriptionDisplayName;

    /**
     * The unique identifier (ID) of the subscription that hosts the source image. Read-only.
     */
    private ?string $subscriptionId;

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getResourceId(): ?string
    {
        return $this->resourceId;
    }

    public function setResourceId(?string $resourceId): self
    {
        $this->resourceId = $resourceId;
        return $this;
    }

    public function getSubscriptionDisplayName(): ?string
    {
        return $this->subscriptionDisplayName;
    }

    public function setSubscriptionDisplayName(?string $subscriptionDisplayName): self
    {
        $this->subscriptionDisplayName = $subscriptionDisplayName;
        return $this;
    }

    public function getSubscriptionId(): ?string
    {
        return $this->subscriptionId;
    }

    public function setSubscriptionId(?string $subscriptionId): self
    {
        $this->subscriptionId = $subscriptionId;
        return $this;
    }

}
