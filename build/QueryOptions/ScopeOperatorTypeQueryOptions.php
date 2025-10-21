<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ScopeOperatorType resources
 *
 * Available select fields:
 */
class ScopeOperatorTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ScopeOperatorType
     */

    /**
     * Select specific ScopeOperatorType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
