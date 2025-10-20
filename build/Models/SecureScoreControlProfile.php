<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecureScoreControlProfile
 */
class SecureScoreControlProfile
{
    /**
     * Control action type (Config, Review, Behavior).
     */
    private ?string $actionType;

    /**
     * URL to where the control can be actioned.
     */
    private ?string $actionUrl;

    /**
     * GUID string for tenant ID.
     */
    private ?string $azureTenantId;

    /**
     * The collection of compliance information associated with secure score control. Not implemented. Currently returns null.
     */
    private array $complianceInformation = [];

    /**
     * Control action category (Identity, Data, Device, Apps, Infrastructure).
     */
    private ?string $controlCategory;

    /**
     * Flag to indicate where the tenant has marked a control (ignored, thirdParty, reviewed) (supports update).
     */
    private array $controlStateUpdates = [];

    /**
     * Flag to indicate if a control is depreciated.
     */
    private ?bool $deprecated;

    /**
     * Resource cost of implemmentating control (low, moderate, high).
     */
    private ?string $implementationCost;

    /**
     * Time at which the control profile entity was last modified. The Timestamp type represents date and time
     */
    private ?\DateTimeInterface $lastModifiedDateTime;

    /**
     * max attainable score for the control.
     */
    private ?string $maxScore;

    /**
     * Microsoft's stack ranking of control.
     */
    private ?float $rank;

    /**
     * Description of what the control will help remediate.
     */
    private ?string $remediation;

    /**
     * Description of the impact on users of the remediation.
     */
    private ?string $remediationImpact;

    /**
     * Service that owns the control (Exchange, Sharepoint, Microsoft Entra ID).
     */
    private ?string $service;

    /**
     * List of threats the control mitigates (accountBreach, dataDeletion, dataExfiltration, dataSpillage, elevationOfPrivilege, maliciousInsider, passwordCracking, phishingOrWhaling, spoofing).
     */
    private ?string $threats;

    /**
     * Control tier (Core, Defense in Depth, Advanced.)
     */
    private ?string $tier;

    /**
     * Title of the control.
     */
    private ?string $title;

    /**
     * User impact of implementing control (low, moderate, high).
     */
    private ?string $userImpact;

    /**
     * Complex type containing details about the security product/service vendor, provider, and subprovider (for example, vendor=Microsoft; provider=SecureScore). Required.
     */
    private ?string $vendorInformation;

    public function getActionType(): ?string
    {
        return $this->actionType;
    }

    public function setActionType(?string $actionType): self
    {
        $this->actionType = $actionType;
        return $this;
    }

    public function getActionUrl(): ?string
    {
        return $this->actionUrl;
    }

    public function setActionUrl(?string $actionUrl): self
    {
        $this->actionUrl = $actionUrl;
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

    public function getComplianceInformation(): array
    {
        return $this->complianceInformation;
    }

    public function setComplianceInformation(array $complianceInformation): self
    {
        $this->complianceInformation = $complianceInformation;
        return $this;
    }

    public function getControlCategory(): ?string
    {
        return $this->controlCategory;
    }

    public function setControlCategory(?string $controlCategory): self
    {
        $this->controlCategory = $controlCategory;
        return $this;
    }

    public function getControlStateUpdates(): array
    {
        return $this->controlStateUpdates;
    }

    public function setControlStateUpdates(array $controlStateUpdates): self
    {
        $this->controlStateUpdates = $controlStateUpdates;
        return $this;
    }

    public function getDeprecated(): ?bool
    {
        return $this->deprecated;
    }

    public function setDeprecated(?bool $deprecated): self
    {
        $this->deprecated = $deprecated;
        return $this;
    }

    public function getImplementationCost(): ?string
    {
        return $this->implementationCost;
    }

    public function setImplementationCost(?string $implementationCost): self
    {
        $this->implementationCost = $implementationCost;
        return $this;
    }

    public function getLastModifiedDateTime(): ?\DateTimeInterface
    {
        return $this->lastModifiedDateTime;
    }

    public function setLastModifiedDateTime(?\DateTimeInterface $lastModifiedDateTime): self
    {
        $this->lastModifiedDateTime = $lastModifiedDateTime;
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

    public function getRank(): ?float
    {
        return $this->rank;
    }

    public function setRank(?float $rank): self
    {
        $this->rank = $rank;
        return $this;
    }

    public function getRemediation(): ?string
    {
        return $this->remediation;
    }

    public function setRemediation(?string $remediation): self
    {
        $this->remediation = $remediation;
        return $this;
    }

    public function getRemediationImpact(): ?string
    {
        return $this->remediationImpact;
    }

    public function setRemediationImpact(?string $remediationImpact): self
    {
        $this->remediationImpact = $remediationImpact;
        return $this;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(?string $service): self
    {
        $this->service = $service;
        return $this;
    }

    public function getThreats(): ?string
    {
        return $this->threats;
    }

    public function setThreats(?string $threats): self
    {
        $this->threats = $threats;
        return $this;
    }

    public function getTier(): ?string
    {
        return $this->tier;
    }

    public function setTier(?string $tier): self
    {
        $this->tier = $tier;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getUserImpact(): ?string
    {
        return $this->userImpact;
    }

    public function setUserImpact(?string $userImpact): self
    {
        $this->userImpact = $userImpact;
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
