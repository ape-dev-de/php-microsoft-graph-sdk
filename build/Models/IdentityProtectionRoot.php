<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityProtectionRoot
 */
class IdentityProtectionRoot
{
    public function __construct(
        /** Risk detection in Microsoft Entra ID Protection and the associated information about the detection. */
        public array $riskDetections = [],
        /** Microsoft Entra service principals that are at risk. */
        public array $riskyServicePrincipals = [],
        /** Users that are flagged as at-risk by Microsoft Entra ID Protection. */
        public array $riskyUsers = [],
        /** @var string[] Represents information about detected at-risk service principals in a Microsoft Entra tenant. */
        public array $servicePrincipalRiskDetections = []
    ) {}
}
