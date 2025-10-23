<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * ScopedRoleMembership
 */
class ScopedRoleMembership
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Unique identifier for the administrative unit that the directory role is scoped to */
    public ?string $administrativeUnitId = null;

    /** Unique identifier for the directory role that the member is in. */
    public ?string $roleId = null;

    /**  */
    public ?Identity $roleMemberInfo = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['administrativeUnitId'])) {
            $this->administrativeUnitId = $data['administrativeUnitId'];
        }
        if (isset($data['roleId'])) {
            $this->roleId = $data['roleId'];
        }
        if (isset($data['roleMemberInfo'])) {
            $this->roleMemberInfo = $data['roleMemberInfo'];
        }
    }
}
