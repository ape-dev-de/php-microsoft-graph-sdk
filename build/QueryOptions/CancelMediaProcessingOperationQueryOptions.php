<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for CancelMediaProcessingOperation resources
 *
 * Available select fields:
 */
class CancelMediaProcessingOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for CancelMediaProcessingOperation
     */

    /**
     * Select specific CancelMediaProcessingOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
