<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityVmMetadata
 */
class SecurityVmMetadata
{
    /**
     */
    private ?string $cloudProvider;

    /**
     * Unique identifier of the Azure resource.
     */
    private ?string $resourceId;

    /**
     * Unique identifier of the Azure subscription the customer tenant belongs to.
     */
    private ?string $subscriptionId;

    /**
     * Unique identifier of the virtual machine instance.
     */
    private ?string $vmId;

    public function getCloudProvider(): ?string
    {
        return $this->cloudProvider;
    }

    public function setCloudProvider(?string $cloudProvider): self
    {
        $this->cloudProvider = $cloudProvider;
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

    public function getSubscriptionId(): ?string
    {
        return $this->subscriptionId;
    }

    public function setSubscriptionId(?string $subscriptionId): self
    {
        $this->subscriptionId = $subscriptionId;
        return $this;
    }

    public function getVmId(): ?string
    {
        return $this->vmId;
    }

    public function setVmId(?string $vmId): self
    {
        $this->vmId = $vmId;
        return $this;
    }

}
