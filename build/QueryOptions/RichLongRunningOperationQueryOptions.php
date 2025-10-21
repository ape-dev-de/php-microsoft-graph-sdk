<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RichLongRunningOperation resources
 *
 * Available select fields:
 */
class RichLongRunningOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RichLongRunningOperation
     */

    /**
     * Select specific RichLongRunningOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
