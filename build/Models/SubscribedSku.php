<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SubscribedSku
 */
class SubscribedSku
{
    /**
     * The unique ID of the account this SKU belongs to.
     */
    private ?string $accountId;

    /**
     * The name of the account this SKU belongs to.
     */
    private ?string $accountName;

    /**
     * The target class for this SKU. Only SKUs with target class User are assignable. Possible values are: User, Company.
     */
    private ?string $appliesTo;

    /**
     * Enabled indicates that the prepaidUnits property has at least one unit that is enabled. LockedOut indicates that the customer canceled their subscription. Possible values are: Enabled, Warning, Suspended, Deleted, LockedOut.
     */
    private ?string $capabilityStatus;

    /**
     * The number of licenses that have been assigned.
     */
    private ?float $consumedUnits;

    /**
     * Information about the number and status of prepaid licenses.
     */
    private ?string $prepaidUnits;

    /**
     * Information about the service plans that are available with the SKU. Not nullable.
     */
    private array $servicePlans = [];

    /**
     * The unique identifier (GUID) for the service SKU.
     */
    private ?string $skuId;

    /**
     * The SKU part number; for example: AAD_PREMIUM or RMSBASIC. To get a list of commercial subscriptions that an organization has acquired, see List subscribedSkus.
     */
    private ?string $skuPartNumber;

    /**
     * A list of all subscription IDs associated with this SKU.
     */
    private ?string $subscriptionIds;

    public function getAccountId(): ?string
    {
        return $this->accountId;
    }

    public function setAccountId(?string $accountId): self
    {
        $this->accountId = $accountId;
        return $this;
    }

    public function getAccountName(): ?string
    {
        return $this->accountName;
    }

    public function setAccountName(?string $accountName): self
    {
        $this->accountName = $accountName;
        return $this;
    }

    public function getAppliesTo(): ?string
    {
        return $this->appliesTo;
    }

    public function setAppliesTo(?string $appliesTo): self
    {
        $this->appliesTo = $appliesTo;
        return $this;
    }

    public function getCapabilityStatus(): ?string
    {
        return $this->capabilityStatus;
    }

    public function setCapabilityStatus(?string $capabilityStatus): self
    {
        $this->capabilityStatus = $capabilityStatus;
        return $this;
    }

    public function getConsumedUnits(): ?float
    {
        return $this->consumedUnits;
    }

    public function setConsumedUnits(?float $consumedUnits): self
    {
        $this->consumedUnits = $consumedUnits;
        return $this;
    }

    public function getPrepaidUnits(): ?string
    {
        return $this->prepaidUnits;
    }

    public function setPrepaidUnits(?string $prepaidUnits): self
    {
        $this->prepaidUnits = $prepaidUnits;
        return $this;
    }

    public function getServicePlans(): array
    {
        return $this->servicePlans;
    }

    public function setServicePlans(array $servicePlans): self
    {
        $this->servicePlans = $servicePlans;
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

    public function getSubscriptionIds(): ?string
    {
        return $this->subscriptionIds;
    }

    public function setSubscriptionIds(?string $subscriptionIds): self
    {
        $this->subscriptionIds = $subscriptionIds;
        return $this;
    }

}
