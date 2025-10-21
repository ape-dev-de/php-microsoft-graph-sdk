<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for IdentityGovernance resources
 *
 * Available select fields:
 * - accessReviews
 * - appConsent
 * - entitlementManagement
 * - lifecycleWorkflows
 * - privilegedAccess
 * - termsOfUse
 */
class IdentityGovernanceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for IdentityGovernance
     */
    public const FIELD_ACCESS_REVIEWS = 'accessReviews';
    public const FIELD_APP_CONSENT = 'appConsent';
    public const FIELD_ENTITLEMENT_MANAGEMENT = 'entitlementManagement';
    public const FIELD_LIFECYCLE_WORKFLOWS = 'lifecycleWorkflows';
    public const FIELD_PRIVILEGED_ACCESS = 'privilegedAccess';
    public const FIELD_TERMS_OF_USE = 'termsOfUse';

    /**
     * Select specific IdentityGovernance properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
