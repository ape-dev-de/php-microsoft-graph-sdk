<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentWorkflowExtension
 */
class AccessPackageAssignmentWorkflowExtension
{
    public function __construct(
        /** The callback configuration for a custom extension. */
        public ?string $callbackConfiguration = null,
        /** The userPrincipalName of the user or identity of the subject that created this resource. Read-only. */
        public ?string $createdBy = null,
        /** When the entity was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The userPrincipalName of the identity that last modified the entity. */
        public ?string $lastModifiedBy = null,
        /** When the entity was last modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null
    ) {}
}
