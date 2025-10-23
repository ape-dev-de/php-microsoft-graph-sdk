<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * UnifiedRolePermission
 */
class UnifiedRolePermission
{
    /** 
     * Set of tasks that can be performed on a resource. Required.
     * @var string[]
     */
    public array $allowedResourceActions = [];

    /** Optional constraints that must be met for the permission to be effective. Not supported for custom roles. */
    public ?string $condition = null;

    /** 
     * Set of tasks that may not be performed on a resource. Not yet supported.
     * @var string[]
     */
    public array $excludedResourceActions = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['allowedResourceActions'])) {
            $this->allowedResourceActions = $data['allowedResourceActions'];
        }
        if (isset($data['condition'])) {
            $this->condition = $data['condition'];
        }
        if (isset($data['excludedResourceActions'])) {
            $this->excludedResourceActions = $data['excludedResourceActions'];
        }
    }
}
