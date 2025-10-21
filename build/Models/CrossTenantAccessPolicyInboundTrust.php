<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyInboundTrust
 */
class CrossTenantAccessPolicyInboundTrust
{
    /**
     * Specifies whether compliant devices from external Microsoft Entra organizations are trusted.
     */
    private ?bool $isCompliantDeviceAccepted;

    /**
     * Specifies whether Microsoft Entra hybrid joined devices from external Microsoft Entra organizations are trusted.
     */
    private ?bool $isHybridAzureADJoinedDeviceAccepted;

    /**
     * Specifies whether MFA from external Microsoft Entra organizations is trusted.
     */
    private ?string $isMfaAccepted;


    public function getIsCompliantDeviceAccepted(): ?bool
    {
        return $this->isCompliantDeviceAccepted;
    }

    public function setIsCompliantDeviceAccepted(?bool $isCompliantDeviceAccepted): self
    {
        $this->isCompliantDeviceAccepted = $isCompliantDeviceAccepted;
        return $this;
    }

    public function getIsHybridAzureADJoinedDeviceAccepted(): ?bool
    {
        return $this->isHybridAzureADJoinedDeviceAccepted;
    }

    public function setIsHybridAzureADJoinedDeviceAccepted(?bool $isHybridAzureADJoinedDeviceAccepted): self
    {
        $this->isHybridAzureADJoinedDeviceAccepted = $isHybridAzureADJoinedDeviceAccepted;
        return $this;
    }

    public function getIsMfaAccepted(): ?string
    {
        return $this->isMfaAccepted;
    }

    public function setIsMfaAccepted(?string $isMfaAccepted): self
    {
        $this->isMfaAccepted = $isMfaAccepted;
        return $this;
    }

}
