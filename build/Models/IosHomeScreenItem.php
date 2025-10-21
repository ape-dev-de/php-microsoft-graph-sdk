<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosHomeScreenItem
 */
class IosHomeScreenItem
{
    public function __construct(
        /** Represents an item on the iOS Home Screen */
        public ?string $displayName = null
    ) {}
}
