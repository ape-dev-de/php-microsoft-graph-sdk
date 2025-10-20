<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DirectoryRoleTemplate resources
 *
 * Available select fields:
 * - description
 * - displayName
 */
class DirectoryRoleTemplateQueryOptions extends QueryOptions
{
    public const FIELD_DESCRIPTION = 'description';
    public const FIELD_DISPLAY_NAME = 'displayName';

    /**
     * Select specific DirectoryRoleTemplate properties
     * 
     * @param array<string> $select Use DirectoryRoleTemplateQueryOptions::FIELD_* constants or property names
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
