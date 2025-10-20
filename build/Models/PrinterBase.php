<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * PrinterBase
 */
class PrinterBase
{
    /**
     * The capabilities of the printer/printerShare.
     */
    private ?string $capabilities;

    /**
     * The default print settings of printer/printerShare.
     */
    private ?string $defaults;

    /**
     * The name of the printer/printerShare.
     */
    private ?string $displayName;

    /**
     * Specifies whether the printer/printerShare is currently accepting new print jobs.
     */
    private ?bool $isAcceptingJobs;

    /**
     * The physical and/or organizational location of the printer/printerShare.
     */
    private ?string $location;

    /**
     * The manufacturer of the printer/printerShare.
     */
    private ?string $manufacturer;

    /**
     * The model name of the printer/printerShare.
     */
    private ?string $model;

    /**
     */
    private ?string $status;

    /**
     * The list of jobs that are queued for printing by the printer/printerShare.
     */
    private ?string $jobs;

    public function getCapabilities(): ?string
    {
        return $this->capabilities;
    }

    public function setCapabilities(?string $capabilities): self
    {
        $this->capabilities = $capabilities;
        return $this;
    }

    public function getDefaults(): ?string
    {
        return $this->defaults;
    }

    public function setDefaults(?string $defaults): self
    {
        $this->defaults = $defaults;
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

    public function getIsAcceptingJobs(): ?bool
    {
        return $this->isAcceptingJobs;
    }

    public function setIsAcceptingJobs(?bool $isAcceptingJobs): self
    {
        $this->isAcceptingJobs = $isAcceptingJobs;
        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;
        return $this;
    }

    public function getManufacturer(): ?string
    {
        return $this->manufacturer;
    }

    public function setManufacturer(?string $manufacturer): self
    {
        $this->manufacturer = $manufacturer;
        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(?string $model): self
    {
        $this->model = $model;
        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;
        return $this;
    }

    public function getJobs(): ?string
    {
        return $this->jobs;
    }

    public function setJobs(?string $jobs): self
    {
        $this->jobs = $jobs;
        return $this;
    }

}
