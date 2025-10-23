<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CloudAppSecurityState
 */
class CloudAppSecurityState
{
    /** Destination IP Address of the connection to the cloud application/service. */
    public ?string $destinationServiceIp = null;

    /** Cloud application/service name (for example 'Salesforce', 'DropBox', etc.). */
    public ?string $destinationServiceName = null;

    /** Provider-generated/calculated risk score of the Cloud Application/Service. Recommended value range of 0-1, which equates to a percentage. */
    public ?string $riskScore = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['destinationServiceIp'])) {
            $this->destinationServiceIp = $data['destinationServiceIp'];
        }
        if (isset($data['destinationServiceName'])) {
            $this->destinationServiceName = $data['destinationServiceName'];
        }
        if (isset($data['riskScore'])) {
            $this->riskScore = $data['riskScore'];
        }
    }
}
