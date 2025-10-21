<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppScope
 */
class AppScope
{
    public function __construct(
        /** Provides the display name of the app-specific resource represented by the app scope. Read-only. */
        public ?string $displayName = null,
        /** Describes the type of app-specific resource represented by the app scope. Read-only. */
        public ?string $type = null
    ) {}
}
