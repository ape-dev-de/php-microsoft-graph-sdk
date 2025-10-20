<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedStorageQuota
 */
class UnifiedStorageQuota
{
    /**
     */
    private ?float $deleted;

    /**
     */
    private ?string $manageWebUrl;

    /**
     */
    private ?float $remaining;

    /**
     */
    private ?string $state;

    /**
     */
    private ?float $total;

    /**
     */
    private ?float $used;

    /**
     */
    private ?string $services;

    public function getDeleted(): ?float
    {
        return $this->deleted;
    }

    public function setDeleted(?float $deleted): self
    {
        $this->deleted = $deleted;
        return $this;
    }

    public function getManageWebUrl(): ?string
    {
        return $this->manageWebUrl;
    }

    public function setManageWebUrl(?string $manageWebUrl): self
    {
        $this->manageWebUrl = $manageWebUrl;
        return $this;
    }

    public function getRemaining(): ?float
    {
        return $this->remaining;
    }

    public function setRemaining(?float $remaining): self
    {
        $this->remaining = $remaining;
        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(?float $total): self
    {
        $this->total = $total;
        return $this;
    }

    public function getUsed(): ?float
    {
        return $this->used;
    }

    public function setUsed(?float $used): self
    {
        $this->used = $used;
        return $this;
    }

    public function getServices(): ?string
    {
        return $this->services;
    }

    public function setServices(?string $services): self
    {
        $this->services = $services;
        return $this;
    }

}
