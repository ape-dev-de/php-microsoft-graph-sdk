<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for ActivityType resources
 *
 * Available select fields:
 */
class ActivityTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for ActivityType
     */

    /**
     * Select specific ActivityType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
