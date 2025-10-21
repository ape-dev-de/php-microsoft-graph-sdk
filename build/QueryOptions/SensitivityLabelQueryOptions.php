<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SensitivityLabel resources
 *
 * Available select fields:
 */
class SensitivityLabelQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SensitivityLabel
     */

    /**
     * Select specific SensitivityLabel properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
