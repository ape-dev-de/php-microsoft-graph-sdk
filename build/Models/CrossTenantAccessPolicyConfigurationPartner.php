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

    /** Identifies whether a tenant is a member of a multitenant organization. */
    public ?bool $isInMultiTenantOrganization = null;

    /** Identifies whether the partner-specific configuration is a Cloud Service Provider for your organization. */
    public ?bool $isServiceProvider = null;

    /** The tenant identifier for the partner Microsoft Entra organization. Read-only. Key. */
    public ?string $tenantId = null;

    /** 
     * Defines the partner-specific tenant restrictions configuration for users in your organization who access a partner organization using partner supplied identities on your network or devices.
     * @var CrossTenantAccessPolicyTenantRestrictions|\stdClass|null
     */
    public mixed $tenantRestrictions = null;

    /** 
     * Defines the cross-tenant policy for the synchronization of users from a partner tenant. Use this user synchronization policy to streamline collaboration between users in a multitenant organization by automating the creation, update, and deletion of users from one tenant to another.
     * @var CrossTenantIdentitySyncPolicyPartner|\stdClass|null
     */
    public mixed $identitySynchronization = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
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
        if (isset($data['isInMultiTenantOrganization'])) {
            $this->isInMultiTenantOrganization = $data['isInMultiTenantOrganization'];
        }
        if (isset($data['isServiceProvider'])) {
            $this->isServiceProvider = $data['isServiceProvider'];
        }
        if (isset($data['tenantId'])) {
            $this->tenantId = $data['tenantId'];
        }
        if (isset($data['tenantRestrictions'])) {
            $this->tenantRestrictions = $data['tenantRestrictions'];
        }
        if (isset($data['identitySynchronization'])) {
            $this->identitySynchronization = $data['identitySynchronization'];
        }
    }
}
