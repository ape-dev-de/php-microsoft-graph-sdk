<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * AndroidWorkProfileCustomConfiguration
 */
class AndroidWorkProfileCustomConfiguration
{
    public function __construct(
        /** @var string[] Android Work Profile custom configuration */
        public array $omaSettings = []
    ) {}
}
