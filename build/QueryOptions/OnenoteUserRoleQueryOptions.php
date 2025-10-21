<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for OnenoteUserRole resources
 *
 * Available select fields:
 */
class OnenoteUserRoleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for OnenoteUserRole
     */

    /**
     * Select specific OnenoteUserRole properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
