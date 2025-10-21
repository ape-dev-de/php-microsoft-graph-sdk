<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * IosHomeScreenPage
 */
class IosHomeScreenPage
{
    public function __construct(
        /** Name of the page */
        public ?string $displayName = null,
        /** A list of apps, folders, and web clips to appear on a page. This collection can contain a maximum of 500 elements. */
        public array $icons = []
    ) {}
}
