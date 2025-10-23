<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RoleManagement
 */
class RoleManagement
{
    /** 
     * 
     * @var RbacApplication|\stdClass|null
     */
    public mixed $directory = null;

    /** 
     * Container for roles and assignments for entitlement management resources.
     * @var RbacApplication|\stdClass|null
     */
    public mixed $entitlementManagement = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['directory'])) {
            $this->directory = is_array($data['directory']) ? new RbacApplication($data['directory']) : $data['directory'];
        }
        if (isset($data['entitlementManagement'])) {
            $this->entitlementManagement = is_array($data['entitlementManagement']) ? new RbacApplication($data['entitlementManagement']) : $data['entitlementManagement'];
        }
    }
}
