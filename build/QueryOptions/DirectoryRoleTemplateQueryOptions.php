<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DirectoryRoleTemplate resources
 *
 * Available select fields:
 */
class DirectoryRoleTemplateQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DirectoryRoleTemplate
     */

    /**
     * Select specific DirectoryRoleTemplate properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
