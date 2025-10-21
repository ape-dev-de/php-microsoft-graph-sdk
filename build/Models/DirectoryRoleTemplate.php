<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DirectoryRoleTemplate
 */
class DirectoryRoleTemplate
{
    public function __construct(
        /** The description to set for the directory role. Read-only. */
        public ?string $description = null,
        /** The display name to set for the directory role. Read-only. */
        public ?string $displayName = null
    ) {}
}
