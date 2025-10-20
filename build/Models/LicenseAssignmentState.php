<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * LicenseAssignmentState
 */
class LicenseAssignmentState
{
    /**
     */
    private ?string $assignedByGroup;

    /**
     */
    private ?string $disabledPlans;

    /**
     */
    private ?string $error;

    /**
     */
    private ?\DateTimeInterface $lastUpdatedDateTime;

    /**
     */
    private ?string $skuId;

    /**
     */
    private ?string $state;

    public function getAssignedByGroup(): ?string
    {
        return $this->assignedByGroup;
    }

    public function setAssignedByGroup(?string $assignedByGroup): self
    {
        $this->assignedByGroup = $assignedByGroup;
        return $this;
    }

    public function getDisabledPlans(): ?string
    {
        return $this->disabledPlans;
    }

    public function setDisabledPlans(?string $disabledPlans): self
    {
        $this->disabledPlans = $disabledPlans;
        return $this;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(?string $error): self
    {
        $this->error = $error;
        return $this;
    }

    public function getLastUpdatedDateTime(): ?\DateTimeInterface
    {
        return $this->lastUpdatedDateTime;
    }

    public function setLastUpdatedDateTime(?\DateTimeInterface $lastUpdatedDateTime): self
    {
        $this->lastUpdatedDateTime = $lastUpdatedDateTime;
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

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;
        return $this;
    }

}
