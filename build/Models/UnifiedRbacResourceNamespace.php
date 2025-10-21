<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRbacResourceNamespace
 */
class UnifiedRbacResourceNamespace
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /**  */
        public ?string $name = null,
        /**  */
        public array $resourceActions = []
    ) {}
}
