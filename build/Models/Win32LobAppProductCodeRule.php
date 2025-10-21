<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Win32LobAppProductCodeRule
 */
class Win32LobAppProductCodeRule
{
    /**
     * The product code of the app.
     */
    private ?string $productCode;

    /**
     * The product version comparison value.
     */
    private ?string $productVersion;

    /**
     * A complex type to store the product code and version rule data for a Win32 LOB app. This rule is not supported as a requirement rule.
     */
    private ?string $productVersionOperator;


    public function getProductCode(): ?string
    {
        return $this->productCode;
    }

    public function setProductCode(?string $productCode): self
    {
        $this->productCode = $productCode;
        return $this;
    }

    public function getProductVersion(): ?string
    {
        return $this->productVersion;
    }

    public function setProductVersion(?string $productVersion): self
    {
        $this->productVersion = $productVersion;
        return $this;
    }

    public function getProductVersionOperator(): ?string
    {
        return $this->productVersionOperator;
    }

    public function setProductVersionOperator(?string $productVersionOperator): self
    {
        $this->productVersionOperator = $productVersionOperator;
        return $this;
    }

}
