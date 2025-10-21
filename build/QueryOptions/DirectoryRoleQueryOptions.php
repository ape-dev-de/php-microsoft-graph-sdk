<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for DirectoryRole resources
 *
 * Available select fields:
 */
class DirectoryRoleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for DirectoryRole
     */

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
