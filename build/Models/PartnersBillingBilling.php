<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PartnersBillingBilling
 */
class PartnersBillingBilling
{
    /**
     * Represents metadata for the exported data.
     */
    private array $manifests = [];

    /**
     * Represents an operation to export the billing data of a partner.
     */
    private array $operations = [];

    /**
     */
    private ?string $reconciliation;

    /**
     */
    private ?string $usage;


    public function getManifests(): array
    {
        return $this->manifests;
    }

    public function setManifests(array $manifests): self
    {
        $this->manifests = $manifests;
        return $this;
    }

    public function getOperations(): array
    {
        return $this->operations;
    }

    public function setOperations(array $operations): self
    {
        $this->operations = $operations;
        return $this;
    }

    public function getReconciliation(): ?string
    {
        return $this->reconciliation;
    }

    public function setReconciliation(?string $reconciliation): self
    {
        $this->reconciliation = $reconciliation;
        return $this;
    }

    public function getUsage(): ?string
    {
        return $this->usage;
    }

    public function setUsage(?string $usage): self
    {
        $this->usage = $usage;
        return $this;
    }

}
