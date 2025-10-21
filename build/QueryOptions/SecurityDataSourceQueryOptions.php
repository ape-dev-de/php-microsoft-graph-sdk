<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityDataSource resources
 *
 * Available select fields:
 */
class SecurityDataSourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityDataSource
     */

    /**
     * Select specific SecurityDataSource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
