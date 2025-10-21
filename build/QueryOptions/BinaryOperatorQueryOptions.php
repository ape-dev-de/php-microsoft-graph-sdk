<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for BinaryOperator resources
 *
 * Available select fields:
 */
class BinaryOperatorQueryOptions extends QueryOptions
{
    /**
     * Available select fields for BinaryOperator
     */

    /**
     * Select specific BinaryOperator properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
