<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganizationPartnerConfigurationTemplate
 */
class MultiTenantOrganizationPartnerConfigurationTemplate
{
    /**
     * Determines the partner-specific configuration for automatic user consent settings. Unless configured, the inboundAllowed and outboundAllowed properties are null and inherit from the default settings, which is always false.
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
     */
    private ?string $templateApplicationLevel;

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

    public function getTemplateApplicationLevel(): ?string
    {
        return $this->templateApplicationLevel;
    }

    public function setTemplateApplicationLevel(?string $templateApplicationLevel): self
    {
        $this->templateApplicationLevel = $templateApplicationLevel;
        return $this;
    }

}
