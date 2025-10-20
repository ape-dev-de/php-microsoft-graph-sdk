<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityProtectionRoot resources
 *
 * Available select fields:
 * - riskDetections
 * - riskyServicePrincipals
 * - riskyUsers
 * - servicePrincipalRiskDetections
 */
class IdentityProtectionRootQueryOptions extends QueryOptions
{
    public const FIELD_RISK_DETECTIONS = 'riskDetections';
    public const FIELD_RISKY_SERVICE_PRINCIPALS = 'riskyServicePrincipals';
    public const FIELD_RISKY_USERS = 'riskyUsers';
    public const FIELD_SERVICE_PRINCIPAL_RISK_DETECTIONS = 'servicePrincipalRiskDetections';

    /**
     * Select specific IdentityProtectionRoot properties
     * 
     * @param array<string> $select Use IdentityProtectionRootQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
