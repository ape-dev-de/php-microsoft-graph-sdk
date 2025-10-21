<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for SecurityExportLocation resources
 *
 * Available select fields:
 */
class SecurityExportLocationQueryOptions extends QueryOptions
{
    /**
     * Available select fields for SecurityExportLocation
     */

    /**
     * Select specific SecurityExportLocation properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
