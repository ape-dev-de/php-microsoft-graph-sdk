<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AccessReviewReviewer
 */
class AccessReviewReviewer
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The date when the reviewer was added for the access review. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** Name of reviewer. */
        public ?string $displayName = null,
        /** User principal name of the reviewer. */
        public ?string $userPrincipalName = null
    ) {}
}
