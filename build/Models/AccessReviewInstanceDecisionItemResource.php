<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewInstanceDecisionItemResource
 */
class AccessReviewInstanceDecisionItemResource
{
    public function __construct(
        /** Display name of the resource */
        public ?string $displayName = null,
        /** Identifier of the resource */
        public ?string $id = null,
        /** Type of resource. Types include: Group, ServicePrincipal, DirectoryRole, AzureRole, AccessPackageAssignmentPolicy. */
        public ?string $type = null
    ) {}
}
