<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * CrossTenantAccessPolicyConfigurationDefault
 */
class CrossTenantAccessPolicyConfigurationDefault
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Determines the default configuration for automatic user consent settings. The inboundAllowed and outboundAllowed properties are always false and can't be updated in the default configuration. Read-only. */
        public ?InboundOutboundPolicyConfiguration $automaticUserConsentSettings = null,
        /** Defines your default configuration for users from other organizations accessing your resources via Microsoft Entra B2B collaboration. */
        public ?CrossTenantAccessPolicyB2BSetting $b2bCollaborationInbound = null,
        /** Defines your default configuration for users in your organization going outbound to access resources in another organization via Microsoft Entra B2B collaboration. */
        public ?CrossTenantAccessPolicyB2BSetting $b2bCollaborationOutbound = null,
        /** Defines your default configuration for users from other organizations accessing your resources via Microsoft Entra B2B direct connect. */
        public ?CrossTenantAccessPolicyB2BSetting $b2bDirectConnectInbound = null,
        /** Defines your default configuration for users in your organization going outbound to access resources in another organization via Microsoft Entra B2B direct connect. */
        public ?CrossTenantAccessPolicyB2BSetting $b2bDirectConnectOutbound = null,
        /** Determines the default configuration for trusting other Conditional Access claims from external Microsoft Entra organizations. */
        public ?CrossTenantAccessPolicyInboundTrust $inboundTrust = null,
        /** Defines the priority order based on which an identity provider is selected during invitation redemption for a guest user. */
        public ?DefaultInvitationRedemptionIdentityProviderConfiguration $invitationRedemptionIdentityProviderConfiguration = null,
        /** If true, the default configuration is set to the system default configuration. If false, the default settings are customized. */
        public ?bool $isServiceDefault = null,
        /** Defines the default tenant restrictions configuration for users in your organization who access an external organization on your network or devices. */
        public ?CrossTenantAccessPolicyTenantRestrictions $tenantRestrictions = null
    ) {}
}
