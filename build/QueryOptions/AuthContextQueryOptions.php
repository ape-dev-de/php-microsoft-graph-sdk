<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for AuthContext resources
 *
 * Available select fields:
 */
class AuthContextQueryOptions extends QueryOptions
{
    /**
     * Available select fields for AuthContext
     */

    /**
     * Select specific AuthContext properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
