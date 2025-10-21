<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IdentityGovernance
 */
class IdentityGovernance
{
    public function __construct(
        /**  */
        public ?AccessReviewSet $accessReviews = null,
        /**  */
        public ?AppConsentApprovalRoute $appConsent = null,
        /**  */
        public ?EntitlementManagement $entitlementManagement = null,
        /**  */
        public ?IdentityGovernanceLifecycleWorkflowsContainer $lifecycleWorkflows = null,
        /**  */
        public ?PrivilegedAccessRoot $privilegedAccess = null,
        /**  */
        public ?TermsOfUseContainer $termsOfUse = null
    ) {}
}
