<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AppCatalogs
 */
class AppCatalogs
{
    public function __construct(
        /** @var string[]  */
        public array $teamsApps = []
    ) {}
}
