<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDataSourceHoldStatus resources
 *
 * Available select fields:
 */
class SecurityDataSourceHoldStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDataSourceHoldStatus
     */

    /**
     * Select specific SecurityDataSourceHoldStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
