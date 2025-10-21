<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyConfigurationPartner
 */
class CrossTenantAccessPolicyConfigurationPartner
{
    public function __construct(
        /** Determines the partner-specific configuration for automatic user consent settings. Unless specifically configured, the inboundAllowed and outboundAllowed properties are null and inherit from the default settings, which is always false. */
        public ?InboundOutboundPolicyConfiguration $automaticUserConsentSettings = null,
        /** Defines your partner-specific configuration for users from other organizations accessing your resources via Microsoft Entra B2B collaboration. */
        public ?CrossTenantAccessPolicyB2BSetting $b2bCollaborationInbound = null,
        /** Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Microsoft Entra B2B collaboration. */
        public ?CrossTenantAccessPolicyB2BSetting $b2bCollaborationOutbound = null,
        /** Defines your partner-specific configuration for users from other organizations accessing your resources via Azure B2B direct connect. */
        public ?CrossTenantAccessPolicyB2BSetting $b2bDirectConnectInbound = null,
        /** Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Microsoft Entra B2B direct connect. */
        public ?CrossTenantAccessPolicyB2BSetting $b2bDirectConnectOutbound = null,
        /** Determines the partner-specific configuration for trusting other Conditional Access claims from external Microsoft Entra organizations. */
        public ?CrossTenantAccessPolicyInboundTrust $inboundTrust = null,
        /** Identifies whether a tenant is a member of a multitenant organization. */
        public ?bool $isInMultiTenantOrganization = null,
        /** Identifies whether the partner-specific configuration is a Cloud Service Provider for your organization. */
        public ?bool $isServiceProvider = null,
        /** The tenant identifier for the partner Microsoft Entra organization. Read-only. Key. */
        public ?string $tenantId = null,
        /** Defines the partner-specific tenant restrictions configuration for users in your organization who access a partner organization using partner supplied identities on your network or devices. */
        public ?CrossTenantAccessPolicyTenantRestrictions $tenantRestrictions = null,
        /** Defines the cross-tenant policy for the synchronization of users from a partner tenant. Use this user synchronization policy to streamline collaboration between users in a multitenant organization by automating the creation, update, and deletion of users from one tenant to another. */
        public ?CrossTenantIdentitySyncPolicyPartner $identitySynchronization = null
    ) {}
}
