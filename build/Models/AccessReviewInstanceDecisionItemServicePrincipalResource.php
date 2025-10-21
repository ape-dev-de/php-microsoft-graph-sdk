<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewInstanceDecisionItemServicePrincipalResource
 */
class AccessReviewInstanceDecisionItemServicePrincipalResource
{
    public function __construct(
        /** Identifier of the resource */
        public ?string $id = null,
        /** Display name of the resource */
        public ?string $displayName = null,
        /** Type of resource. Types include: Group, ServicePrincipal, DirectoryRole, AzureRole, AccessPackageAssignmentPolicy. */
        public ?string $type = null,
        /** The globally unique identifier of the application to which access has been granted. */
        public ?string $appId = null
    ) {}
}
