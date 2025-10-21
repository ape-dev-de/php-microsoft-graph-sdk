<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyConfigurationDefault
 */
class CrossTenantAccessPolicyConfigurationDefault
{
    /**
     * Determines the default configuration for automatic user consent settings. The inboundAllowed and outboundAllowed properties are always false and can't be updated in the default configuration. Read-only.
     */
    private ?string $automaticUserConsentSettings;

    /**
     * Defines your default configuration for users from other organizations accessing your resources via Microsoft Entra B2B collaboration.
     */
    private ?string $b2bCollaborationInbound;

    /**
     * Defines your default configuration for users in your organization going outbound to access resources in another organization via Microsoft Entra B2B collaboration.
     */
    private ?string $b2bCollaborationOutbound;

    /**
     * Defines your default configuration for users from other organizations accessing your resources via Microsoft Entra B2B direct connect.
     */
    private ?string $b2bDirectConnectInbound;

    /**
     * Defines your default configuration for users in your organization going outbound to access resources in another organization via Microsoft Entra B2B direct connect.
     */
    private ?string $b2bDirectConnectOutbound;

    /**
     * Determines the default configuration for trusting other Conditional Access claims from external Microsoft Entra organizations.
     */
    private ?string $inboundTrust;

    /**
     * Defines the priority order based on which an identity provider is selected during invitation redemption for a guest user.
     */
    private ?string $invitationRedemptionIdentityProviderConfiguration;

    /**
     * If true, the default configuration is set to the system default configuration. If false, the default settings are customized.
     */
    private ?bool $isServiceDefault;

    /**
     * Defines the default tenant restrictions configuration for users in your organization who access an external organization on your network or devices.
     */
    private ?string $tenantRestrictions;


    public function getAutomaticUserConsentSettings(): ?string
    {
        return $this->automaticUserConsentSettings;
    }

    public function setAutomaticUserConsentSettings(?string $automaticUserConsentSettings): self
    {
        $this->automaticUserConsentSettings = $automaticUserConsentSettings;
        return $this;
    }

    public function getB2bCollaborationInbound(): ?string
    {
        return $this->b2bCollaborationInbound;
    }

    public function setB2bCollaborationInbound(?string $b2bCollaborationInbound): self
    {
        $this->b2bCollaborationInbound = $b2bCollaborationInbound;
        return $this;
    }

    public function getB2bCollaborationOutbound(): ?string
    {
        return $this->b2bCollaborationOutbound;
    }

    public function setB2bCollaborationOutbound(?string $b2bCollaborationOutbound): self
    {
        $this->b2bCollaborationOutbound = $b2bCollaborationOutbound;
        return $this;
    }

    public function getB2bDirectConnectInbound(): ?string
    {
        return $this->b2bDirectConnectInbound;
    }

    public function setB2bDirectConnectInbound(?string $b2bDirectConnectInbound): self
    {
        $this->b2bDirectConnectInbound = $b2bDirectConnectInbound;
        return $this;
    }

    public function getB2bDirectConnectOutbound(): ?string
    {
        return $this->b2bDirectConnectOutbound;
    }

    public function setB2bDirectConnectOutbound(?string $b2bDirectConnectOutbound): self
    {
        $this->b2bDirectConnectOutbound = $b2bDirectConnectOutbound;
        return $this;
    }

    public function getInboundTrust(): ?string
    {
        return $this->inboundTrust;
    }

    public function setInboundTrust(?string $inboundTrust): self
    {
        $this->inboundTrust = $inboundTrust;
        return $this;
    }

    public function getInvitationRedemptionIdentityProviderConfiguration(): ?string
    {
        return $this->invitationRedemptionIdentityProviderConfiguration;
    }

    public function setInvitationRedemptionIdentityProviderConfiguration(?string $invitationRedemptionIdentityProviderConfiguration): self
    {
        $this->invitationRedemptionIdentityProviderConfiguration = $invitationRedemptionIdentityProviderConfiguration;
        return $this;
    }

    public function getIsServiceDefault(): ?bool
    {
        return $this->isServiceDefault;
    }

    public function setIsServiceDefault(?bool $isServiceDefault): self
    {
        $this->isServiceDefault = $isServiceDefault;
        return $this;
    }

    public function getTenantRestrictions(): ?string
    {
        return $this->tenantRestrictions;
    }

    public function setTenantRestrictions(?string $tenantRestrictions): self
    {
        $this->tenantRestrictions = $tenantRestrictions;
        return $this;
    }

}
