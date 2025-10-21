<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudAppSecurityState
 */
class CloudAppSecurityState
{
    /**
     * Destination IP Address of the connection to the cloud application/service.
     */
    private ?string $destinationServiceIp;

    /**
     * Cloud application/service name (for example ''Salesforce'', ''DropBox'', etc.).
     */
    private ?string $destinationServiceName;

    /**
     * Provider-generated/calculated risk score of the Cloud Application/Service. Recommended value range of 0-1, which equates to a percentage.
     */
    private ?string $riskScore;


    public function getDestinationServiceIp(): ?string
    {
        return $this->destinationServiceIp;
    }

    public function setDestinationServiceIp(?string $destinationServiceIp): self
    {
        $this->destinationServiceIp = $destinationServiceIp;
        return $this;
    }

    public function getDestinationServiceName(): ?string
    {
        return $this->destinationServiceName;
    }

    public function setDestinationServiceName(?string $destinationServiceName): self
    {
        $this->destinationServiceName = $destinationServiceName;
        return $this;
    }

    public function getRiskScore(): ?string
    {
        return $this->riskScore;
    }

    public function setRiskScore(?string $riskScore): self
    {
        $this->riskScore = $riskScore;
        return $this;
    }

}
