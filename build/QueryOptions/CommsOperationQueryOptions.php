<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CommsOperation resources
 *
 * Available select fields:
 */
class CommsOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CommsOperation
     */

    /**
     * Select specific CommsOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
