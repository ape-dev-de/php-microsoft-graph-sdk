<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource
 */
class AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource
{
    public function __construct(
        /** Display name of the access package to which access has been granted. */
        public ?string $accessPackageDisplayName = null,
        /** Identifier of the access package to which access has been granted. */
        public ?string $accessPackageId = null
    ) {}
}
