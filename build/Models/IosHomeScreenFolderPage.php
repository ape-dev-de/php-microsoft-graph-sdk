<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosHomeScreenFolderPage
 */
class IosHomeScreenFolderPage
{
    public function __construct(
        /** A list of apps and web clips to appear on a page within a folder. This collection can contain a maximum of 500 elements. */
        public array $apps = [],
        /** A page for a folder containing apps and web clips on the Home Screen. */
        public ?string $displayName = null
    ) {}
}
