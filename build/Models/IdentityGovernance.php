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
        public ?string $accessReviews = null,
        /**  */
        public ?string $appConsent = null,
        /**  */
        public ?string $entitlementManagement = null,
        /**  */
        public ?string $lifecycleWorkflows = null,
        /**  */
        public ?string $privilegedAccess = null,
        /**  */
        public ?string $termsOfUse = null
    ) {}
}
