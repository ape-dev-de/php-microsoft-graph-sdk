<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecuritySourceType resources
 *
 * Available select fields:
 */
class SecuritySourceTypeQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecuritySourceType
     */

    /**
     * Select specific SecuritySourceType properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
