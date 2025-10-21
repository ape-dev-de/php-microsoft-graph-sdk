<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for UserStorage resources
 *
 * Available select fields:
 */
class UserStorageQueryOptions extends QueryOptions
{
    /**
     * Available select fields for UserStorage
     */

    /**
     * Select specific UserStorage properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
