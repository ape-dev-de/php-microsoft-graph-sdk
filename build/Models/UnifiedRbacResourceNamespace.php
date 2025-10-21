<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRbacResourceNamespace
 */
class UnifiedRbacResourceNamespace
{
    public function __construct(
        /**  */
        public ?string $name = null,
        /** @var string[]  */
        public array $resourceActions = []
    ) {}
}
