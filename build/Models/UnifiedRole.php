<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRole
 */
class UnifiedRole
{
    public function __construct(
        /** The unified role definition ID of the directory role. Refer to unifiedRoleDefinition resource. */
        public ?string $roleDefinitionId = null
    ) {}
}
