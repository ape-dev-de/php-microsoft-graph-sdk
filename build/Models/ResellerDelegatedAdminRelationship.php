<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResellerDelegatedAdminRelationship
 */
class ResellerDelegatedAdminRelationship
{
    public function __construct(
        /** The tenant ID of the indirect provider partner who created the relationship for the indirect reseller partner. */
        public ?string $indirectProviderTenantId = null,
        /** Indicates the indirect reseller partner consent status. true indicates that the partner has yet to review the relationship; false indicates that the partner has already provided consent by approving or rejecting the relationship. */
        public ?string $isPartnerConsentPending = null
    ) {}
}
