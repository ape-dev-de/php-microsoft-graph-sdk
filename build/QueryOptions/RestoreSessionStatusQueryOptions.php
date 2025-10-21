<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestoreSessionStatus resources
 *
 * Available select fields:
 */
class RestoreSessionStatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RestoreSessionStatus
     */

    /**
     * Select specific RestoreSessionStatus properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
