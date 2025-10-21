<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserActivityType resources
 *
 * Available select fields:
 */
class UserActivityTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserActivityType
     */

    /**
     * Select specific UserActivityType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
