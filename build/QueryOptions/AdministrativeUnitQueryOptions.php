<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AdministrativeUnit resources
 *
 * Available select fields:
 */
class AdministrativeUnitQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AdministrativeUnit
     */

    /**
     * Select specific AdministrativeUnit properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
