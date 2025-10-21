<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoveryNoncustodialDataSource resources
 *
 * Available select fields:
 */
class SecurityEdiscoveryNoncustodialDataSourceQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEdiscoveryNoncustodialDataSource
     */

    /**
     * Select specific SecurityEdiscoveryNoncustodialDataSource properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
