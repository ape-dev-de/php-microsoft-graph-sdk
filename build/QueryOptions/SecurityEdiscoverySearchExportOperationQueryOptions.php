<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityEdiscoverySearchExportOperation resources
 *
 * Available select fields:
 */
class SecurityEdiscoverySearchExportOperationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityEdiscoverySearchExportOperation
     */

    /**
     * Select specific SecurityEdiscoverySearchExportOperation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
