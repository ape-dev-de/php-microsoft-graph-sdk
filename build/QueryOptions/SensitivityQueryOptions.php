<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Sensitivity resources
 *
 * Available select fields:
 */
class SensitivityQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Sensitivity
     */

    /**
     * Select specific Sensitivity properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
