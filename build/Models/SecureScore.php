<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecureScore
 */
class SecureScore
{
    /**
     * Active user count of the given tenant.
     */
    private ?float $activeUserCount;

    /**
     * Average score by different scopes (for example, average by industry, average by seating) and control category (Identity, Data, Device, Apps, Infrastructure) within the scope.
     */
    private array $averageComparativeScores = [];

    /**
     * GUID string for tenant ID.
     */
    private ?string $azureTenantId;

    /**
     * Contains tenant scores for a set of controls.
     */
    private array $controlScores = [];

    /**
     * When the report was created.
     */
    private ?\DateTimeInterface $createdDateTime;

    /**
     * Tenant current attained score on specified date.
     */
    private ?string $currentScore;

    /**
     * Microsoft-provided services for the tenant (for example, Exchange online, Skype, Sharepoint).
     */
    private ?string $enabledServices;

    /**
     * Licensed user count of the given tenant.
     */
    private ?float $licensedUserCount;

    /**
     * Tenant maximum possible score on specified date.
     */
    private ?string $maxScore;

    /**
     * Complex type containing details about the security product/service vendor, provider, and subprovider (for example, vendor=Microsoft; provider=SecureScore). Required.
     */
    private ?string $vendorInformation;

    public function getActiveUserCount(): ?float
    {
        return $this->activeUserCount;
    }

    public function setActiveUserCount(?float $activeUserCount): self
    {
        $this->activeUserCount = $activeUserCount;
        return $this;
    }

    public function getAverageComparativeScores(): array
    {
        return $this->averageComparativeScores;
    }

    public function setAverageComparativeScores(array $averageComparativeScores): self
    {
        $this->averageComparativeScores = $averageComparativeScores;
        return $this;
    }

    public function getAzureTenantId(): ?string
    {
        return $this->azureTenantId;
    }

    public function setAzureTenantId(?string $azureTenantId): self
    {
        $this->azureTenantId = $azureTenantId;
        return $this;
    }

    public function getControlScores(): array
    {
        return $this->controlScores;
    }

    public function setControlScores(array $controlScores): self
    {
        $this->controlScores = $controlScores;
        return $this;
    }

    public function getCreatedDateTime(): ?\DateTimeInterface
    {
        return $this->createdDateTime;
    }

    public function setCreatedDateTime(?\DateTimeInterface $createdDateTime): self
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    public function getCurrentScore(): ?string
    {
        return $this->currentScore;
    }

    public function setCurrentScore(?string $currentScore): self
    {
        $this->currentScore = $currentScore;
        return $this;
    }

    public function getEnabledServices(): ?string
    {
        return $this->enabledServices;
    }

    public function setEnabledServices(?string $enabledServices): self
    {
        $this->enabledServices = $enabledServices;
        return $this;
    }

    public function getLicensedUserCount(): ?float
    {
        return $this->licensedUserCount;
    }

    public function setLicensedUserCount(?float $licensedUserCount): self
    {
        $this->licensedUserCount = $licensedUserCount;
        return $this;
    }

    public function getMaxScore(): ?string
    {
        return $this->maxScore;
    }

    public function setMaxScore(?string $maxScore): self
    {
        $this->maxScore = $maxScore;
        return $this;
    }

    public function getVendorInformation(): ?string
    {
        return $this->vendorInformation;
    }

    public function setVendorInformation(?string $vendorInformation): self
    {
        $this->vendorInformation = $vendorInformation;
        return $this;
    }

}
