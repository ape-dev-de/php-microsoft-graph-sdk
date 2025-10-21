<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ScopeOperatorMultiValuedComparisonType resources
 *
 * Available select fields:
 */
class ScopeOperatorMultiValuedComparisonTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ScopeOperatorMultiValuedComparisonType
     */

    /**
     * Select specific ScopeOperatorMultiValuedComparisonType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
