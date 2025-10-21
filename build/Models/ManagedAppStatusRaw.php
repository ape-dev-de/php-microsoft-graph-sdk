<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppStatusRaw
 */
class ManagedAppStatusRaw
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Friendly name of the status report. */
        public ?string $displayName = null,
        /** Represents app protection and configuration status for the organization. */
        public ?string $version = null,
        /** Represents an un-typed status report about organizations app protection and configuration. */
        public ?string $content = null
    ) {}
}
