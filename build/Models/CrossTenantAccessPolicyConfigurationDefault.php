<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyConfigurationDefault
 */
class CrossTenantAccessPolicyConfigurationDefault
{
    /** @var array<string, mixed> Raw data from API response */
    private array $rawData = [];

    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** 
     * Determines the default configuration for automatic user consent settings. The inboundAllowed and outboundAllowed properties are always false and can't be updated in the default configuration. Read-only.
     * @var InboundOutboundPolicyConfiguration|\stdClass|null
     */
    public mixed $automaticUserConsentSettings = null;

    /** 
     * Defines your default configuration for users from other organizations accessing your resources via Microsoft Entra B2B collaboration.
     * @var CrossTenantAccessPolicyB2BSetting|\stdClass|null
     */
    public mixed $b2bCollaborationInbound = null;

    /** 
     * Defines your default configuration for users in your organization going outbound to access resources in another organization via Microsoft Entra B2B collaboration.
     * @var CrossTenantAccessPolicyB2BSetting|\stdClass|null
     */
    public mixed $b2bCollaborationOutbound = null;

    /** 
     * Defines your default configuration for users from other organizations accessing your resources via Microsoft Entra B2B direct connect.
     * @var CrossTenantAccessPolicyB2BSetting|\stdClass|null
     */
    public mixed $b2bDirectConnectInbound = null;

    /** 
     * Defines your default configuration for users in your organization going outbound to access resources in another organization via Microsoft Entra B2B direct connect.
     * @var CrossTenantAccessPolicyB2BSetting|\stdClass|null
     */
    public mixed $b2bDirectConnectOutbound = null;

    /** 
     * Determines the default configuration for trusting other Conditional Access claims from external Microsoft Entra organizations.
     * @var CrossTenantAccessPolicyInboundTrust|\stdClass|null
     */
    public mixed $inboundTrust = null;

    /** 
     * Defines the priority order based on which an identity provider is selected during invitation redemption for a guest user.
     * @var DefaultInvitationRedemptionIdentityProviderConfiguration|\stdClass|null
     */
    public mixed $invitationRedemptionIdentityProviderConfiguration = null;

    /** If true, the default configuration is set to the system default configuration. If false, the default settings are customized. */
    public ?bool $isServiceDefault = null;

    /** 
     * Defines the default tenant restrictions configuration for users in your organization who access an external organization on your network or devices.
     * @var CrossTenantAccessPolicyTenantRestrictions|\stdClass|null
     */
    public mixed $tenantRestrictions = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        $this->rawData = $data;
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['automaticUserConsentSettings'])) {
            $this->automaticUserConsentSettings = is_array($data['automaticUserConsentSettings']) ? new InboundOutboundPolicyConfiguration($data['automaticUserConsentSettings']) : $data['automaticUserConsentSettings'];
        }
        if (isset($data['b2bCollaborationInbound'])) {
            $this->b2bCollaborationInbound = is_array($data['b2bCollaborationInbound']) ? new CrossTenantAccessPolicyB2BSetting($data['b2bCollaborationInbound']) : $data['b2bCollaborationInbound'];
        }
        if (isset($data['b2bCollaborationOutbound'])) {
            $this->b2bCollaborationOutbound = is_array($data['b2bCollaborationOutbound']) ? new CrossTenantAccessPolicyB2BSetting($data['b2bCollaborationOutbound']) : $data['b2bCollaborationOutbound'];
        }
        if (isset($data['b2bDirectConnectInbound'])) {
            $this->b2bDirectConnectInbound = is_array($data['b2bDirectConnectInbound']) ? new CrossTenantAccessPolicyB2BSetting($data['b2bDirectConnectInbound']) : $data['b2bDirectConnectInbound'];
        }
        if (isset($data['b2bDirectConnectOutbound'])) {
            $this->b2bDirectConnectOutbound = is_array($data['b2bDirectConnectOutbound']) ? new CrossTenantAccessPolicyB2BSetting($data['b2bDirectConnectOutbound']) : $data['b2bDirectConnectOutbound'];
        }
        if (isset($data['inboundTrust'])) {
            $this->inboundTrust = is_array($data['inboundTrust']) ? new CrossTenantAccessPolicyInboundTrust($data['inboundTrust']) : $data['inboundTrust'];
        }
        if (isset($data['invitationRedemptionIdentityProviderConfiguration'])) {
            $this->invitationRedemptionIdentityProviderConfiguration = is_array($data['invitationRedemptionIdentityProviderConfiguration']) ? new DefaultInvitationRedemptionIdentityProviderConfiguration($data['invitationRedemptionIdentityProviderConfiguration']) : $data['invitationRedemptionIdentityProviderConfiguration'];
        }
        if (isset($data['isServiceDefault'])) {
            $this->isServiceDefault = $data['isServiceDefault'];
        }
        if (isset($data['tenantRestrictions'])) {
            $this->tenantRestrictions = is_array($data['tenantRestrictions']) ? new CrossTenantAccessPolicyTenantRestrictions($data['tenantRestrictions']) : $data['tenantRestrictions'];
        }
    }

    /**
     * Get raw data from API response
     * @return array<string, mixed>
     */
    public function getRaw(): array
    {
        return $this->rawData;
    }
}
