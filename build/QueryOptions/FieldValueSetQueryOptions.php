<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FieldValueSet resources
 *
 * Available select fields:
 */
class FieldValueSetQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FieldValueSet
     */

    /**
     * Select specific FieldValueSet properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
