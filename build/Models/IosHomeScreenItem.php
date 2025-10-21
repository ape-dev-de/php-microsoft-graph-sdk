<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosHomeScreenItem
 */
class IosHomeScreenItem
{
    public function __construct(
        /** Name of the app */
        public ?string $displayName = null
    ) {}
}
