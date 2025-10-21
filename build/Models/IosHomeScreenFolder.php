<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosHomeScreenFolder
 */
class IosHomeScreenFolder
{
    public function __construct(
        /** @var string[] A folder containing pages of apps and web clips on the Home Screen. */
        public array $pages = []
    ) {}
}
