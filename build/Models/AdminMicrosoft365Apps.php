<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AdminMicrosoft365Apps
 */
class AdminMicrosoft365Apps
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** A container for tenant-level settings for Microsoft 365 applications. */
        public ?string $installationOptions = null
    ) {}
}
