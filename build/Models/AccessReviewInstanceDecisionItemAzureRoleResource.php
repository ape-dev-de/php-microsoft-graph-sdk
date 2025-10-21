<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewInstanceDecisionItemAzureRoleResource
 */
class AccessReviewInstanceDecisionItemAzureRoleResource
{
    public function __construct(
        /** Identifier of the resource */
        public ?string $id = null,
        /** Display name of the resource */
        public ?string $displayName = null,
        /** Type of resource. Types include: Group, ServicePrincipal, DirectoryRole, AzureRole, AccessPackageAssignmentPolicy. */
        public ?string $type = null,
        /** Details of the scope this role is associated with. */
        public ?AccessReviewInstanceDecisionItemResource $scope = null
    ) {}
}
