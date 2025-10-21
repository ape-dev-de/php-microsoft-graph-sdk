<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * RoleAssignment
 */
class RoleAssignment
{
    public function __construct(
        /** The unique identifier for an entity. Read-only. */
        public ?string $id = null,
        /** Description of the Role Assignment. */
        public ?string $description = null,
        /** The display or friendly name of the role Assignment. */
        public ?string $displayName = null,
        /** @var string[] List of ids of role scope member security groups.  These are IDs from Azure Active Directory. */
        public array $resourceScopes = [],
        /** Role definition this assignment is part of. */
        public ?RoleDefinition $roleDefinition = null
    ) {}
}
