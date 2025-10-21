<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for FilterOperand resources
 *
 * Available select fields:
 * - values
 */
class FilterOperandQueryOptions extends QueryOptions
{
    /**
     * Available select fields for FilterOperand
     */
    public const FIELD_VALUES = 'values';

    /**
     * Select specific FilterOperand properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
