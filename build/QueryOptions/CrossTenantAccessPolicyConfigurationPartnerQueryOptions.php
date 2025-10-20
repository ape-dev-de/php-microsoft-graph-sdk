<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CrossTenantAccessPolicyConfigurationPartner resources
 *
 * Available select fields:
 * - automaticUserConsentSettings
 * - b2bCollaborationInbound
 * - b2bCollaborationOutbound
 * - b2bDirectConnectInbound
 * - b2bDirectConnectOutbound
 * - inboundTrust
 * - isInMultiTenantOrganization
 * - isServiceProvider
 * - tenantId
 * - tenantRestrictions
 * - identitySynchronization
 */
class CrossTenantAccessPolicyConfigurationPartnerQueryOptions extends QueryOptions
{
    public const FIELD_AUTOMATIC_USER_CONSENT_SETTINGS = 'automaticUserConsentSettings';
    public const FIELD_B2B_COLLABORATION_INBOUND = 'b2bCollaborationInbound';
    public const FIELD_B2B_COLLABORATION_OUTBOUND = 'b2bCollaborationOutbound';
    public const FIELD_B2B_DIRECT_CONNECT_INBOUND = 'b2bDirectConnectInbound';
    public const FIELD_B2B_DIRECT_CONNECT_OUTBOUND = 'b2bDirectConnectOutbound';
    public const FIELD_INBOUND_TRUST = 'inboundTrust';
    public const FIELD_IS_IN_MULTI_TENANT_ORGANIZATION = 'isInMultiTenantOrganization';
    public const FIELD_IS_SERVICE_PROVIDER = 'isServiceProvider';
    public const FIELD_TENANT_ID = 'tenantId';
    public const FIELD_TENANT_RESTRICTIONS = 'tenantRestrictions';
    public const FIELD_IDENTITY_SYNCHRONIZATION = 'identitySynchronization';

    /**
     * Select specific CrossTenantAccessPolicyConfigurationPartner properties
     * 
     * @param array<string> $select Use CrossTenantAccessPolicyConfigurationPartnerQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
