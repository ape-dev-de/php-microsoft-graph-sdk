<?php

declare(strict_types=1);

namespace ApeDevDe\MicrosoftGraphSdk\QueryOptions;

/**
 * Query options for LicenseDetails resources
 *
 * Available select fields:
 */
class LicenseDetailsQueryOptions extends QueryOptions
{
    /**
     * Available select fields for LicenseDetails
     */

    /**
     * Select specific LicenseDetails properties
     *
     * @param array<string> $select
     * @return static
     */
    public function select(array $select): static
    {
        return parent::select($select);
    }
}
