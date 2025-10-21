<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * SecurityCase
 */
class SecurityCase
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?\DateTimeInterface $createdDateTime = null,
        /**  */
        public ?string $description = null,
        /**  */
        public ?string $displayName = null,
        /**  */
        public ?IdentitySet $lastModifiedBy = null,
        /**  */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /**  */
        public ?SecurityCaseStatus $status = null
    ) {}
}
