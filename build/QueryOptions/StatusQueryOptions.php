<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for Status resources
 *
 * Available select fields:
 */
class StatusQueryOptions extends QueryOptions
{
    /**
     * Available select fields for Status
     */

    /**
     * Select specific Status properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
