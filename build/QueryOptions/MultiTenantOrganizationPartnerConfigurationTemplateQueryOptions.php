<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for MultiTenantOrganizationPartnerConfigurationTemplate resources
 *
 * Available select fields:
 * - automaticUserConsentSettings
 * - b2bCollaborationInbound
 * - b2bCollaborationOutbound
 * - b2bDirectConnectInbound
 * - b2bDirectConnectOutbound
 * - inboundTrust
 * - templateApplicationLevel
 */
class MultiTenantOrganizationPartnerConfigurationTemplateQueryOptions extends QueryOptions
{
    public const FIELD_AUTOMATIC_USER_CONSENT_SETTINGS = 'automaticUserConsentSettings';
    public const FIELD_B2B_COLLABORATION_INBOUND = 'b2bCollaborationInbound';
    public const FIELD_B2B_COLLABORATION_OUTBOUND = 'b2bCollaborationOutbound';
    public const FIELD_B2B_DIRECT_CONNECT_INBOUND = 'b2bDirectConnectInbound';
    public const FIELD_B2B_DIRECT_CONNECT_OUTBOUND = 'b2bDirectConnectOutbound';
    public const FIELD_INBOUND_TRUST = 'inboundTrust';
    public const FIELD_TEMPLATE_APPLICATION_LEVEL = 'templateApplicationLevel';

    /**
     * Select specific MultiTenantOrganizationPartnerConfigurationTemplate properties
     * 
     * @param array<string> $select Use MultiTenantOrganizationPartnerConfigurationTemplateQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
