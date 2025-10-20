<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Print
 */
class Print
{
    /**
     * Tenant-wide settings for the Universal Print service.
     */
    private ?string $settings;

    /**
     * The list of available print connectors.
     */
    private array $connectors = [];

    /**
     * The list of print long running operations.
     */
    private array $operations = [];

    /**
     * The list of printers registered in the tenant.
     */
    private array $printers = [];

    /**
     * The list of available Universal Print service endpoints.
     */
    private array $services = [];

    /**
     * The list of printer shares registered in the tenant.
     */
    private array $shares = [];

    /**
     * List of abstract definition for a task that can be triggered when various events occur within Universal Print.
     */
    private ?string $taskDefinitions;

    public function getSettings(): ?string
    {
        return $this->settings;
    }

    public function setSettings(?string $settings): self
    {
        $this->settings = $settings;
        return $this;
    }

    public function getConnectors(): array
    {
        return $this->connectors;
    }

    public function setConnectors(array $connectors): self
    {
        $this->connectors = $connectors;
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

    public function getPrinters(): array
    {
        return $this->printers;
    }

    public function setPrinters(array $printers): self
    {
        $this->printers = $printers;
        return $this;
    }

    public function getServices(): array
    {
        return $this->services;
    }

    public function setServices(array $services): self
    {
        $this->services = $services;
        return $this;
    }

    public function getShares(): array
    {
        return $this->shares;
    }

    public function setShares(array $shares): self
    {
        $this->shares = $shares;
        return $this;
    }

    public function getTaskDefinitions(): ?string
    {
        return $this->taskDefinitions;
    }

    public function setTaskDefinitions(?string $taskDefinitions): self
    {
        $this->taskDefinitions = $taskDefinitions;
        return $this;
    }

}
