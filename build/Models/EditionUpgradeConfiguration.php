<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * EditionUpgradeConfiguration
 */
class EditionUpgradeConfiguration
{
    /**
     * Edition Upgrade License File Content.
     */
    private ?string $license;

    /**
     */
    private ?string $licenseType;

    /**
     * Edition Upgrade Product Key.
     */
    private ?string $productKey;

    /**
     * Windows 10 Edition Upgrade configuration.
     */
    private ?string $targetEdition;

    public function getLicense(): ?string
    {
        return $this->license;
    }

    public function setLicense(?string $license): self
    {
        $this->license = $license;
        return $this;
    }

    public function getLicenseType(): ?string
    {
        return $this->licenseType;
    }

    public function setLicenseType(?string $licenseType): self
    {
        $this->licenseType = $licenseType;
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

    public function getTargetEdition(): ?string
    {
        return $this->targetEdition;
    }

    public function setTargetEdition(?string $targetEdition): self
    {
        $this->targetEdition = $targetEdition;
        return $this;
    }

}
