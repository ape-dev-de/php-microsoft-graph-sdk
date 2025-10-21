<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostPort resources
 *
 * Available select fields:
 */
class SecurityHostPortQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHostPort
     */

    /**
     * Select specific SecurityHostPort properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
