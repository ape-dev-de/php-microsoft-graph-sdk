<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RoleAssignment
 */
class RoleAssignment
{
    /** The unique identifier for an entity. Read-only. */
    public ?string $id = null;

    /** Description of the Role Assignment. */
    public ?string $description = null;

    /** The display or friendly name of the role Assignment. */
    public ?string $displayName = null;

    /** 
     * List of ids of role scope member security groups.  These are IDs from Azure Active Directory.
     * @var string[]
     */
    public array $resourceScopes = [];

    /** 
     * Role definition this assignment is part of.
     * @var RoleDefinition|\stdClass|null
     */
    public mixed $roleDefinition = null;


    /**
     * Constructor - fast deserialization
     * @param array<string, mixed> $data
     */
    public function __construct(array $data = [])
    {
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['description'])) {
            $this->description = $data['description'];
        }
        if (isset($data['displayName'])) {
            $this->displayName = $data['displayName'];
        }
        if (isset($data['resourceScopes'])) {
            $this->resourceScopes = $data['resourceScopes'];
        }
        if (isset($data['roleDefinition'])) {
            $this->roleDefinition = $data['roleDefinition'];
        }
    }
}
