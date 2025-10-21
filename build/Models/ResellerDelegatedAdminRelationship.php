<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ResellerDelegatedAdminRelationship
 */
class ResellerDelegatedAdminRelationship
{
    /**
     * The tenant ID of the indirect provider partner who created the relationship for the indirect reseller partner.
     */
    private ?string $indirectProviderTenantId;

    /**
     * Indicates the indirect reseller partner consent status. true indicates that the partner has yet to review the relationship; false indicates that the partner has already provided consent by approving or rejecting the relationship.
     */
    private ?string $isPartnerConsentPending;


    public function getIndirectProviderTenantId(): ?string
    {
        return $this->indirectProviderTenantId;
    }

    public function setIndirectProviderTenantId(?string $indirectProviderTenantId): self
    {
        $this->indirectProviderTenantId = $indirectProviderTenantId;
        return $this;
    }

    public function getIsPartnerConsentPending(): ?string
    {
        return $this->isPartnerConsentPending;
    }

    public function setIsPartnerConsentPending(?string $isPartnerConsentPending): self
    {
        $this->isPartnerConsentPending = $isPartnerConsentPending;
        return $this;
    }

}
