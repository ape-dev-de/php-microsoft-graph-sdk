<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for User resources
 *
 * Available select fields:
 */
class UserQueryOptions extends QueryOptions
{
    /**
     * Available select fields for User
     */

    /**
     * Select specific User properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
