<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityHostComponent resources
 *
 * Available select fields:
 */
class SecurityHostComponentQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityHostComponent
     */

    /**
     * Select specific SecurityHostComponent properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
