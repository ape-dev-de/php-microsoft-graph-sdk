<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganizationPartnerConfigurationTemplate
 */
class MultiTenantOrganizationPartnerConfigurationTemplate
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Determines the partner-specific configuration for automatic user consent settings. Unless configured, the inboundAllowed and outboundAllowed properties are null and inherit from the default settings, which is always false.
     * @var InboundOutboundPolicyConfiguration|\stdClass|null
     */
    public mixed $automaticUserConsentSettings = null;

    /** 
     * Defines your partner-specific configuration for users from other organizations accessing your resources via Microsoft Entra B2B collaboration.
     * @var CrossTenantAccessPolicyB2BSetting|\stdClass|null
     */
    public mixed $b2bCollaborationInbound = null;

    /** 
     * Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Microsoft Entra B2B collaboration.
     * @var CrossTenantAccessPolicyB2BSetting|\stdClass|null
     */
    public mixed $b2bCollaborationOutbound = null;

    /** 
     * Defines your partner-specific configuration for users from other organizations accessing your resources via Azure B2B direct connect.
     * @var CrossTenantAccessPolicyB2BSetting|\stdClass|null
     */
    public mixed $b2bDirectConnectInbound = null;

    /** 
     * Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Microsoft Entra B2B direct connect.
     * @var CrossTenantAccessPolicyB2BSetting|\stdClass|null
     */
    public mixed $b2bDirectConnectOutbound = null;

    /** 
     * Determines the partner-specific configuration for trusting other Conditional Access claims from external Microsoft Entra organizations.
     * @var CrossTenantAccessPolicyInboundTrust|\stdClass|null
     */
    public mixed $inboundTrust = null;

    /**  */
    public ?TemplateApplicationLevel $templateApplicationLevel = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['automaticUserConsentSettings'])) {
            $this->automaticUserConsentSettings = $data['automaticUserConsentSettings'];
        }
        if (isset($data['b2bCollaborationInbound'])) {
            $this->b2bCollaborationInbound = $data['b2bCollaborationInbound'];
        }
        if (isset($data['b2bCollaborationOutbound'])) {
            $this->b2bCollaborationOutbound = $data['b2bCollaborationOutbound'];
        }
        if (isset($data['b2bDirectConnectInbound'])) {
            $this->b2bDirectConnectInbound = $data['b2bDirectConnectInbound'];
        }
        if (isset($data['b2bDirectConnectOutbound'])) {
            $this->b2bDirectConnectOutbound = $data['b2bDirectConnectOutbound'];
        }
        if (isset($data['inboundTrust'])) {
            $this->inboundTrust = $data['inboundTrust'];
        }
        if (isset($data['templateApplicationLevel'])) {
            $this->templateApplicationLevel = $data['templateApplicationLevel'];
        }
    }
}
