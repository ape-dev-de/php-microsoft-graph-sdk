<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AttackSimulationOperation
 */
class AttackSimulationOperation
{
    /**
     * Percentage of completion of the respective operation.
     */
    private ?float $percentageCompleted;

    /**
     * Tenant identifier.
     */
    private ?string $tenantId;

    /**
     * The status of a long-running operation.
     */
    private ?string $type;

    public function getPercentageCompleted(): ?float
    {
        return $this->percentageCompleted;
    }

    public function setPercentageCompleted(?float $percentageCompleted): self
    {
        $this->percentageCompleted = $percentageCompleted;
        return $this;
    }

    public function getTenantId(): ?string
    {
        return $this->tenantId;
    }

    public function setTenantId(?string $tenantId): self
    {
        $this->tenantId = $tenantId;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

}
