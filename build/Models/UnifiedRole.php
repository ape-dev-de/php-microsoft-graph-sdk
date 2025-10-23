<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRole
 */
class UnifiedRole
{
    /** The unified role definition ID of the directory role. Refer to unifiedRoleDefinition resource. */
    public ?string $roleDefinitionId = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['roleDefinitionId'])) {
            $this->roleDefinitionId = $data['roleDefinitionId'];
        }
    }
}
