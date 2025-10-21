<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * Entity
 */
class Entity
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null
    ) {}
}
