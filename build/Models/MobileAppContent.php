<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * MobileAppContent
 */
class MobileAppContent
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** The collection of contained apps in a MobileLobApp acting as a package. */
        public array $containedApps = [],
        /** The list of files for this app content version. */
        public array $files = []
    ) {}
}
