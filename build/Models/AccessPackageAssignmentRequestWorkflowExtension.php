<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessPackageAssignmentRequestWorkflowExtension
 */
class AccessPackageAssignmentRequestWorkflowExtension
{
    public function __construct(
        /** The callback configuration for a custom extension. */
        public ?string $callbackConfiguration = null,
        /** The userPrincipalName of the user or identity of the subject that created this resource. Read-only. */
        public ?string $createdBy = null,
        /** When the object was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The userPrincipalName of the identity that last modified the object. */
        public ?string $lastModifiedBy = null,
        /** When the object was last modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null
    ) {}
}
