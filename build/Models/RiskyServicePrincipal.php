<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RiskyServicePrincipal
 */
class RiskyServicePrincipal
{
    /**
     * The globally unique identifier for the associated application (its appId property), if any.
     */
    private ?string $appId;

    /**
     * The display name for the service principal.
     */
    private ?string $displayName;

    /**
     * true if the service principal account is enabled; otherwise, false.
     */
    private ?bool $isEnabled;

    /**
     * Indicates whether Microsoft Entra ID is currently processing the service principal's risky state.
     */
    private ?bool $isProcessing;

    /**
     * Details of the detected risk. Note: Details for this property are only available for Workload Identities Premium customers. Events in tenants without this license will be returned hidden. The possible values are: none, hidden,  unknownFutureValue, adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal. Use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: adminConfirmedServicePrincipalCompromised , adminDismissedAllRiskForServicePrincipal.
     */
    private ?string $riskDetail;

    /**
     * The date and time that the risk state was last updated. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2021 is 2021-01-01T00:00:00Z. Supports $filter (eq).
     */
    private ?\DateTimeInterface $riskLastUpdatedDateTime;

    /**
     * Level of the detected risky workload identity. The possible values are: low, medium, high, hidden, none, unknownFutureValue. Supports $filter (eq).
     */
    private ?string $riskLevel;

    /**
     * State of the service principal''s risk. The possible values are: none, confirmedSafe, remediated, dismissed, atRisk, confirmedCompromised, unknownFutureValue.
     */
    private ?string $riskState;

    /**
     * Identifies whether the service principal represents an Application, a ManagedIdentity, or a legacy application (socialIdp). This is set by Microsoft Entra ID internally and is inherited from servicePrincipal.
     */
    private ?string $servicePrincipalType;

    /**
     * Represents the risk history of Microsoft Entra service principals.
     */
    private ?string $history;

    public function getAppId(): ?string
    {
        return $this->appId;
    }

    public function setAppId(?string $appId): self
    {
        $this->appId = $appId;
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

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(?bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;
        return $this;
    }

    public function getIsProcessing(): ?bool
    {
        return $this->isProcessing;
    }

    public function setIsProcessing(?bool $isProcessing): self
    {
        $this->isProcessing = $isProcessing;
        return $this;
    }

    public function getRiskDetail(): ?string
    {
        return $this->riskDetail;
    }

    public function setRiskDetail(?string $riskDetail): self
    {
        $this->riskDetail = $riskDetail;
        return $this;
    }

    public function getRiskLastUpdatedDateTime(): ?\DateTimeInterface
    {
        return $this->riskLastUpdatedDateTime;
    }

    public function setRiskLastUpdatedDateTime(?\DateTimeInterface $riskLastUpdatedDateTime): self
    {
        $this->riskLastUpdatedDateTime = $riskLastUpdatedDateTime;
        return $this;
    }

    public function getRiskLevel(): ?string
    {
        return $this->riskLevel;
    }

    public function setRiskLevel(?string $riskLevel): self
    {
        $this->riskLevel = $riskLevel;
        return $this;
    }

    public function getRiskState(): ?string
    {
        return $this->riskState;
    }

    public function setRiskState(?string $riskState): self
    {
        $this->riskState = $riskState;
        return $this;
    }

    public function getServicePrincipalType(): ?string
    {
        return $this->servicePrincipalType;
    }

    public function setServicePrincipalType(?string $servicePrincipalType): self
    {
        $this->servicePrincipalType = $servicePrincipalType;
        return $this;
    }

    public function getHistory(): ?string
    {
        return $this->history;
    }

    public function setHistory(?string $history): self
    {
        $this->history = $history;
        return $this;
    }

}
