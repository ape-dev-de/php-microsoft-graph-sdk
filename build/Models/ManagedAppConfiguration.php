<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppConfiguration
 */
class ManagedAppConfiguration
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The date and time the policy was created. */
        public ?\DateTimeInterface $createdDateTime = null,
        /** The policy's description. */
        public ?string $description = null,
        /** Policy display name. */
        public ?string $displayName = null,
        /** Last time the policy was modified. */
        public ?\DateTimeInterface $lastModifiedDateTime = null,
        /** Version of the entity. */
        public ?string $version = null,
        /** A set of string key and string value pairs to be sent to apps for users to whom the configuration is scoped, unalterned by this service */
        public array $customSettings = []
    ) {}
}
