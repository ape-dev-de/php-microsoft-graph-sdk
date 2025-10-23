<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyInboundTrust
 */
class CrossTenantAccessPolicyInboundTrust
{
    /** Specifies whether compliant devices from external Microsoft Entra organizations are trusted. */
    public ?bool $isCompliantDeviceAccepted = null;

    /** Specifies whether Microsoft Entra hybrid joined devices from external Microsoft Entra organizations are trusted. */
    public ?bool $isHybridAzureADJoinedDeviceAccepted = null;

    /** Specifies whether MFA from external Microsoft Entra organizations is trusted. */
    public ?bool $isMfaAccepted = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['isCompliantDeviceAccepted'])) {
            $this->isCompliantDeviceAccepted = $data['isCompliantDeviceAccepted'];
        }
        if (isset($data['isHybridAzureADJoinedDeviceAccepted'])) {
            $this->isHybridAzureADJoinedDeviceAccepted = $data['isHybridAzureADJoinedDeviceAccepted'];
        }
        if (isset($data['isMfaAccepted'])) {
            $this->isMfaAccepted = $data['isMfaAccepted'];
        }
    }
}
