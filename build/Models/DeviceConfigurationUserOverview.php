<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DeviceConfigurationUserOverview
 */
class DeviceConfigurationUserOverview
{
    /**
     * Version of the policy for that overview
     */
    private ?float $configurationVersion;

    /**
     * Number of error Users
     */
    private ?float $errorCount;

    /**
     * Number of failed Users
     */
    private ?float $failedCount;

    /**
     * Last update time
     */
    private ?\DateTimeInterface $lastUpdateDateTime;

    /**
     * Number of not applicable users
     */
    private ?float $notApplicableCount;

    /**
     * Number of pending Users
     */
    private ?float $pendingCount;

    /**
     * Number of succeeded Users
     */
    private ?string $successCount;


    public function getConfigurationVersion(): ?float
    {
        return $this->configurationVersion;
    }

    public function setConfigurationVersion(?float $configurationVersion): self
    {
        $this->configurationVersion = $configurationVersion;
        return $this;
    }

    public function getErrorCount(): ?float
    {
        return $this->errorCount;
    }

    public function setErrorCount(?float $errorCount): self
    {
        $this->errorCount = $errorCount;
        return $this;
    }

    public function getFailedCount(): ?float
    {
        return $this->failedCount;
    }

    public function setFailedCount(?float $failedCount): self
    {
        $this->failedCount = $failedCount;
        return $this;
    }

    public function getLastUpdateDateTime(): ?\DateTimeInterface
    {
        return $this->lastUpdateDateTime;
    }

    public function setLastUpdateDateTime(?\DateTimeInterface $lastUpdateDateTime): self
    {
        $this->lastUpdateDateTime = $lastUpdateDateTime;
        return $this;
    }

    public function getNotApplicableCount(): ?float
    {
        return $this->notApplicableCount;
    }

    public function setNotApplicableCount(?float $notApplicableCount): self
    {
        $this->notApplicableCount = $notApplicableCount;
        return $this;
    }

    public function getPendingCount(): ?float
    {
        return $this->pendingCount;
    }

    public function setPendingCount(?float $pendingCount): self
    {
        $this->pendingCount = $pendingCount;
        return $this;
    }

    public function getSuccessCount(): ?string
    {
        return $this->successCount;
    }

    public function setSuccessCount(?string $successCount): self
    {
        $this->successCount = $successCount;
        return $this;
    }

}
