<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * WindowsInformationProtectionApp
 */
class WindowsInformationProtectionApp
{
    /**
     * If true, app is denied protection or exemption.
     */
    private ?bool $denied;

    /**
     * The app's description.
     */
    private ?string $description;

    /**
     * App display name.
     */
    private ?string $displayName;

    /**
     * The product name.
     */
    private ?string $productName;

    /**
     * App for Windows information protection
     */
    private ?string $publisherName;

    public function getDenied(): ?bool
    {
        return $this->denied;
    }

    public function setDenied(?bool $denied): self
    {
        $this->denied = $denied;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function getProductName(): ?string
    {
        return $this->productName;
    }

    public function setProductName(?string $productName): self
    {
        $this->productName = $productName;
        return $this;
    }

    public function getPublisherName(): ?string
    {
        return $this->publisherName;
    }

    public function setPublisherName(?string $publisherName): self
    {
        $this->publisherName = $publisherName;
        return $this;
    }

}
