<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RolePermission
 */
class RolePermission
{
    /** 
     * Resource Actions each containing a set of allowed and not allowed permissions.
     * @var ResourceAction[]
     */
    public array $resourceActions = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['resourceActions'])) {
            $this->resourceActions = $data['resourceActions'];
        }
    }
}
