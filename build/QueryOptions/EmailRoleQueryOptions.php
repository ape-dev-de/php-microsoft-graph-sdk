<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for EmailRole resources
 *
 * Available select fields:
 */
class EmailRoleQueryOptions extends QueryOptions
{
    /**
     * Available select fields for EmailRole
     */

    /**
     * Select specific EmailRole properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
