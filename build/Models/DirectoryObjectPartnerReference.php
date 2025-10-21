<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DirectoryObjectPartnerReference
 */
class DirectoryObjectPartnerReference
{
    public function __construct(
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
