<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserAction resources
 *
 * Available select fields:
 */
class UserActionQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserAction
     */

    /**
     * Select specific UserAction properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
