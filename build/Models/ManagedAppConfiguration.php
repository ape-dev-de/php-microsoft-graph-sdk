<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ManagedAppConfiguration
 */
class ManagedAppConfiguration
{
    public function __construct(
        /** @var string[] Configuration used to deliver a set of custom settings as-is to apps for users to whom the configuration is scoped */
        public array $customSettings = []
    ) {}
}
