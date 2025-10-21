<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for RestoreJobType resources
 *
 * Available select fields:
 */
class RestoreJobTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for RestoreJobType
     */

    /**
     * Select specific RestoreJobType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
