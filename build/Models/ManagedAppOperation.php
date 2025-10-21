<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppOperation
 */
class ManagedAppOperation
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The operation name. */
        public ?string $displayName = null,
        /** The last time the app operation was modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** The current state of the operation */
        public ?string $state = null,
        /** Version of the entity. */
        public ?string $version = null
    ) {}
}
