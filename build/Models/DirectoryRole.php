<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\Models;

/**
 * DirectoryRole
 */
class DirectoryRole
{
    public function __construct(
        /** The description for the directory role. Read-only. Supports $filter (eq), $search, $select. */
        public ?string $description = null,
        /** The display name for the directory role. Read-only. Supports $filter (eq), $search, $select. */
        public ?string $displayName = null,
        /** The id of the directoryRoleTemplate that this role is based on. The property must be specified when activating a directory role in a tenant with a POST operation. After the directory role has been activated, the property is read only. Supports $filter (eq), $select. */
        public ?string $roleTemplateId = null,
        /** Users that are members of this directory role. HTTP Methods: GET, POST, DELETE. Read-only. Nullable. Supports $expand. */
        public array $members = [],
        /** @var string[] Members of this directory role that are scoped to administrative units. Read-only. Nullable. */
        public array $scopedMembers = []
    ) {}
}
