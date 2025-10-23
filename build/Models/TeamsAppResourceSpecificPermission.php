<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * TeamsAppResourceSpecificPermission
 */
class TeamsAppResourceSpecificPermission
{
    /** 
     * The type of resource-specific permission.
     * @var TeamsAppResourceSpecificPermissionType|\stdClass|null
     */
    public mixed $permissionType = null;

    /** The name of the resource-specific permission. */
    public ?string $permissionValue = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['permissionType'])) {
            $this->permissionType = is_array($data['permissionType']) ? new TeamsAppResourceSpecificPermissionType($data['permissionType']) : $data['permissionType'];
        }
        if (isset($data['permissionValue'])) {
            $this->permissionValue = $data['permissionValue'];
        }
    }
}
