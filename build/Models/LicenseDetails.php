<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LicenseDetails
 */
class LicenseDetails
{
    /**
     * Information about the service plans assigned with the license. Read-only. Not nullable.
     */
    private array $servicePlans = [];

    /**
     * Unique identifier (GUID) for the service SKU. Equal to the skuId property on the related subscribedSku object. Read-only.
     */
    private ?string $skuId;

    /**
     * Unique SKU display name. Equal to the skuPartNumber on the related subscribedSku object; for example, AAD_Premium. Read-only.
     */
    private ?string $skuPartNumber;

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

}
