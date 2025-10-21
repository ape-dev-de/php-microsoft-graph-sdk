<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for PrintOperation resources
 *
 * Available select fields:
 */
class PrintOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for PrintOperation
     */

    /**
     * Select specific PrintOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
