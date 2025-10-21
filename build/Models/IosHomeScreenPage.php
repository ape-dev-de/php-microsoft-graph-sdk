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
        /** @var string[] A page containing apps, folders, and web clips on the Home Screen. */
        public array $icons = []
    ) {}
}
