<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MicrosoftStoreForBusinessApp
 */
class MicrosoftStoreForBusinessApp
{
    /**
     */
    private ?string $licenseType;

    /**
     * The app package identifier
     */
    private ?string $packageIdentityName;

    /**
     * The app product key
     */
    private ?string $productKey;

    /**
     * The total number of Microsoft Store for Business licenses.
     */
    private ?float $totalLicenseCount;

    /**
     * Microsoft Store for Business Apps. This class does not support Create, Delete, or Update.
     */
    private ?string $usedLicenseCount;

    public function getLicenseType(): ?string
    {
        return $this->licenseType;
    }

    public function setLicenseType(?string $licenseType): self
    {
        $this->licenseType = $licenseType;
        return $this;
    }

    public function getPackageIdentityName(): ?string
    {
        return $this->packageIdentityName;
    }

    public function setPackageIdentityName(?string $packageIdentityName): self
    {
        $this->packageIdentityName = $packageIdentityName;
        return $this;
    }

    public function getProductKey(): ?string
    {
        return $this->productKey;
    }

    public function setProductKey(?string $productKey): self
    {
        $this->productKey = $productKey;
        return $this;
    }

    public function getTotalLicenseCount(): ?float
    {
        return $this->totalLicenseCount;
    }

    public function setTotalLicenseCount(?float $totalLicenseCount): self
    {
        $this->totalLicenseCount = $totalLicenseCount;
        return $this;
    }

    public function getUsedLicenseCount(): ?string
    {
        return $this->usedLicenseCount;
    }

    public function setUsedLicenseCount(?string $usedLicenseCount): self
    {
        $this->usedLicenseCount = $usedLicenseCount;
        return $this;
    }

}
