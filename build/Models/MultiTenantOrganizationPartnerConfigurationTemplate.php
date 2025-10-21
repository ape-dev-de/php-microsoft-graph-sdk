<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MultiTenantOrganizationPartnerConfigurationTemplate
 */
class MultiTenantOrganizationPartnerConfigurationTemplate
{
    public function __construct(
        /** Determines the partner-specific configuration for automatic user consent settings. Unless configured, the inboundAllowed and outboundAllowed properties are null and inherit from the default settings, which is always false. */
        public ?string $automaticUserConsentSettings = null,
        /** Defines your partner-specific configuration for users from other organizations accessing your resources via Microsoft Entra B2B collaboration. */
        public ?string $b2bCollaborationInbound = null,
        /** Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Microsoft Entra B2B collaboration. */
        public ?string $b2bCollaborationOutbound = null,
        /** Defines your partner-specific configuration for users from other organizations accessing your resources via Azure B2B direct connect. */
        public ?string $b2bDirectConnectInbound = null,
        /** Defines your partner-specific configuration for users in your organization going outbound to access resources in another organization via Microsoft Entra B2B direct connect. */
        public ?string $b2bDirectConnectOutbound = null,
        /** Determines the partner-specific configuration for trusting other Conditional Access claims from external Microsoft Entra organizations. */
        public ?string $inboundTrust = null,
        /**  */
        public ?string $templateApplicationLevel = null
    ) {}
}
