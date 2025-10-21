<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosHomeScreenApp
 */
class IosHomeScreenApp
{
    public function __construct(
        /** Represents an item on the iOS Home Screen */
        public ?string $displayName = null,
        /** Represents an icon for an app on the Home Screen */
        public ?string $bundleID = null
    ) {}
}
