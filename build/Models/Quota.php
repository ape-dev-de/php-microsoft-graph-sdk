<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Quota
 */
class Quota
{
    /**
     * Total space consumed by files in the recycle bin, in bytes. Read-only.
     */
    private ?float $deleted;

    /**
     * Total space remaining before reaching the capacity limit, in bytes. Read-only.
     */
    private ?float $remaining;

    /**
     * Enumeration value that indicates the state of the storage space. Read-only.
     */
    private ?string $state;

    /**
     * Information about the drive's storage quota plans. Only in Personal OneDrive.
     */
    private ?string $storagePlanInformation;

    /**
     * Total allowed storage space, in bytes. Read-only.
     */
    private ?float $total;

    /**
     * Total space used, in bytes. Read-only.
     */
    private ?string $used;

    public function getDeleted(): ?float
    {
        return $this->deleted;
    }

    public function setDeleted(?float $deleted): self
    {
        $this->deleted = $deleted;
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

    public function getStoragePlanInformation(): ?string
    {
        return $this->storagePlanInformation;
    }

    public function setStoragePlanInformation(?string $storagePlanInformation): self
    {
        $this->storagePlanInformation = $storagePlanInformation;
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

    public function getUsed(): ?string
    {
        return $this->used;
    }

    public function setUsed(?string $used): self
    {
        $this->used = $used;
        return $this;
    }

}
