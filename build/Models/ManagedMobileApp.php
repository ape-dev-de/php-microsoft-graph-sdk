<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedMobileApp
 */
class ManagedMobileApp
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The identifier for an app with it's operating system type. */
        public ?string $mobileAppIdentifier = null,
        /** Version of the entity. */
        public ?string $version = null
    ) {}
}
