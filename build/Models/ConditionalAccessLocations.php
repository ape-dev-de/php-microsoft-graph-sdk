<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ConditionalAccessLocations
 */
class ConditionalAccessLocations
{
    public function __construct(
        /** @var string[] Location IDs excluded from scope of policy. */
        public array $excludeLocations = [],
        /** @var string[] Location IDs in scope of policy unless explicitly excluded, All, or AllTrusted. */
        public array $includeLocations = []
    ) {}
}
