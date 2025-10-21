<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * OrganizationalBranding
 */
class OrganizationalBranding
{
    public function __construct(
        /** @var string[] Add different branding based on a locale. */
        public array $localizations = []
    ) {}
}
