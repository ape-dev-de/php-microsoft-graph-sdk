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
        /** Version of the entity. */
        public ?string $version = null,
        /** Status report content. */
        public ?string $content = null
    ) {}
}
