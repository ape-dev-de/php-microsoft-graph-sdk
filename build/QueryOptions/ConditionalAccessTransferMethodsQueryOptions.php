<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ConditionalAccessTransferMethods resources
 *
 * Available select fields:
 */
class ConditionalAccessTransferMethodsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ConditionalAccessTransferMethods
     */

    /**
     * Select specific ConditionalAccessTransferMethods properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
