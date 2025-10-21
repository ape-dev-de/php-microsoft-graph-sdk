<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySearch resources
 *
 * Available select fields:
 */
class SecuritySearchQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecuritySearch
     */

    /**
     * Select specific SecuritySearch properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
