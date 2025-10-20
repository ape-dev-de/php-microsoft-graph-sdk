<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CrossTenantAccessPolicyConfigurationDefault resources
 *
 * Available select fields:
 * - automaticUserConsentSettings
 * - b2bCollaborationInbound
 * - b2bCollaborationOutbound
 * - b2bDirectConnectInbound
 * - b2bDirectConnectOutbound
 * - inboundTrust
 * - invitationRedemptionIdentityProviderConfiguration
 * - isServiceDefault
 * - tenantRestrictions
 */
class CrossTenantAccessPolicyConfigurationDefaultQueryOptions extends QueryOptions
{
    public const FIELD_AUTOMATIC_USER_CONSENT_SETTINGS = 'automaticUserConsentSettings';
    public const FIELD_B2B_COLLABORATION_INBOUND = 'b2bCollaborationInbound';
    public const FIELD_B2B_COLLABORATION_OUTBOUND = 'b2bCollaborationOutbound';
    public const FIELD_B2B_DIRECT_CONNECT_INBOUND = 'b2bDirectConnectInbound';
    public const FIELD_B2B_DIRECT_CONNECT_OUTBOUND = 'b2bDirectConnectOutbound';
    public const FIELD_INBOUND_TRUST = 'inboundTrust';
    public const FIELD_INVITATION_REDEMPTION_IDENTITY_PROVIDER_CONFIGURATION = 'invitationRedemptionIdentityProviderConfiguration';
    public const FIELD_IS_SERVICE_DEFAULT = 'isServiceDefault';
    public const FIELD_TENANT_RESTRICTIONS = 'tenantRestrictions';

    /**
     * Select specific CrossTenantAccessPolicyConfigurationDefault properties
     * 
     * @param array<string> $select Use CrossTenantAccessPolicyConfigurationDefaultQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
