<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyConfigurationPartner
 */
class CrossTenantAccessPolicyConfigurationPartner
{
    /**
     * Determines the partner-specific configuration for automatic user consent settings. Unless specifically configured, the inboundAllowed and outboundAllowed properties are null and inherit from the default settings, which is always false.
     */
    private ?string $automaticUserConsentSettings;

    /**
     * Defines your partner-specific configuration for users from other organizations accessing your resources via Microsoft Entra B2B collaboration.
     */
    private ?string $b2bCollaborationInbound;

    /**
     * Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Microsoft Entra B2B collaboration.
     */
    private ?string $b2bCollaborationOutbound;

    /**
     * Defines your partner-specific configuration for users from other organizations accessing your resources via Azure B2B direct connect.
     */
    private ?string $b2bDirectConnectInbound;

    /**
     * Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Microsoft Entra B2B direct connect.
     */
    private ?string $b2bDirectConnectOutbound;

    /**
     * Determines the partner-specific configuration for trusting other Conditional Access claims from external Microsoft Entra organizations.
     */
    private ?string $inboundTrust;

    /**
     * Identifies whether a tenant is a member of a multitenant organization.
     */
    private ?bool $isInMultiTenantOrganization;

    /**
     * Identifies whether the partner-specific configuration is a Cloud Service Provider for your organization.
     */
    private ?bool $isServiceProvider;

    /**
     * The tenant identifier for the partner Microsoft Entra organization. Read-only. Key.
     */
    private ?string $tenantId;

    /**
     * Defines the partner-specific tenant restrictions configuration for users in your organization who access a partner organization using partner supplied identities on your network or devices.
     */
    private ?string $tenantRestrictions;

    /**
     * Defines the cross-tenant policy for the synchronization of users from a partner tenant. Use this user synchronization policy to streamline collaboration between users in a multitenant organization by automating the creation, update, and deletion of users from one tenant to another.
     */
    private ?string $identitySynchronization;

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

    public function getIsInMultiTenantOrganization(): ?bool
    {
        return $this->isInMultiTenantOrganization;
    }

    public function setIsInMultiTenantOrganization(?bool $isInMultiTenantOrganization): self
    {
        $this->isInMultiTenantOrganization = $isInMultiTenantOrganization;
        return $this;
    }

    public function getIsServiceProvider(): ?bool
    {
        return $this->isServiceProvider;
    }

    public function setIsServiceProvider(?bool $isServiceProvider): self
    {
        $this->isServiceProvider = $isServiceProvider;
        return $this;
    }

    public function getTenantId(): ?string
    {
        return $this->tenantId;
    }

    public function setTenantId(?string $tenantId): self
    {
        $this->tenantId = $tenantId;
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

    public function getIdentitySynchronization(): ?string
    {
        return $this->identitySynchronization;
    }

    public function setIdentitySynchronization(?string $identitySynchronization): self
    {
        $this->identitySynchronization = $identitySynchronization;
        return $this;
    }

}
