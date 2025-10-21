<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosHomeScreenFolder
 */
class IosHomeScreenFolder
{
    public function __construct(
        /** Name of the app */
        public ?string $displayName = null,
        /** Pages of Home Screen Layout Icons which must be applications or web clips. This collection can contain a maximum of 500 elements. */
        public array $pages = []
    ) {}
}
