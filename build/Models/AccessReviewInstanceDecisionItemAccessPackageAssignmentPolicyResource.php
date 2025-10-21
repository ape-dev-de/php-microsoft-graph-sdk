<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource
 */
class AccessReviewInstanceDecisionItemAccessPackageAssignmentPolicyResource
{
    public function __construct(
        /** Identifier of the resource */
        public ?string $id = null,
        /** Display name of the resource */
        public ?string $displayName = null,
        /** Type of resource. Types include: Group, ServicePrincipal, DirectoryRole, AzureRole, AccessPackageAssignmentPolicy. */
        public ?string $type = null,
        /** Display name of the access package to which access has been granted. */
        public ?string $accessPackageDisplayName = null,
        /** Identifier of the access package to which access has been granted. */
        public ?string $accessPackageId = null
    ) {}
}
