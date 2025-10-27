<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityProtectionRoot
 */
class IdentityProtectionRoot
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** 
     * Risk detection in Microsoft Entra ID Protection and the associated information about the detection.
     * @var RiskDetection[]
     */
    public array $riskDetections = [];

    /** 
     * Microsoft Entra service principals that are at risk.
     * @var RiskyServicePrincipal[]
     */
    public array $riskyServicePrincipals = [];

    /** 
     * Users that are flagged as at-risk by Microsoft Entra ID Protection.
     * @var RiskyUser[]
     */
    public array $riskyUsers = [];

    /** 
     * Represents information about detected at-risk service principals in a Microsoft Entra tenant.
     * @var ServicePrincipalRiskDetection[]
     */
    public array $servicePrincipalRiskDetections = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['riskDetections'])) {
            $this->riskDetections = $data['riskDetections'];
        }
        if (isset($data['riskyServicePrincipals'])) {
            $this->riskyServicePrincipals = $data['riskyServicePrincipals'];
        }
        if (isset($data['riskyUsers'])) {
            $this->riskyUsers = $data['riskyUsers'];
        }
        if (isset($data['servicePrincipalRiskDetections'])) {
            $this->servicePrincipalRiskDetections = $data['servicePrincipalRiskDetections'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
