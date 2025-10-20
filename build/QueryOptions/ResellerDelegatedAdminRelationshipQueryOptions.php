<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ResellerDelegatedAdminRelationship resources
 *
 * Available select fields:
 * - indirectProviderTenantId
 * - isPartnerConsentPending
 */
class ResellerDelegatedAdminRelationshipQueryOptions extends QueryOptions
{
    public const FIELD_INDIRECT_PROVIDER_TENANT_ID = 'indirectProviderTenantId';
    public const FIELD_IS_PARTNER_CONSENT_PENDING = 'isPartnerConsentPending';

    /**
     * Select specific ResellerDelegatedAdminRelationship properties
     * 
     * @param array<string> $select Use ResellerDelegatedAdminRelationshipQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
