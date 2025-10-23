<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppPermissionSet
 */
class TeamsAppPermissionSet
{
    /** 
     * A collection of resource-specific permissions.
     * @var TeamsAppResourceSpecificPermission[]
     */
    public array $resourceSpecificPermissions = [];


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['resourceSpecificPermissions'])) {
            $this->resourceSpecificPermissions = $data['resourceSpecificPermissions'];
        }
    }
}
