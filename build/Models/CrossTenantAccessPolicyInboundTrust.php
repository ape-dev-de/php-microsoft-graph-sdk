<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyInboundTrust
 */
class CrossTenantAccessPolicyInboundTrust
{
    public function __construct(
        /** Specifies whether compliant devices from external Microsoft Entra organizations are trusted. */
        public ?bool $isCompliantDeviceAccepted = null,
        /** Specifies whether Microsoft Entra hybrid joined devices from external Microsoft Entra organizations are trusted. */
        public ?bool $isHybridAzureADJoinedDeviceAccepted = null,
        /** Specifies whether MFA from external Microsoft Entra organizations is trusted. */
        public ?bool $isMfaAccepted = null
    ) {}
}
