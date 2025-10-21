<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * FileStorageContainerViewpoint
 */
class FileStorageContainerViewpoint
{
    public function __construct(
        /** The current user's effective role. Read-only. */
        public ?string $effectiveRole = null
    ) {}
}
