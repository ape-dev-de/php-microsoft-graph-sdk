<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDataSourceContainer resources
 *
 * Available select fields:
 */
class SecurityDataSourceContainerQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDataSourceContainer
     */

    /**
     * Select specific SecurityDataSourceContainer properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
