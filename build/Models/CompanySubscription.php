<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CompanySubscription
 */
class CompanySubscription
{
    /**
     * The ID of this subscription in the commerce system. Alternate key.
     */
    private ?string $commerceSubscriptionId;

    /**
     * The date and time when this subscription was created. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Whether the subscription is a free trial or purchased.
     */
    private ?bool $isTrial;

    /**
     * The date and time when the subscription will move to the next state (as defined by the status property) if not renewed by the tenant. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     */
    private ?\DateTimeInterface $nextLifecycleDateTime;

    /**
     * The object ID of the account admin.
     */
    private ?string $ownerId;

    /**
     * The unique identifier for the Microsoft partner tenant that created the subscription on a customer tenant.
     */
    private ?string $ownerTenantId;

    /**
     * Indicates the entity that ownerId belongs to, for example, ''User''.
     */
    private ?string $ownerType;

    /**
     * The provisioning status of each service included in this subscription.
     */
    private array $serviceStatus = [];

    /**
     * The object ID of the SKU associated with this subscription.
     */
    private ?string $skuId;

    /**
     * The SKU associated with this subscription.
     */
    private ?string $skuPartNumber;

    /**
     * The status of this subscription. Possible values are: Enabled, Deleted, Suspended, Warning, LockedOut.
     */
    private ?string $status;

    /**
     * The number of licenses included in this subscription.
     */
    private ?string $totalLicenses;


    public function getCommerceSubscriptionId(): ?string
    {
        return $this->commerceSubscriptionId;
    }

    public function setCommerceSubscriptionId(?string $commerceSubscriptionId): self
    {
        $this->commerceSubscriptionId = $commerceSubscriptionId;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getIsTrial(): ?bool
    {
        return $this->isTrial;
    }

    public function setIsTrial(?bool $isTrial): self
    {
        $this->isTrial = $isTrial;
        return $this;
    }

    public function getNextLifecycleDateTime(): ?\DateTimeInterface
    {
        return $this->nextLifecycleDateTime;
    }

    public function setNextLifecycleDateTime(?\DateTimeInterface $nextLifecycleDateTime): self
    {
        $this->nextLifecycleDateTime = $nextLifecycleDateTime;
        return $this;
    }

    public function getOwnerId(): ?string
    {
        return $this->ownerId;
    }

    public function setOwnerId(?string $ownerId): self
    {
        $this->ownerId = $ownerId;
        return $this;
    }

    public function getOwnerTenantId(): ?string
    {
        return $this->ownerTenantId;
    }

    public function setOwnerTenantId(?string $ownerTenantId): self
    {
        $this->ownerTenantId = $ownerTenantId;
        return $this;
    }

    public function getOwnerType(): ?string
    {
        return $this->ownerType;
    }

    public function setOwnerType(?string $ownerType): self
    {
        $this->ownerType = $ownerType;
        return $this;
    }

    public function getServiceStatus(): array
    {
        return $this->serviceStatus;
    }

    public function setServiceStatus(array $serviceStatus): self
    {
        $this->serviceStatus = $serviceStatus;
        return $this;
    }

    public function getSkuId(): ?string
    {
        return $this->skuId;
    }

    public function setSkuId(?string $skuId): self
    {
        $this->skuId = $skuId;
        return $this;
    }

    public function getSkuPartNumber(): ?string
    {
        return $this->skuPartNumber;
    }

    public function setSkuPartNumber(?string $skuPartNumber): self
    {
        $this->skuPartNumber = $skuPartNumber;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getTotalLicenses(): ?string
    {
        return $this->totalLicenses;
    }

    public function setTotalLicenses(?string $totalLicenses): self
    {
        $this->totalLicenses = $totalLicenses;
        return $this;
    }

}
