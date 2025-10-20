<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ChangeNotification
 */
class ChangeNotification
{
    /**
     */
    private ?string $changeType;

    /**
     * Value of the clientState property sent in the subscription request (if any). The maximum length is 255 characters. The client can check whether the change notification came from the service by comparing the values of the clientState property. The value of the clientState property sent with the subscription is compared with the value of the clientState property received with each change notification. Optional.
     */
    private ?string $clientState;

    /**
     * (Preview) Encrypted content attached with the change notification. Only provided if encryptionCertificate and includeResourceData were defined during the subscription request and if the resource supports it. Optional.
     */
    private ?string $encryptedContent;

    /**
     * Unique ID for the notification. Optional.
     */
    private ?string $id;

    /**
     * The type of lifecycle notification if the current notification is a lifecycle notification. Optional. Supported values are missed, subscriptionRemoved, reauthorizationRequired. Optional.
     */
    private ?string $lifecycleEvent;

    /**
     * The URI of the resource that emitted the change notification relative to https://graph.microsoft.com. Required.
     */
    private ?string $resource;

    /**
     * The content of this property depends on the type of resource being subscribed to. Optional.
     */
    private ?string $resourceData;

    /**
     * The expiration time for the subscription. Required.
     */
    private ?\DateTimeInterface $subscriptionExpirationDateTime;

    /**
     * The unique identifier of the subscription that generated the notification.Required.
     */
    private ?string $subscriptionId;

    /**
     * The unique identifier of the tenant from which the change notification originated. Required.
     */
    private ?string $tenantId;

    public function getChangeType(): ?string
    {
        return $this->changeType;
    }

    public function setChangeType(?string $changeType): self
    {
        $this->changeType = $changeType;
        return $this;
    }

    public function getClientState(): ?string
    {
        return $this->clientState;
    }

    public function setClientState(?string $clientState): self
    {
        $this->clientState = $clientState;
        return $this;
    }

    public function getEncryptedContent(): ?string
    {
        return $this->encryptedContent;
    }

    public function setEncryptedContent(?string $encryptedContent): self
    {
        $this->encryptedContent = $encryptedContent;
        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getLifecycleEvent(): ?string
    {
        return $this->lifecycleEvent;
    }

    public function setLifecycleEvent(?string $lifecycleEvent): self
    {
        $this->lifecycleEvent = $lifecycleEvent;
        return $this;
    }

    public function getResource(): ?string
    {
        return $this->resource;
    }

    public function setResource(?string $resource): self
    {
        $this->resource = $resource;
        return $this;
    }

    public function getResourceData(): ?string
    {
        return $this->resourceData;
    }

    public function setResourceData(?string $resourceData): self
    {
        $this->resourceData = $resourceData;
        return $this;
    }

    public function getSubscriptionExpirationDateTime(): ?\DateTimeInterface
    {
        return $this->subscriptionExpirationDateTime;
    }

    public function setSubscriptionExpirationDateTime(?\DateTimeInterface $subscriptionExpirationDateTime): self
    {
        $this->subscriptionExpirationDateTime = $subscriptionExpirationDateTime;
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

    public function getTenantId(): ?string
    {
        return $this->tenantId;
    }

    public function setTenantId(?string $tenantId): self
    {
        $this->tenantId = $tenantId;
        return $this;
    }

}
