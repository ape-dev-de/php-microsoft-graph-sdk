<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DirectoryRole resources
 *
 * Available select fields:
 * - description
 * - displayName
 * - roleTemplateId
 * - members
 * - scopedMembers
 */
class DirectoryRoleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DirectoryRole
     */
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';
    public const FIELD_ROLE_TEMPLATE_ID = 'roleTemplateId';
    public const FIELD_MEMBERS = 'members';
    public const FIELD_SCOPED_MEMBERS = 'scopedMembers';

    /**
     * Select specific DirectoryRole properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
