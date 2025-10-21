<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityProtectionRoot
 */
class IdentityProtectionRoot
{
    /**
     * Risk detection in Microsoft Entra ID Protection and the associated information about the detection.
     */
    private array $riskDetections = [];

    /**
     * Microsoft Entra service principals that are at risk.
     */
    private array $riskyServicePrincipals = [];

    /**
     * Users that are flagged as at-risk by Microsoft Entra ID Protection.
     */
    private array $riskyUsers = [];

    /**
     * Represents information about detected at-risk service principals in a Microsoft Entra tenant.
     * @var string[]
     */
    private array $servicePrincipalRiskDetections = [];


    public function getRiskDetections(): array
    {
        return $this->riskDetections;
    }

    public function setRiskDetections(array $riskDetections): self
    {
        $this->riskDetections = $riskDetections;
        return $this;
    }

    public function getRiskyServicePrincipals(): array
    {
        return $this->riskyServicePrincipals;
    }

    public function setRiskyServicePrincipals(array $riskyServicePrincipals): self
    {
        $this->riskyServicePrincipals = $riskyServicePrincipals;
        return $this;
    }

    public function getRiskyUsers(): array
    {
        return $this->riskyUsers;
    }

    public function setRiskyUsers(array $riskyUsers): self
    {
        $this->riskyUsers = $riskyUsers;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getServicePrincipalRiskDetections(): array
    {
        return $this->servicePrincipalRiskDetections;
    }

    /**
     * @param string[] $servicePrincipalRiskDetections
     */
    public function setServicePrincipalRiskDetections(array $servicePrincipalRiskDetections): self
    {
        $this->servicePrincipalRiskDetections = $servicePrincipalRiskDetections;
        return $this;
    }

}
