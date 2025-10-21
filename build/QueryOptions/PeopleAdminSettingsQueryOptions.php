<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PeopleAdminSettings resources
 *
 * Available select fields:
 */
class PeopleAdminSettingsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PeopleAdminSettings
     */

    /**
     * Select specific PeopleAdminSettings properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
