<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppStatus
 */
class ManagedAppStatus
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Friendly name of the status report. */
        public ?string $displayName = null,
        /** Represents app protection and configuration status for the organization. */
        public ?string $version = null
    ) {}
}
