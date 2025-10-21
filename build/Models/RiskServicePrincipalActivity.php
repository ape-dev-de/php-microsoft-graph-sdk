<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RiskServicePrincipalActivity
 */
class RiskServicePrincipalActivity
{
    /**
     * Details of the detected risk. Note: Details for this property are only available for Workload Identities Premium customers. Events in tenants without this license will be returned hidden. The possible values are: none, hidden, adminConfirmedServicePrincipalCompromised, adminDismissedAllRiskForServicePrincipal. Use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: adminConfirmedServicePrincipalCompromised , adminDismissedAllRiskForServicePrincipal.
     */
    private ?string $detail;

    /**
     * The type of risk event detected. The possible values are: investigationsThreatIntelligence, generic, adminConfirmedServicePrincipalCompromised, suspiciousSignins, leakedCredentials, anomalousServicePrincipalActivity, maliciousApplication, suspiciousApplication.
     * @var string[]
     */
    private array $riskEventTypes = [];


    public function getDetail(): ?string
    {
        return $this->detail;
    }

    public function setDetail(?string $detail): self
    {
        $this->detail = $detail;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getRiskEventTypes(): array
    {
        return $this->riskEventTypes;
    }

    /**
     * @param string[] $riskEventTypes
     */
    public function setRiskEventTypes(array $riskEventTypes): self
    {
        $this->riskEventTypes = $riskEventTypes;
        return $this;
    }

}
