<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DirectoryObjectPartnerReference
 */
class DirectoryObjectPartnerReference
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Date and time when this object was deleted. Always null when the object hasn't been deleted. */
        public ?\DateTimeInterface $deletedDateTime = null,
        /** Description of the object returned. Read-only. */
        public ?string $description = null,
        /** Name of directory object being returned, like group or application. Read-only. */
        public ?string $displayName = null,
        /** The tenant identifier for the partner tenant. Read-only. */
        public ?string $externalPartnerTenantId = null,
        /** The type of the referenced object in the partner tenant. Read-only. */
        public ?string $objectType = null
    ) {}
}
